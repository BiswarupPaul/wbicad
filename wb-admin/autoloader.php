<?php

include 'includes/config.php';

spl_autoload_register('loader');

function loader($className) {

    $path = __DIR__ . "/classes/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}

// Dynamically Class Instance Generate
$path = __DIR__ . "/classes/";
$ext = ".class.php";
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as &$value) {
    $class_Name = str_replace('.class.php', '', $value);
    ${"$class_Name"} = new $class_Name();
}

//Generate Ajax action to class function
if (isset($_REQUEST['action'])) {
    $postdata = $_POST;
    $action = $_REQUEST['action'];
    foreach ($files as &$value) {
        $class_Name = str_replace('.class.php', '', $value);
        if (method_exists($class_Name, $action)) {
            ${"$class_Name"} = new $class_Name();
            ${"$class_Name"}->$action($postdata);
            exit;
        }
    }
}