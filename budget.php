<?php
include 'wb-admin/autoloader.php';
$budgets = $Common->get_post(BUDGET);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Budget - Information and Cultural Affairs Department</title>
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="container">
                    <h2><strong>Budget</strong></h2>
                    <div class="datatable mt-3">
                        <table id="budget" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="extra_width">Title</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>   
                                <?php foreach ($budgets as $budget): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo ASSET_URL . $budget['documents']; ?>" target="_blank">
                                                <?php echo $budget['title']; ?>
                                            </a>
                                        </td>
                                        <td> 
                                            <a href="<?php echo ASSET_URL . $budget['documents']; ?>" target="_blank"> 
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