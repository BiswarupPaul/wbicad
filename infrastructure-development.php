<?php
include 'wb-admin/autoloader.php';
$schemes = $Common->get_post(SCHEMES)[2];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Infrastructure Development - Information and Cultural Affairs Department</title>
        <?php include'include/header.php' ?>
    </head>
    <body>
        <?php include'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="dept_list">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <div class="navig_list sticky_div">
                                    <ul>
                                        <li>
                                            <a href="social-welfare-schemes.php">Social Welfare Schemes</a>
                                        </li>
                                        <li>
                                            <a href="awards-and-sammans.php">Awards and Sammans</a>
                                        </li>
                                        <li class="active">
                                            <a href="infrastructure-development.php">Infrastructure Development</a>
                                        </li>
                                        <li>
                                            <a href="restoration-and-conservation.php">Restoration and Conservation</a>
                                        </li>
                                        <li>
                                            <a href="other-major-initiatives.php">Other major initiatives</a>
                                        </li>                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-9 tick tick_double">
                                <h2><strong><?php echo $schemes['title']; ?> - </strong></h2>
                                <?php echo $schemes['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include'include/footer.php' ?>
    </body>
</html>