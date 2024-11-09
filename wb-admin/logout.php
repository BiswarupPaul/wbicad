<?php

session_start();

session_destroy();
// Unset the cookie
unset($_COOKIE['wc_notice']);
setcookie('wc_notice', '', time() - 3600, '/');

// Redirect to a different page than the index page
header('Location: https://wbicad.in/wb-admin');
exit;
?>
