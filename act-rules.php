<?php
include 'wb-admin/autoloader.php';
$actrules = $Common->get_post(ACTRULES);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Act & Rules | Department of Information & Cultural Affairs, Kolkata</title>
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
                    <h2><strong>Act & Rules</strong></h2>
                    <div class="datatable mt-3">
                        <table id="service_rules" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="extra_width">Title</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>                            
                                <?php foreach ($actrules as $rules): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo ASSET_URL . $rules['documents']; ?>" target="_blank">
                                                <?php echo $rules['title']; ?>
                                            </a>
                                        </td>
                                        <td> 
                                            <a href="<?php echo ASSET_URL . $rules['documents']; ?>" target="_blank"> 
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
        </div>
        <!-- /mid -->
        <?php include 'include/footer.php' ?>
    </body>
</html>