<?php
include 'wb-admin/autoloader.php';
$alloffices = $Common->get_post(OFFICES);
$filterinfo = 1;
$filtercul = 2;
$filterflim = 3;
$filterarch = 4;
$filterbasu = 5;

$information_office = array_filter($alloffices, function ($var) use ($filterinfo) {
    return ($var['directorate_id'] == $filterinfo && $var['status'] == 1 );
});
$culter_office = array_filter($alloffices, function ($var) use ($filtercul) {
    return ($var['directorate_id'] == $filtercul && $var['status'] == 1);
});
$flim_office = array_filter($alloffices, function ($var) use ($filterflim) {
    return ($var['directorate_id'] == $filterflim && $var['status'] == 1);
});
$archaeology_office = array_filter($alloffices, function ($var) use ($filterarch) {
    return ($var['directorate_id'] == $filterarch && $var['status'] == 1);
});
$basumati_office = array_filter($alloffices, function ($var) use ($filterbasu) {
    return ($var['directorate_id'] == $filterbasu && $var['status'] == 1);
});

$headmembers = $Common->get_post(DEPTHEAD);
$officers = $Common->get_post(DEPTOFFICERS);
$otherofficers = $Common->get_post(OTHEROFFICERS);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us - Information and Cultural Affairs Department</title>
        <?php include 'include/header.php'; ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="container">
                    <h2><strong>Information and Cultural Affairs Department</strong></h2>
                    <div class="row equalheight mb-3">
                        <?php foreach ($headmembers as $mem) { ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="contact_div">
                                    <img src="<?php echo ASSET_URL . $mem['image']; ?>" alt="" class="img-fluid">
                                    <h4><?php echo $mem['designation']; ?></h4>
                                    <h6><span><?php echo $mem['title']; ?></span></h6>
                                    <ul>
                                        <?php if (!empty($mem['address'])) { ?>
                                            <li>
                                                <span><i class="fa-solid fa-location-dot"></i> Address:</span> 
                                                <?php echo $mem['address']; ?>
                                            </li>
                                        <?php } ?>
                                        <?php if (!empty($mem['contact'])) { ?>
                                            <li>
                                                <span><i class="fa-solid fa-phone"></i> Phone:</span> 
                                                <?php echo $mem['contact']; ?>
                                            </li>
                                        <?php } ?>
                                        <?php if (!empty($mem['fax'])) { ?>
                                            <li>
                                                <span><i class="fa-solid fa-print"></i> Fax:</span> 
                                                <?php echo $mem['fax']; ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <h2><strong>Directorates of Information and Cultural Affairs Department</h2>
                    <div class="row equalheight mb-3">
                        <?php foreach ($officers as $mem) { ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="contact_div">
                                    <img src="<?php echo ASSET_URL . $mem['image']; ?>" alt="" class="img-fluid">
                                    <h4><?php echo $mem['designation']; ?></h4>
                                    <h6><span><?php echo $mem['title']; ?></span></h6>
                                    <ul>
                                        <?php if (!empty($mem['address'])) { ?>
                                            <li>
                                                <span><i class="fa-solid fa-location-dot"></i> Address:</span> 
                                                <?php echo $mem['address']; ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <?php if (!empty($otherofficers)) { ?>
                        <h4><u>Name of officers  and their post at I&CA Department’s Head quarters or different Academies/ Institution</u></h4>
                        <div class="datatable mt-3 mb-5">
                            <table id="contact" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name of the Officer </th>
                                        <th>Holding the Post</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($otherofficers as $mem) { ?>
                                        <tr>
                                            <td><?php echo $mem['officer_name']; ?></td>
                                            <td><?php echo $mem['holding_post']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>         
                    <?php } ?>

                    <div class="tab_area mt-5">
                        <h2><strong>Name of the Offices under Directorate</strong></h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="t1" data-bs-toggle="tab" data-bs-target="#Information" type="button" role="tab" aria-controls="Information" aria-selected="true">Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="t2" data-bs-toggle="tab" data-bs-target="#Culture" type="button" role="tab" aria-controls="Culture" aria-selected="false">Culture</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="t3" data-bs-toggle="tab" data-bs-target="#Film" type="button" role="tab" aria-controls="Film" aria-selected="false">Film</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="t4" data-bs-toggle="tab" data-bs-target="#Archaeology" type="button" role="tab" aria-controls="Archaeology" aria-selected="false">Archaeology</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="t5" data-bs-toggle="tab" data-bs-target="#Basumati" type="button" role="tab" aria-controls="Basumati" aria-selected="false">Basumati</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="Information" role="tabpanel" aria-labelledby="t1">
                                <div class="datatable mt-3 mb-5">
                                    <table id="insitute-info" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="extra_width">Office Name</th>
                                                <th>Officers Name</th>
                                                <th>Designation</th>
                                                <th>E-Mail ID</th>
                                                <th>Contact No.</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($information_office as $office) { ?>
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

                            <div class="tab-pane fade" id="Culture" role="tabpanel" aria-labelledby="t2">
                                <div class="datatable mt-3 mb-5">
                                    <table id="insitute-culture" class="display" style="width:100%">
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
                                            <?php foreach ($culter_office as $office) { ?>
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

                            <div class="tab-pane fade" id="Film" role="tabpanel" aria-labelledby="t3">
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
                                            <?php foreach ($flim_office as $office) { ?>
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

                            <div class="tab-pane fade" id="Archaeology" role="tabpanel" aria-labelledby="t4">
                                <div class="datatable mt-3 mb-5">
                                    <table id="insitute-arch" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="extra_width">Office Name</th>
                                                <th>Officers Name</th>
                                                <th>Designation</th>
                                                <th>E-Mail ID</th>
                                                <th>Contact No.</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($archaeology_office as $office) { ?>
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

                            <div class="tab-pane fade" id="Basumati" role="tabpanel" aria-labelledby="t5">
                                <div class="datatable mt-3 mb-5">
                                    <table id="insitute-basu" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="extra_width">Office Name</th>
                                                <th>Officers Name</th>
                                                <th>Designation</th>
                                                <th>E-Mail ID</th>
                                                <th>Contact No.</th>
                                                <th>Office Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($basumati_office as $office) { ?>
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

                        </div>
                    </div>

                    <div class="col-md-8 offset-md-2 dbl_btn">
                        <div class="maildiv">
                            <a href="mailto:ica-dept@wb.gov.in"><i class="fa-solid fa-envelope"></i> Email Us: ica-dept@wb.gov.in</a>
                            <a href="pdf/Application-form-for-new-PA-card.pdf" target="_blank"><i class="fa-solid fa-download"></i> Download Application form for new PA card</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /mid -->

        <div class="flt_icon float-btn">
            <i class="fa-solid fa-envelope"></i>
            <a href="mailto:ica-dept@wb.gov.in" target="_blank"> ica-dept@wb.gov.in</a>
        </div>

        <?php include 'include/footer.php' ?>

    </body>

</html>