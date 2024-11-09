<?php



//Database Connection

define('DB_NAME', 'wbicad_db');

define('DB_USER', 'root');

define('DB_PASSWORD', '');

define('DB_HOST', 'localhost');



define('AJAX_URL', 'autoloader.php');

define('CURR_DATE', date('jS F, Y h:i A'));



$config['base_url'] = 'http://localhost/wbicad/';



define('SITE_URL', $config['base_url']);

define('ASSET_URL', $config['base_url'] . 'wb-admin/');



// Database Tables

define('PREFIX', 'wbinc_');

define('USERS', PREFIX . 'users');

define('USERSLOG',PREFIX . 'users_log');

define('OPTIONS', PREFIX . 'options');

define('HBANNNER', PREFIX . 'home_banner');

define('HOMEOPTIONS', PREFIX . 'home_options');

define('ABOUTOPTIONS', PREFIX . 'about_options	');

define('ACTRULES', PREFIX . 'act_rules');

define('NOTICE', PREFIX . 'notice');

define('BUDGET', PREFIX . 'budget');

define('TENDERS', PREFIX . 'tenders');

define('DIRECTORATES', PREFIX . 'directorates');

define('INSTITUTION', PREFIX . 'institution');

define('OFFICES', PREFIX . 'directorate_office');

define('SCHEMES', PREFIX . 'schemes');

define('ARCHIVE', PREFIX . 'archive');

define('RTI', PREFIX . 'rti');

define('PUBLICATION', PREFIX . 'publication');

define('DEPTHEAD', PREFIX . 'department_heads');

define('DEPTOFFICERS', PREFIX . 'department_officers');

define('OTHEROFFICERS', PREFIX . 'other_officers');

define('ECATEGORY', PREFIX . 'event_category');

define('EVENTS', PREFIX . 'events');
