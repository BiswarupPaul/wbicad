<?php
include '../wb-admin/autoloader.php';
$directorates = $Common->get_post(DIRECTORATES);

$filterby = $directorates[4]['ID'];

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
        <title>Institution/Academy-Basumati - Information and Cultural Affairs Department</title>
        <?php include '../include/header.php'; ?>
    </head>
    <body>
        <?php include '../include/navigation.php' ?> 
        <!-- mid -->
        <div class="mid tick">
            <div class="sectiongap">
                <div class="container">
                    <h2><strong>Basumati Corporation Limited:</strong></h2>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <img class="img-fluid" src="<?php echo ASSET_URL . $directorates[4]['about_image']; ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <?php echo $directorates[4]['about_directorate']; ?>
                        </div>
                        <div class="col-md-3">
                            <div class="directorate_pic">
                                <img src="<?php echo ASSET_URL . $directorates[4]['directorate_image']; ?>" alt="" class="img-fluid w-75">
                                <h4><?php echo $directorates[4]['directorate_designation']; ?></h4>
                                <h6><span><?php echo $directorates[4]['directorate_name']; ?></span></h6>
                                <p><span><i class="fa-solid fa-location-dot"></i> Address:</span> <?php echo $directorates[4]['directorate_office_address']; ?></p>
                            </div>
                        </div>
                    </div>

                    <?php if (!empty($offices)) { ?>
                        <h2><strong>Name of the Offices under Basumati Corporation Limited:</strong></h2>
                        <div class="datatable mt-3 mb-5">
                            <table id="insitute-basu" class="display" style="width:100%">
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

                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include '../include/footer.php' ?>
    </body>
</html>