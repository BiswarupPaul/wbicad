<?php
include 'wb-admin/autoloader.php';
$publications = $Common->get_post(PUBLICATION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Publication - Information and Cultural Affairs Department</title>
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="container">
                    <div class="datatable">
                        <table id="example3" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>TITLE</th>
                                    <th>DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($publications as $publication): ?>
                                    <tr>                                
                                        <td><a href="<?php echo ASSET_URL . $publication['documents']; ?>" target="_blank"><?php echo $publication['title']; ?></a></td>
                                        <td><?php echo $publication['date']; ?></td>
                                    </tr>
                                <?php endforeach; ?>           
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="text-center mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Read More</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include 'include/footer.php' ?>
    </body>
</html>