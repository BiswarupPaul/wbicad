<?php
include 'wb-admin/autoloader.php';
$about = $Common->about_cms_manage();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Us | Department of Information & Cultural Affairs, Kolkata</title>
        <meta name="description" content="Department of Information & Cultural Affairs, Kolkata">
        <meta name="keywords" content="Department of Information & Cultural Affairs, Information & Cultural Affairs">
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="dept_list">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-lg-2">
                                <div class="navig_list sticky_div">
                                    <ul>
                                        <li class="active">
                                            <a href="<?php echo $base_url; ?>about.php">About</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url; ?>mission-vision.php">Mission & Vision</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url; ?>act-rules.php">Act & Rules</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url; ?>notice.php">Notice</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-10">
                                <h2><strong>About Us</strong></h2>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <?php echo $about['about_content']; ?>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img class="img-fluid" src="<?php echo ASSET_URL . $about['about_image']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include 'include/footer.php' ?>
    </body>
</html>