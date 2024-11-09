<?php
include 'wb-admin/autoloader.php';
$missionvision = $Common->about_cms_manage();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mission & Vission | Department of Information & Cultural Affairs, Kolkata</title>
        <meta name="description" content="Department of Information & Cultural Affairs, Kolkata">
        <meta name="keywords" content="Department of Information & Cultural Affairs, Information & Cultural Affairs">
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="container">
                    <div class="content_box">
                        <?php echo $missionvision['mission_vision_content']; ?>
                    </div>		
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include 'include/footer.php' ?>
    </body>
</html>