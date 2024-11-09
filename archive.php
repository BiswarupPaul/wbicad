<?php
include 'wb-admin/autoloader.php';
$archives = $Common->get_post(ARCHIVE);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Archive - Information and Cultural Affairs Department</title>
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="container">
                    <h2><strong>District Digital Repository</strong></h2>
                    <div class="datatable mt-3">
                        <table id="archive" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="extra_width">Title</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($archives as $archive): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo ASSET_URL . $archive['documents']; ?>" target="_blank">
                                                <?php echo $archive['title']; ?>
                                            </a>
                                        </td>
                                        <td> 
                                            <a href="<?php echo ASSET_URL . $archive['documents']; ?>" target="_blank"> 
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