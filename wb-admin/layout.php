<?php
/*

 * All Page Layout

 */



$string = $_REQUEST['p'];

$fslug = strtok($string, '-');

$slug = str_replace($fslug . '-', '', $string);



include 'includes/header.php';



include 'views/' . $fslug . '/' . $slug . '.php';



include 'includes/footer.php';

