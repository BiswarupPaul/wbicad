<?php
include '../wb-admin/autoloader.php';
$directorates = $Common->get_post(DIRECTORATES);

$filterby = $directorates[2]['ID'];

$allinstitution = $Common->get_post(INSTITUTION);
$institution = array_filter($allinstitution, function ($var) use ($filterby) {
    return ($var['directorate_id'] == $filterby);
});

$alloffices = $Common->get_post(OFFICES);
$offices = array_filter($alloffices, function ($var) use ($filterby) {
    return ($var['directorate_id'] == $filterby);
});
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Institution/Academy-Film - Information and Cultural Affairs Department</title>
        <?php include '../include/header.php'; ?>
    </head>
    <body>
        <?php include '../include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="dept_list academy">
                    <div class="container">
                        <h2><strong>Film Institution/Academy</strong></h2>
                        <div class="row">
                            <div class="col-md-3 col-lg-2">
                                <div class="navig_list sticky_div">
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url; ?>institution-academy/information.php">Information</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url; ?>institution-academy/culture.php">Culture</a>
                                        </li>
                                        <li class="active">
                                            <a href="<?php echo $base_url; ?>institution-academy/film.php">Film</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url; ?>institution-academy/archaeology.php">Archaeology</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url; ?>institution-academy/basumati.php">Basumati Corp. Ltd.</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-10">
                                <?php if (!empty($offices)) { ?>
                                    <h4><u>Name of the Offices under Directorate of Film:</u></h4>
                                    <div class="datatable mt-3 mb-5">
                                        <table id="insitute-film" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="extra_width">Office Name</th>
                                                    <th>Officers Name</th>
                                                    <th>Designation</th>
                                                    <th>E-mail ID</th>
                                                    <th>Contact No.</th>
                                                    <th>Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>                            
                                                <?php foreach ($offices as $office) { ?>
                                                    <tr>
                                                        <td><?php echo $office['office_name'] ?></td>
                                                        <td><?php echo $office['officers_name'] ?></td>
                                                        <td><?php echo $office['designation'] ?></td>
                                                        <td><?php echo $office['email'] ?></td>
                                                        <td><?php echo $office['contact'] ?></td>
                                                        <td><?php echo $office['address'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } ?>

                                <?php if (!empty($institution)) { ?>
                                    <div class="row equalheight">
                                        <?php
                                        $i = 1;
                                        foreach ($institution as $ins) {
                                            $image = '';
                                            if (!empty($ins['image'])) {
                                                $image = ASSET_URL . $ins['image'];
                                            } else {
                                                $image = 'https://wbicad.in/dev/wbicad/images/no-images.webp';
                                            }
                                            ?>
                                            <div class="col-md-4 col-lg-4 mb-3">
                                                <div class="card">
                                                    <a class="galbox" href="<?php echo $image; ?>" data-fancybox="gallery" rel="group<?php echo $i; ?>">
                                                        <img src="<?php echo $image; ?>" alt="" class="img-fluid">
                                                        <div class="card-body">
                                                            <h6><?php echo $ins['title'] ?></h6>
                                                        </div>
                                                    </a>
                                                    <?php
                                                    if (!empty($ins['gallery_image'])) {
                                                        foreach (unserialize($ins['gallery_image']) as $gal) {
                                                            ?>
                                                            <a class="galbox" href="<?php echo ASSET_URL . $gal; ?>" data-fancybox="gallery" rel="group<?php echo $i; ?>"></a>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include '../include/footer.php' ?>
    </body>
</html>