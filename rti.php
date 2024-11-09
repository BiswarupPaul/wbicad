<?php
include 'wb-admin/autoloader.php';
$rtis = $Common->get_post(RTI);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Right to Information - Information and Cultural Affairs Department</title>
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="container">
                    <h2><strong>RTI Officials</strong></h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rtis as $rti): ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo ASSET_URL . $rti['documents']; ?>" target="_blank">
                                            <?php echo $rti['title']; ?>
                                        </a>
                                    </td>
                                    <td> 
                                        <a href="<?php echo ASSET_URL . $rti['documents']; ?>" target="_blank"> 
                                            <img src="images/pdf-icon.png" alt=""> 
                                        </a>
                                    </td>								
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>               
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include 'include/footer.php' ?>
    </body>
</html>