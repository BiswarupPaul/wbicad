<?php
include '../wb-admin/autoloader.php';
$directorates = $Common->get_post(DIRECTORATES);

$filterby = $directorates[3]['ID'];

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
        <title>Archaeology - Information and Cultural Affairs Department</title>
        <?php include '../include/header.php' ?>
    </head>
    <body>
        <?php include '../include/navigation.php' ?>
        <!-- mid -->
        <div class="mid tick">
            <div class="sectiongap">
                <div class="container">
                    <h2><strong><?php echo $directorates[3]['title']; ?></strong></h2>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <img class="img-fluid" src="<?php echo ASSET_URL . $directorates[3]['about_image']; ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <?php echo $directorates[3]['about_directorate']; ?>
                        </div>
                        <div class="col-md-3">
                            <div class="directorate_pic">
                                <img src="<?php echo ASSET_URL . $directorates[3]['directorate_image']; ?>" alt="" class="img-fluid w-75">
                                <h4><?php echo $directorates[3]['directorate_designation']; ?></h4>
                                <h6><span><?php echo $directorates[3]['directorate_name']; ?></span></h6>
                                <p><span><i class="fa-solid fa-location-dot"></i> Address:</span> <?php echo $directorates[3]['directorate_office_address']; ?></p>
                            </div>
                        </div>
                    </div>

                    <?php if (!empty($directorates[3]['directorate_brief'])) { ?>
                        <div class="tick_double">
                            <?php echo $directorates[3]['directorate_brief']; ?>
                        </div>
                    <?php } ?>

                    <?php if (!empty($institution)) { ?>
                        <div class="mt-4">
                            <h2><strong><?php echo $directorates[3]['title']; ?> Institution/Academy</strong></h2>
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
                        </div>
                    <?php } ?>

                    <?php if (!empty($offices)) { ?>
                        <div class="mt-sm-5 mt-0">
                            <h2><strong>Name of the Offices under <?php echo $directorates[3]['title']; ?>:</strong></h2>
                            <div class="datatable mt-3 mb-5">
                                <table id="insitute-info" class="display data_short" style="width:100%">
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
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- /mid -->



        <?php include '../include/footer.php' ?>

    </body>

</html>