<?php
include 'wb-admin/autoloader.php';
$notices = $Common->get_post(NOTICE);
// Sort notices by date in descending order
usort($notices, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Notice - Information and Cultural Affairs Department</title>
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">

                <div class="container">
                    <h2><strong>Notice</strong></h2>
                    <!-- Notice -->
                    <div class="tenders">
                        <div class="datatable mt-3">
                            <table id="example5" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="extra_width">Title</th>
                                        <th class="extra_width">Date</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($notices as $note): ?>
                                        <tr>
                                            <td><a href="<?php echo ASSET_URL . $note['documents']; ?>" target="_blank"><?php echo $note['title']; ?></a></td>                                
                                            <td><?php echo $note['date']; ?></td>
                                            <td> 
                                                <a href="<?php echo ASSET_URL . $note['documents']; ?>" target="_blank"> 
                                                    <img src="images/pdf-icon.png" alt=""> 
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /Notice -->
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include 'include/footer.php' ?>
    </body>
</html>