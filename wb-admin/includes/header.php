<?php
include 'autoloader.php';

session_start();

// include 'includes/security_headers.php';

// setSecurityHeaders();


if (!isset($_SESSION['admin'])) {
     header('location:index.php');
     exit;
  }

$Common->wc_notice();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Busfam Admin - Dashboard</title>

        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/sb-admin.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.bootstrap5.min.css">
        <link href="css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link href="css/custom.css" rel="stylesheet" />
        <link rel="icon" href="img/logo-icon.webp">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    </head>

    <body>
        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php include 'includes/leftpanel.php' ?>
            <?php include 'includes/topbar.php' ?>

            <!-- Begin Page Content -->
            <div class="page-content container position-relative">
                <div class="wrapper">
                    <script type="text/javascript">
    function checkUserTime()
    {
        $.ajax({
            url:"check-user-time.php",
            method:"post",
            success:function(response)
            {
                if (response=='logout') {
                    window.location.href='layout.php?action=admin_logout';
                }
            }
        });
    }
    setInterval(function(){
    checkUserTime();
    },2000);
</script>