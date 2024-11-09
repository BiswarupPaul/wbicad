<?php
include 'wb-admin/autoloader.php';
$tenders = $Common->get_post(TENDERS);
rsort($tenders);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tenders - Information and Cultural Affairs Department</title>
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>
        <!-- mid -->
        <div class="mid">
            <div class="sectiongap">
                <div class="container">
                    <h2><strong>Tenders</strong></h2>
                    <!-- Tenders -->
                    <div class="tenders">
                        <div class="datatable mt-3 mb-3">
                            <table id="tender_tbl" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        
                                        <th class="extra_width">Details</th>
                                        <!-- <th>Date Of Issue</th>
                                        <th>Last Date Of Reciept</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tenders as $tender): ?>
                                        <tr>
                                            <td>
                                                <ul>
                                                    <li><strong>Department :</strong> <?php echo $tender['department']; ?></li>
                                                    <li><strong>Description :</strong> <?php echo $tender['description']; ?></li>
                                                    <li>
                                                        <strong>Download Tender :</strong> 
                                                        <a href="<?php echo !empty($tender['link']) ? $tender['link'] : ASSET_URL . $tender['documents']; ?>" target="_blank"><img src="images/pdf-icon.png"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <!-- <td><?php //echo $tender['date_of_issue']; ?></td>
                                            <td><?php //echo $tender['last_date_of_receipt']; ?></td> -->
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="https://wbtenders.gov.in/nicgep/app?component=%24DirectLink&page=FrontEndTendersByOrganisation&service=direct&session=T&sp=SzrWGe2omRwS4kkUKQoNi3tS0Fec7wUuNy1YFXyqSerE%3D" role="button" target="_blank">eTenders of I&CA Department</a>
                            <a class="btn btn-primary" href="https://wbtenders.gov.in/nicgep/app" role="button" target="_blank">View All Tenders</a>
                        </div>
                    </div>
                    <!-- /Tenders -->
                </div>
            </div>
        </div>
        <!-- /mid -->
        <?php include 'include/footer.php' ?>
    </body>
</html>