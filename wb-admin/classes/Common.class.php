<?php



//include_once './helper/ToWebp.php';



class Common extends Database {



    public function __construct() {

        

    }



    public function is_multi_array($arr) {

        rsort($arr);

        return isset($arr[0]) && is_array($arr[0]);

    }



    public function wc_add_notice($type = '', $msg = '') {

        $data = [];

        $data = ['status' => 1, 'data' => ['type' => $type, 'msg' => $msg]];

        setcookie("wc_notice", json_encode($data), time() + 86400, "/");

        echo '';

    }



    public function wc_notice() {

        $notice = '';

        ob_start();

        require_once 'includes/notification.php';

        $notice = ob_get_clean();

        echo $notice;

    }



    public function remove_notice() {

        unset($_COOKIE['wc_notice']);

        setcookie('wc_notice', '', time() - 3600, '/');

        die;

    }



    public function reArrayFilesMultiple(&$files) {

        foreach ($_FILES as $field => $files) {

            if (is_array($files['name'])) {

                foreach ($files['name'] as $key => $file) {

                    $_FILES[$field][$key]['name'] = $file;

                    $_FILES[$field][$key]['type'] = $files['type'][$key];

                    $_FILES[$field][$key]['size'] = $files['size'][$key];

                    $_FILES[$field][$key]['tmp_name'] = $files['tmp_name'][$key];

                    $_FILES[$field][$key]['error'] = $files['error'][$key];

                }

            } else {

                $_FILES[$field][0]['name'] = $files['name'];

                $_FILES[$field][0]['type'] = $files['type'];

                $_FILES[$field][0]['size'] = $files['size'];

                $_FILES[$field][0]['tmp_name'] = $files['tmp_name'];

                $_FILES[$field][0]['error'] = $files['error'];

            }

            unset($_FILES[$field]['name'], $_FILES[$field]['type'], $_FILES[$field]['size'], $_FILES[$field]['tmp_name'], $_FILES[$field]['error']);

        }

    }



    public function media_upload($data = array()) {

        $fileVal = array();

        if (!empty($data)) {

            $file_name = $data['name'];

            $file_temp = $data['tmp_name'];

            $fileextarr = explode('.', $file_name);

            $file_ext = end($fileextarr);

            $date = date('m/d/Yh:i:sa', time());

            $rand = rand(10000, 99999);

            $encname = $date . $rand;

            $filename = md5($encname) . '.' . $file_ext;

            $filepath = 'uploads/' . $data['dir'] . '/' . $filename;

            move_uploaded_file($file_temp, $filepath);



            $ToWebp = new ToWebp();

            $result = $ToWebp->convert($filepath, 80, true);

            //$fileVal = serialize((array) $result);

            $fileVal = $result;

        }

        return $fileVal;

    }



    public function admin_login() {
        session_start();
    
        $username = !empty($_POST['user_name']) ? trim($_POST['user_name']) : null;
        $password = !empty($_POST['user_pass']) ? trim($_POST['user_pass']) : null;
    
        try {
            $sql = 'SELECT * FROM ' . USERS . ' WHERE user_name = ?';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user === false) {
                $this->wc_add_notice('error', 'Invalid username or password.');
            } else {
                $validPassword = password_verify($password, $user['user_pass']);
                if ($validPassword) {
                    $sql = 'SELECT * FROM ' . USERSLOG . ' WHERE user_id = ? AND status = "active"';
                    $stmt = $this->connect()->prepare($sql);
                    $stmt->execute([$user['ID']]);
                    $login = $stmt->fetch(PDO::FETCH_ASSOC);
    
                    if ($login) {
                        $this->wc_add_notice('error', 'You are already logged in.');
                        echo json_encode(['status' => 'error', 'message' => 'You are already logged in.']);
                        exit;
                    }
    
                    session_regenerate_id(true);
    
                    $session_id = session_id();
                    $ip_address = $_SERVER['REMOTE_ADDR'];
    
                    // Insert new session information with updated login_time
                   $sql = 'INSERT INTO ' . USERSLOG . ' (user_id, session_id, ip_address, login_time, status, last_activity) VALUES (?, ?, ?, CURRENT_TIMESTAMP, "active", CURRENT_TIMESTAMP)';
                    $stmt = $this->connect()->prepare($sql);
                    $stmt->execute([$user['ID'], $session_id, $ip_address]);
                    $_SESSION['last_activity'] = time();
                    $_SESSION['admin'] = $user;
                    $this->wc_add_notice('success', 'Successfully logged in.');
                    echo json_encode(['status' => 'success', 'redirect' => 'dashboard.php']);
                    exit;
                } else {
                    $this->wc_add_notice('error', 'Invalid username or password.');
                }
            }
        } catch (PDOException $error) {
            $this->wc_add_notice('error', $error->getMessage());
        }
        die;
    }
    
    
    
    
    public function admin_logout() {
        session_start();
    
        if (isset($_SESSION['admin'])) {
            $user_id = $_SESSION['admin']['ID'];
    
            try {
                // Update session status to inactive
                $sql_update = 'UPDATE ' . USERSLOG . ' SET status = "inactive" WHERE user_id = ? AND status = "active"';
                $stmt_update = $this->connect()->prepare($sql_update);
                $stmt_update->execute([$user_id]);
    
                // Delete the inactive session record
                $sql_delete = 'DELETE FROM ' . USERSLOG . ' WHERE user_id = ? AND status = "inactive"';
                $stmt_delete = $this->connect()->prepare($sql_delete);
                $stmt_delete->execute([$user_id]);
    
                // Destroy the session
                session_unset();
                session_destroy();
    
                // Clear cookies related to notices (if any)
                unset($_COOKIE['wc_notice']);
                setcookie('wc_notice', '', time() - 3600, '/');
    
                // Redirect to login page
                header('Location: index.php');
                $this->wc_add_notice('success', 'Successfully logged out.');
                exit;
            } catch (PDOException $error) {
                $this->wc_add_notice('error', $error->getMessage());
                echo json_encode(array('status' => 'error', 'message' => $error->getMessage()));
            }
        } else {
            // If session is not set, handle accordingly (though it should not typically happen here)
            $this->wc_add_notice('error', 'Session not found. Please log in again.');
            header('Location: index.php');
            exit;
        }
    }
    


    
    public function options() {

        if (isset($_POST['action'])) {

            try {

                /* foreach ($_POST['meta'] as $key => $val) {

                  $sql = 'INSERT INTO ' . OPTIONS . ' (option_name, option_value) VALUES (?,?)';

                  $this->connect()->prepare($sql)->execute([$key, $val]);

                  } */

                foreach ($_POST['meta'] as $key => $val) {

                    $sql = 'UPDATE ' . OPTIONS . ' SET option_value=? WHERE option_name=?';

                    $this->connect()->prepare($sql)->execute([$val, $key]);

                }



                //File Upload

                if (isset($_FILES)) {

                    foreach ($_FILES as $key => $val) {

                        if (!empty($val['name'])) {

                            $file_name = $val['name'];

                            $file_temp = $val['tmp_name'];

                            $fileextarr = explode('.', $file_name);

                            $file_ext = end($fileextarr);

                            $date = date('m/d/Yh:i:sa', time());

                            $rand = rand(10000, 99999);

                            $encname = $date . $rand;

                            $filename = md5($encname) . '.' . $file_ext;

                            $filepath = "uploads/common/" . $filename;

                            move_uploaded_file($file_temp, $filepath);



                            $ToWebp = new ToWebp();

                            $result = $ToWebp->convert($filepath, 80, true);

                            $fileVal = serialize((array) $result);



                            $sql = 'UPDATE ' . OPTIONS . ' SET option_value=? WHERE option_name=?';

                            $this->connect()->prepare($sql)->execute([$fileVal, $key]);

                        }

                    }

                }



                $this->wc_add_notice('success', 'Data save successfully.');

                //echo json_encode(array('status' => 'success', 'redirect' => 'site-setting.php'));

                header('Location: site-setting.php');

            } catch (PDOException $error) {

                $this->wc_add_notice('error', $error->getMessage());

            }

        } else {

            try {

                $sql = 'SELECT option_name, option_value FROM ' . OPTIONS;

                $stmt = $this->connect()->query($sql);

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $options = [];

                foreach ($results as $res) {

                    $options[$res['option_name']] = $res['option_value'];

                }

                return $options;

            } catch (PDOException $error) {

                $this->wc_add_notice('error', $error->getMessage());

            }

        }

        die;

    }


    public function add_update_post() {

        $data = $_POST['post'];

        $meta_data = $_POST['meta'];

        $meta_keys = array();

        $fileVal = array();



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];

            } else {

                $sql = "INSERT INTO " . POST . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . POST . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }



            if ($insert_id) {



                //File Upload

                if (isset($_FILES)) {

                    foreach ($_FILES as $key => $file) {

                        if ($this->is_multi_array($file)) {

                            $count = count($file['name']);

                            for ($i = 0; $i < $count; $i++) {

                                $file_arr = array(

                                    'name' => $file['name'][$i],

                                    'tmp_name' => $file['tmp_name'][$i],

                                    'dir' => $data['post_type']

                                );

                                $fileVal[] = $this->media_upload($file_arr);

                            }

                        } else {

                            $file_arr[]['name'] = $file['name'];

                            $file_arr[]['tmp_name'] = $file['tmp_name'];

                            $file_arr[]['dir'] = $data['post_type'];

                            $fileVal[] = $this->media_upload($file_arr);

                        }

                    }

                }

                echo '<pre>';

                print_r($fileVal);

                echo '</pre>';

                die;



                if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                    $sql = 'SELECT meta_key FROM ' . POSTMETA . ' WHERE post_id =' . $insert_id;

                    $stmt = $this->connect()->query($sql);

                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $meta_keys = array_column($results, 'meta_key');

                }

                foreach ($meta_data as $key => $val) {

                    $val = is_array($val) ? serialize($val) : $val;

                    if (in_array($key, $meta_keys)) {

                        $sql = 'UPDATE ' . POSTMETA . ' SET meta_value=? WHERE meta_key LIKE "' . $key . '" AND post_id=?';

                        $this->connect()->prepare($sql)->execute([$val, $insert_id]);

                    } else {

                        $sql = 'INSERT INTO ' . POSTMETA . ' (post_id, meta_key, meta_value) VALUES (?,?,?)';

                        $this->connect()->prepare($sql)->execute([$insert_id, $key, $val]);

                    }

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }
    


    public function get_post($table = '', $id = '') {

        try {

            if ($id != '') {

                $sql = 'SELECT * FROM ' . $table . ' WHERE ID = ' . $id;

            } else {

                $sql = 'SELECT * FROM ' . $table ;

            }

            $stmt = $this->connect()->query($sql);

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }
    


    public function delete_post() {
        $table = $_POST['table_name'];
        $ids = is_array($_POST['id']) ? $_POST['id'] : array($_POST['id']);
        $redirect = $_POST['redirect'];
    
        try {
            if (is_array($ids) && !empty($ids)) {
                $placeholders = implode(',', array_fill(0, count($ids), '?'));
                $sql = "DELETE FROM $table WHERE ID IN ($placeholders)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute($ids);
            }
    
            $this->wc_add_notice('success', 'Data deleted successfully.');
            echo json_encode(array('status' => 'success', 'redirect' => $redirect));
        } catch (PDOException $error) {
            $this->wc_add_notice('error', $error->getMessage());
            echo json_encode(array('status' => 'error', 'message' => $error->getMessage()));
        }
    
        die;
    }
    



    public function add_update_home_banner() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . HBANNNER . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . HBANNNER . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . HBANNNER . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                if ($_FILES['image']['tmp_name'] != '') {

                    $target_path = 'uploads/home_banner/';

                    $file_name = $_FILES['image']['name'];

                    $file_tmp = $_FILES['image']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . HBANNNER . ' SET image=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function home_cms_manage() {

        if (isset($_POST['action'])) {

            $img_arr = array();

            try {

                /* foreach ($_POST['meta'] as $key => $val) {

                  $sql = 'INSERT INTO ' . OPTIONS . ' (option_name, option_value) VALUES (?,?)';

                  $this->connect()->prepare($sql)->execute([$key, $val]);

                  } */

                foreach ($_POST['meta'] as $key => $val) {

                    $sql = 'UPDATE ' . HOMEOPTIONS . ' SET option_value=? WHERE option_name=?';

                    $this->connect()->prepare($sql)->execute([$val, $key]);

                }



                //File Upload

                if (isset($_FILES)) {

                    $target_path = 'uploads/home_cms/';

                    if (!empty($_FILES['about_right_image']['tmp_name'])) {

                        for ($j = 0; $j < count($_FILES["about_right_image"]['name']); $j++) {

                            $file_name = $_FILES['about_right_image']['name'][$j];

                            $file_tmp = $_FILES['about_right_image']['tmp_name'][$j];

                            if (!empty($file_name)) {

                                $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                                $img = $target_path . $img_name;

                                move_uploaded_file($file_tmp, $img);

                                $img_arr[$j] = $img;

                            }

                        }



                        if (!empty($img_arr)) {

                            $stmt = $this->connect()->query('SELECT option_name, option_value FROM ' . HOMEOPTIONS);

                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            $options = [];

                            foreach ($results as $res) {

                                $options[$res['option_name']] = $res['option_value'];

                            }

                            $about_right_image = isset($options['about_right_image']) ? unserialize($options['about_right_image']) : [];

                            if (!empty($about_right_image)) {

                                $img_arr_key = array_keys($img_arr);

                                foreach ($img_arr_key as $key) {

                                    unset($about_right_image[$key]);

                                }

                                $img_arr = $about_right_image + $img_arr;

                            }

                            ksort($img_arr);

                            $sql = 'UPDATE ' . HOMEOPTIONS . ' SET option_value=? WHERE option_name=?';

                            $this->connect()->prepare($sql)->execute([serialize($img_arr), 'about_right_image']);

                        }

                    } else {

                        foreach ($_FILES as $key => $val) {

                            if (!empty($val['name'])) {

                                $file_name = $val['name'];

                                $file_tmp = $val['tmp_name'];

                                $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                                $img = $target_path . $img_name;

                                move_uploaded_file($file_tmp, $img);



                                $sql = 'UPDATE ' . HOMEOPTIONS . ' SET option_value=? WHERE option_name=?';

                                $this->connect()->prepare($sql)->execute([$img, $key]);

                            }

                        }

                    }

                }



                $this->wc_add_notice('success', 'Data save successfully.');

                //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

                header('Location: ' . $_POST['redirect']);

            } catch (PDOException $error) {

                $this->wc_add_notice('error', $error->getMessage());

            }

        } else {

            try {

                $sql = 'SELECT option_name, option_value FROM ' . HOMEOPTIONS;

                $stmt = $this->connect()->query($sql);

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $options = [];

                foreach ($results as $res) {

                    $options[$res['option_name']] = $res['option_value'];

                }

                return $options;

            } catch (PDOException $error) {

                $this->wc_add_notice('error', $error->getMessage());

            }

        }

        die;

    }



    public function about_cms_manage() {

        if (isset($_POST['action'])) {

            $img_arr = array();

            try {

                /* foreach ($_POST['meta'] as $key => $val) {

                  $sql = 'INSERT INTO ' . OPTIONS . ' (option_name, option_value) VALUES (?,?)';

                  $this->connect()->prepare($sql)->execute([$key, $val]);

                  } */

                foreach ($_POST['meta'] as $key => $val) {

                    $sql = 'UPDATE ' . ABOUTOPTIONS . ' SET option_value=? WHERE option_name=?';

                    $this->connect()->prepare($sql)->execute([$val, $key]);

                }



                //File Upload

                if (isset($_FILES)) {

                    $target_path = 'uploads/about_cms/';

                    if (!empty($_FILES['about_right_image']['tmp_name'])) {

                        for ($j = 0; $j < count($_FILES["about_right_image"]['name']); $j++) {

                            $file_name = $_FILES['about_right_image']['name'][$j];

                            $file_tmp = $_FILES['about_right_image']['tmp_name'][$j];

                            if (!empty($file_name)) {

                                $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                                $img = $target_path . $img_name;

                                move_uploaded_file($file_tmp, $img);

                                $img_arr[$j] = $img;

                            }

                        }



                        if (!empty($img_arr)) {

                            $stmt = $this->connect()->query('SELECT option_name, option_value FROM ' . ABOUTOPTIONS);

                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            $options = [];

                            foreach ($results as $res) {

                                $options[$res['option_name']] = $res['option_value'];

                            }

                            $about_right_image = isset($options['about_right_image']) ? unserialize($options['about_right_image']) : [];

                            if (!empty($about_right_image)) {

                                $img_arr_key = array_keys($img_arr);

                                foreach ($img_arr_key as $key) {

                                    unset($about_right_image[$key]);

                                }

                                $img_arr = $about_right_image + $img_arr;

                            }

                            ksort($img_arr);

                            $sql = 'UPDATE ' . ABOUTOPTIONS . ' SET option_value=? WHERE option_name=?';

                            $this->connect()->prepare($sql)->execute([serialize($img_arr), 'about_right_image']);

                        }

                    } else {

                        foreach ($_FILES as $key => $val) {

                            if (!empty($val['name'])) {

                                $file_name = $val['name'];

                                $file_tmp = $val['tmp_name'];

                                $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                                $img = $target_path . $img_name;

                                move_uploaded_file($file_tmp, $img);



                                $sql = 'UPDATE ' . ABOUTOPTIONS . ' SET option_value=? WHERE option_name=?';

                                $this->connect()->prepare($sql)->execute([$img, $key]);

                            }

                        }

                    }

                }



                $this->wc_add_notice('success', 'Data save successfully.');

                //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

                header('Location: ' . $_POST['redirect']);

            } catch (PDOException $error) {

                $this->wc_add_notice('error', $error->getMessage());

            }

        } else {

            try {

                $sql = 'SELECT option_name, option_value FROM ' . ABOUTOPTIONS;

                $stmt = $this->connect()->query($sql);

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $options = [];

                foreach ($results as $res) {

                    $options[$res['option_name']] = $res['option_value'];

                }

                return $options;

            } catch (PDOException $error) {

                $this->wc_add_notice('error', $error->getMessage());

            }

        }

        die;

    }



    public function add_update_act_rules() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . ACTRULES . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . ACTRULES . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . ACTRULES . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                if ($_FILES['documents']['tmp_name'] != '') {

                    $target_path = 'uploads/act_rules/';

                    $file_name = $_FILES['documents']['name'];

                    $file_tmp = $_FILES['documents']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . ACTRULES . ' SET documents=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_notice() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . NOTICE . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . NOTICE . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . NOTICE . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }



            if ($insert_id) {

                if ($_FILES['documents']['tmp_name'] != '') {

                    $target_path = 'uploads/notice/';

                    $file_name = $_FILES['documents']['name'];

                    $file_tmp = $_FILES['documents']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . NOTICE . ' SET documents=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }
    public function add_update_budget() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . BUDGET . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . BUDGET . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . BUDGET . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                if ($_FILES['documents']['tmp_name'] != '') {

                    $target_path = 'uploads/budget/';

                    $file_name = $_FILES['documents']['name'];

                    $file_tmp = $_FILES['documents']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . BUDGET . ' SET documents=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    // public function add_update_budget() {
    //     $data = $_POST['post'];
    
    //     try {
    //         if (isset($_POST['page']) && $_POST['page'] == 'edit') {
    //             $insert_id = $_POST['page_id'];
    
    //             // Update existing budget record
    //             $sql = "UPDATE " . BUDGET . " SET " . implode(', ', array_map(function($key) { return "$key = ?"; }, array_keys($data))) . " WHERE ID = ?";
    //             $stmt = $this->connect()->prepare($sql);
    //             $params = array_merge(array_values($data), [$insert_id]);
    //             $stmt->execute($params);
    //         } else {
    //             // Insert new budget record
    //             $sql = "INSERT INTO " . BUDGET . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";
    //             $this->connect()->prepare($sql)->execute($data);
    
    //             // Retrieve the last inserted ID
    //             $q = $this->connect()->query('SELECT LAST_INSERT_ID()');
    //             $insert_id = $q->fetchColumn();
    //         }
    
    //         // Handle file upload if a file is provided
    //         if ($_FILES['documents']['tmp_name'] != '') {
    //             $target_path = 'uploads/budget/';
    //             $file_name = $_FILES['documents']['name'];
    //             $file_tmp = $_FILES['documents']['tmp_name'];
    //             $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));
    //             $img = $target_path . $img_name;
    //             move_uploaded_file($file_tmp, $img);
    
    //             // Update the budget record with the uploaded file path
    //             $sql = 'UPDATE ' . BUDGET . ' SET documents=? WHERE ID=?';
    //             $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);
    //         }
    
    //         $this->wc_add_notice('success', 'Data saved successfully.');
    //         header('Location: ' . $_POST['redirect']);
    //         exit;
    //     } catch (PDOException $error) {
    //         $this->wc_add_notice('error', $error->getMessage());
    //         // Log the error or handle it appropriately
    //         echo json_encode(array('status' => 'error', 'message' => $error->getMessage()));
    //         die;
    //     }
    // }
    


    public function add_update_tender() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . TENDERS . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . TENDERS . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . TENDERS . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                if ($_FILES['documents']['tmp_name'] != '') {

                    $target_path = 'uploads/tenders/';

                    $file_name = $_FILES['documents']['name'];

                    $file_tmp = $_FILES['documents']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . TENDERS . ' SET documents=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function directorates_cms_manage() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . DIRECTORATES . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . DIRECTORATES . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . DIRECTORATES . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                $target_path = 'uploads/directorates/';



                if ($_FILES['about_image']['tmp_name'] != '') {

                    $file_name = $_FILES['about_image']['name'];

                    $file_tmp = $_FILES['about_image']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . DIRECTORATES . ' SET about_image=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }



                if ($_FILES['directorate_image']['tmp_name'] != '') {

                    $file_name = $_FILES['directorate_image']['name'];

                    $file_tmp = $_FILES['directorate_image']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . DIRECTORATES . ' SET directorate_image=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_directorates_institution() {

        $data = $_POST['post'];

        $img_arr = array();

        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . INSTITUTION . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . INSTITUTION . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . INSTITUTION . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                $target_path = 'uploads/institution/';



                if ($_FILES['image']['tmp_name'] != '') {

                    $file_name = $_FILES['image']['name'];

                    $file_tmp = $_FILES['image']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . INSTITUTION . ' SET image=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }



                if (!empty($_FILES['gallery_image']['tmp_name'])) {

                    for ($j = 0; $j < count($_FILES["gallery_image"]['name']); $j++) {

                        $file_name = $_FILES['gallery_image']['name'][$j];

                        $file_tmp = $_FILES['gallery_image']['tmp_name'][$j];

                        if (!empty($file_name)) {

                            $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                            $img = $target_path . $img_name;

                            move_uploaded_file($file_tmp, $img);

                            $img_arr[$j] = $img;

                        }

                    }



                    if (!empty($img_arr)) {

                        $stmt = $this->connect()->query('SELECT gallery_image FROM ' . INSTITUTION . ' WHERE ID = ' . $insert_id);

                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);



                        $gallery_image = isset($results[0]['gallery_image']) ? unserialize($results[0]['gallery_image']) : [];

                        if (!empty($gallery_image)) {

                            $img_arr_key = array_keys($img_arr);

                            foreach ($img_arr_key as $key) {

                                unset($gallery_image[$key]);

                            }

                            $img_arr = $gallery_image + $img_arr;

                        }

                        ksort($img_arr);

                        $sql = 'UPDATE ' . INSTITUTION . ' SET gallery_image=? WHERE ID = ?';

                        $this->connect()->prepare($sql)->execute([serialize($img_arr), $insert_id]);

                    }

                }

            }



            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_directorate_office() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . OFFICES . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . OFFICES . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . OFFICES . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }



            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_schemes() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . SCHEMES . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . SCHEMES . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . SCHEMES . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }



            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    // public function add_update_archive() {

    //     $data = $_POST['post'];



    //     try {

    //         if (isset($_POST['page']) && $_POST['page'] == 'edit') {

    //             $insert_id = $_POST['page_id'];



    //             if (count($data) > 0) {

    //                 foreach ($data as $key => $value) {

    //                     $inputs[] = " $key = ? ";

    //                     $valueArray[] = $value;

    //                 }

    //             }

    //             $implodeArray = implode(', ', $inputs);



    //             $sql = "UPDATE " . ARCHIVE . " SET $implodeArray WHERE ID = $insert_id";

    //             $this->connect()->prepare($sql)->execute($valueArray);

    //         } else {

    //             $sql = "INSERT INTO " . ARCHIVE . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

    //             $this->connect()->prepare($sql)->execute($data);



    //             $q = $this->connect()->query('SELECT ID FROM ' . ARCHIVE . ' ORDER BY ID DESC LIMIT 1');

    //             $insert_id = $q->fetchColumn();

    //         }

    //         if ($insert_id) {

    //             if ($_FILES['documents']['tmp_name'] != '') {

    //                 $target_path = 'uploads/archive/';

    //                 $file_name = $_FILES['documents']['name'];

    //                 $file_tmp = $_FILES['documents']['tmp_name'];

    //                 $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

    //                 $img = $target_path . $img_name;

    //                 move_uploaded_file($file_tmp, $img);

    //                 $sql = 'UPDATE ' . ARCHIVE . ' SET documents=? WHERE ID=?';

    //                 $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

    //             }

    //         }

    //         $this->wc_add_notice('success', 'Data save successfully.');

    //         //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

    //         header('Location: ' . $_POST['redirect']);

    //     } catch (PDOException $error) {

    //         $this->wc_add_notice('error', $error->getMessage());

    //     }

    //     die;

    // }
    public function add_update_archive() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . ARCHIVE . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . ARCHIVE . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . ARCHIVE . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                if ($_FILES['documents']['tmp_name'] != '') {

                    $target_path = 'uploads/archive/';

                    $file_name = $_FILES['documents']['name'];

                    $file_tmp = $_FILES['documents']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . ARCHIVE . ' SET documents=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_rti() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . RTI . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . RTI . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . RTI . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                if ($_FILES['documents']['tmp_name'] != '') {

                    $target_path = 'uploads/rti/';

                    $file_name = $_FILES['documents']['name'];

                    $file_tmp = $_FILES['documents']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . RTI . ' SET documents=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }


    public function add_update_publication() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . PUBLICATION . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . PUBLICATION . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . PUBLICATION . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }



            if ($insert_id) {

                if ($_FILES['documents']['tmp_name'] != '') {

                    $target_path = 'uploads/publication/';

                    $file_name = $_FILES['documents']['name'];

                    $file_tmp = $_FILES['documents']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . PUBLICATION . ' SET documents=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_head() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . DEPTHEAD . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . DEPTHEAD . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . DEPTHEAD . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                $target_path = 'uploads/contacts/';



                if ($_FILES['image']['tmp_name'] != '') {

                    $file_name = $_FILES['image']['name'];

                    $file_tmp = $_FILES['image']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . DEPTHEAD . ' SET image=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_officers() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . DEPTOFFICERS . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . DEPTOFFICERS . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . DEPTOFFICERS . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }

            if ($insert_id) {

                $target_path = 'uploads/contacts/';



                if ($_FILES['image']['tmp_name'] != '') {

                    $file_name = $_FILES['image']['name'];

                    $file_tmp = $_FILES['image']['tmp_name'];

                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));

                    $img = $target_path . $img_name;

                    move_uploaded_file($file_tmp, $img);

                    $sql = 'UPDATE ' . DEPTOFFICERS . ' SET image=? WHERE ID=?';

                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);

                }

            }

            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



    public function add_update_other_officers() {

        $data = $_POST['post'];



        try {

            if (isset($_POST['page']) && $_POST['page'] == 'edit') {

                $insert_id = $_POST['page_id'];



                if (count($data) > 0) {

                    foreach ($data as $key => $value) {

                        $inputs[] = " $key = ? ";

                        $valueArray[] = $value;

                    }

                }

                $implodeArray = implode(', ', $inputs);



                $sql = "UPDATE " . OTHEROFFICERS . " SET $implodeArray WHERE ID = $insert_id";

                $this->connect()->prepare($sql)->execute($valueArray);

            } else {

                $sql = "INSERT INTO " . OTHEROFFICERS . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";

                $this->connect()->prepare($sql)->execute($data);



                $q = $this->connect()->query('SELECT ID FROM ' . OTHEROFFICERS . ' ORDER BY ID DESC LIMIT 1');

                $insert_id = $q->fetchColumn();

            }



            $this->wc_add_notice('success', 'Data save successfully.');

            //echo json_encode(array('status' => 'success', 'redirect' => $_POST['redirect']));

            header('Location: ' . $_POST['redirect']);

        } catch (PDOException $error) {

            $this->wc_add_notice('error', $error->getMessage());

        }

        die;

    }



   public function add_update_events() {
        $data = $_POST['post'];
    
        // Combine start_date and end_date into a single field
        
    
        $img_arr = array();
    
        try {
            if (isset($_POST['page']) && $_POST['page'] == 'edit') {
                $insert_id = $_POST['page_id'];
                if (count($data) > 0) {
                    foreach ($data as $key => $value) {
                        $inputs[] = " $key = ? ";
                        $valueArray[] = $value;
                    }
                }
                $implodeArray = implode(', ', $inputs);
                $sql = "UPDATE " . EVENTS . " SET $implodeArray WHERE ID = $insert_id";
                $this->connect()->prepare($sql)->execute($valueArray);
            } else {
                $sql = "INSERT INTO " . EVENTS . " (" . implode(', ', array_keys($data)) . ") VALUES (:" . implode(', :', array_keys($data)) . ")";
                $this->connect()->prepare($sql)->execute($data);
                $q = $this->connect()->query('SELECT ID FROM ' . EVENTS . ' ORDER BY ID DESC LIMIT 1');
                $insert_id = $q->fetchColumn();
            }
            if ($insert_id) {
                $target_path = 'uploads/events/';
                if ($_FILES['image']['tmp_name'] != '') {
                    $file_name = $_FILES['image']['name'];
                    $file_tmp = $_FILES['image']['tmp_name'];
                    $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));
                    $img = $target_path . $img_name;
                    move_uploaded_file($file_tmp, $img);
                    $sql = 'UPDATE ' . EVENTS . ' SET image=? WHERE ID=?';
                    $stmt = $this->connect()->prepare($sql)->execute([$img, $insert_id]);
                }
    
                if (!empty($_FILES['gallery_image']['tmp_name'])) {
                    for ($j = 0; $j < count($_FILES["gallery_image"]['name']); $j++) {
                        $file_name = $_FILES['gallery_image']['name'][$j];
                        $file_tmp = $_FILES['gallery_image']['tmp_name'][$j];
                        if (!empty($file_name)) {
                            $img_name = rand(1, 1111111111111) . time() . '.' . end(explode('.', $file_name));
                            $img = $target_path . $img_name;
                            move_uploaded_file($file_tmp, $img);
                            $img_arr[$j] = $img;
                        }
                    }
    
                    if (!empty($img_arr)) {
                        $stmt = $this->connect()->query('SELECT gallery_image FROM ' . EVENTS . ' WHERE ID = ' . $insert_id);
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $gallery_image = isset($results[0]['gallery_image']) ? unserialize($results[0]['gallery_image']) : [];
                        if (!empty($gallery_image)) {
                            $img_arr_key = array_keys($img_arr);
                            foreach ($img_arr_key as $key) {
                                unset($gallery_image[$key]);
                            }
                            $img_arr = $gallery_image + $img_arr;
                        }
                        ksort($img_arr);
                        $sql = 'UPDATE ' . EVENTS . ' SET gallery_image=? WHERE ID = ?';
                        $this->connect()->prepare($sql)->execute([serialize($img_arr), $insert_id]);
                    }
                }
            }
    
            $this->wc_add_notice('success', 'Data save successfully.');
            header('Location: ' . $_POST['redirect']);
        } catch (PDOException $error) {
            $this->wc_add_notice('error', $error->getMessage());
        }
        die;
    }

}

