<?php
include 'wb-admin/autoloader.php';
$homeoptions = $Common->home_cms_manage();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Information and Cultural Affairs Department of West Bengal</title>
        <meta name="description" content="Experience the heart and soul of West Bengal's cultural legacy. The Information and Cultural Affairs Department invites you to explore diverse events and enriching heritage.">
        <link rel="canonical" href="https://www.wbicad.in/">
        <?php include 'include/header.php' ?>
    </head>
    <body>
        <?php include 'include/navigation.php' ?>

        <!-- /BANNER -->
        <?php
        $hbanners = $Common->get_post(HBANNNER);
        if (!empty($hbanners)):
            ?>
            <div class="banner-main">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        $i = 0;
                        foreach ($hbanners as $banner):
                            ?>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>" aria-current="<?php echo ($i == 0) ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $i; ?>"></button>
                            <?php
                            $i++;
                        endforeach;
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        $j = 0;
                        foreach ($hbanners as $banner):
                            ?>
                            <div class="carousel-item <?php echo ($j == 0) ? 'active' : ''; ?>">
                                <img src="<?php echo ASSET_URL . $banner['image']; ?>" class="img-fluid" alt="<?php echo $banner['title']; ?>">
                            </div>
                            <?php
                            $j++;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- /BANNER -->

        <!-- /NOTIFICATION -->
        <?php
        $notices = $Common->get_post(NOTICE);
        if (!empty($notices)):
            ?>
            <div class="notification">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-2 col-md-2">
                            <a href="<?php echo $base_url; ?>notice.php">
                                <div class="notification_head">
                                    <div class="pulseit"><i class="fa-solid fa-bullhorn"></i> Notification</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="marquee_text">
                                <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
                                    <?php foreach ($notices as $note): ?>
                                        <span>
                                            <a href="<?php echo ASSET_URL . $note['documents']; ?>" target="_blank">
                                                <?php echo $note['title']; ?> <img src="<?php echo $base_url; ?>images/pdf-icon.png" alt="">
                                            </a>
                                        </span>
                                    <?php endforeach; ?>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- /NOTIFICATION -->



 <!-- /Govt Scheme -->
        <div class="sectiongap">
            <div class="govscheme">
                <div class="container">
                    <div class="section-title text-left wow fadeInUp">
                        <h2><?php echo $homeoptions['about_heading']; ?></h2>
                    </div>
                    <div class="row justify-content-lg-center justify-content-start">
                        <div class="col-lg-4 col-md-5 mb-2 order-2 order-lg-1">
                            <img class="img-fluid" src="<?php echo ASSET_URL . $homeoptions['about_left_image']; ?>" >
                        </div>
                        <div class="col-lg-4 col-md-12 order-1 order-lg-2">
                            <?php echo $homeoptions['about_content']; ?>
                            <a class="btn btn-primary" href="<?php echo $base_url; ?>about.php" role="button">Read More</a>
                        </div>
                        
						
						<?php /*?>
						<div class="col-lg-4 col-md-6 order-3 order-lg-3">
                            <?php
                            $about_right_image = unserialize($homeoptions['about_right_image']);
                            if (!empty($about_right_image)):
                                ?>
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        $irr = 0;
                                        foreach ($about_right_image as $val):
                                            ?>
                                            <div class="carousel-item <?php echo ($irr == 0) ? 'active' : ''; ?>">
                                                <img src="<?php echo ASSET_URL . $val; ?>" class="img-fluid">
                                            </div>
                                            <?php
                                            $irr++;
                                        endforeach;
                                        ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
						<?php */?>
						 <div class="col-lg-4 col-md-6 order-3 order-lg-3">
						 <a href="https://bbss.wb.gov.in/" target="_blank">
						    <img src="<?php //echo $base_url; ?>images/sharad-samman-hoarding-2024.webp" alt="" class="img-fluid">
						 </a>
						 <div class=" mt-3 text-center">
						    <a href="https://www.wbicad.in/wb-admin/uploads/notice/4068914701661728561542.pdf" target="_blank" class="d-block" style="font-size:20px;font-weight:600;">
						        <span class="blink_me">BBSS 2024 - Winners List</span>
					        </a>
					        </div>
						</div> 
						
						
						
                    </div>
                </div>
            </div>
        </div>
        <!-- /Govt Scheme -->



        <!-- /Govt Scheme -->
        <?php /*
        <div class="sectiongap">
            <div class="govscheme">
                <div class="container">
                    <div class="section-title text-left wow fadeInUp">
                        <h2><?php echo $homeoptions['about_heading']; ?></h2>
                    </div>
                    <div class="row justify-content-lg-center justify-content-start">
                        <div class="col-lg-4 col-md-5 mb-2 order-2 order-lg-1">
                            <img class="img-fluid" src="<?php echo ASSET_URL . $homeoptions['about_left_image']; ?>" >
                        </div>
                        <div class="col-lg-4 col-md-12 order-1 order-lg-2">
                            <?php echo $homeoptions['about_content']; ?>
                            <a class="btn btn-primary" href="<?php echo $base_url; ?>about.php" role="button">Read More</a>

                        </div>
                        <div class="col-lg-4 col-md-6 order-3 order-lg-3">
                            <?php
                            $about_right_image = unserialize($homeoptions['about_right_image']);
                            if (!empty($about_right_image)):
                                ?>
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        $irr = 0;
                                        foreach ($about_right_image as $val):
                                            ?>
                                            <div class="carousel-item <?php echo ($irr == 0) ? 'active' : ''; ?>">
                                                <img src="<?php echo ASSET_URL . $val; ?>" class="img-fluid">
                                            </div>
                                            <?php
                                            $irr++;
                                        endforeach;
                                        ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       */ ?>
        <!-- /Govt Scheme -->

        <!-- /Site Page Overview One-->
        <div class="sectiongap">
            <div class="sitepages_one">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-md-5 col-lg-3 order-1 order-md-1 order-lg-1">
                            <div class="card h-100 box1">
                                <img src="<?php echo ASSET_URL . $homeoptions['cm_image']; ?>" class="card-img-top">
                                <div class="card-footer border-0">
                                    <?php echo $homeoptions['cm_info']; ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6  order-2 order-md-3 order-lg-2 h-100">
                            <div class="content_div box1">
                                <h4><?php echo $homeoptions['mission_vision_heading']; ?></h4>
                                <div class="scrollbox">
                                    <?php echo $homeoptions['mission_vision_content']; ?>
                                    <a href="<?php echo $base_url; ?>mission-vision.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-3 order-3 order-md-2 order-lg-3">
                            <div class="row g-2">
                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>govt-order.php">
                                        <div class="site_cols box2">
                                            <img src="<?php echo $base_url; ?>images/govt_order.webp" alt="" class="img-fluid">
                                            <p>Government Order</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>publication.php">
                                        <div class="site_cols box2">
                                            <img src="<?php echo $base_url; ?>images/publication_icon.webp" alt="" class="img-fluid">
                                            <p>Publication</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>notice.php">
                                        <div class="site_cols box2">
                                            <img src="<?php echo $base_url; ?>images/notice.webp" alt="" class="img-fluid">
                                            <p>Notice</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>tenders.php">
                                        <div class="site_cols box2">
                                            <img src="<?php echo $base_url; ?>images/tender.webp" alt="" class="img-fluid">
                                            <p>Tender</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Site Page Overview One-->

        <!-- /Site Page Overview Two-->
        <div class="sectiongap">
            <div class="sitepages_two">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-md-6 col-lg-3 order-1 order-md-3 order-lg-1">
                            <div class="row g-2">
                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>about.php">
                                        <div class="site_col box3">
                                            <img src="<?php echo $base_url; ?>images/wb-logo.webp" alt="" class="img-fluid">
                                            <p>About Us</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>act-rules.php">
                                        <div class="site_col box3">
                                            <img src="<?php echo $base_url; ?>images/service_rule_icon.webp" alt="" class="img-fluid">
                                            <p>Act & Rules</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-12">
                                    <a href="<?php echo $base_url; ?>rti.php">
                                        <div class="site_cols">
                                            <img src="<?php echo $base_url; ?>images/right-information-icon.webp" alt="" class="img-fluid">
                                            <p>Right to Information</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 order-2 order-md-1 order-lg-2">
                            <div class="link_image">
                                <img src="<?php echo ASSET_URL . $homeoptions['bottom_left_image']; ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 order-3 order-md-2 order-lg-3">
                            <div class="link_image">
                                <img src="<?php echo ASSET_URL . $homeoptions['bottom_right_image']; ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 order-4 order-md-3 order-lg-4">
                            <div class="row g-2">

                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>directorates/information.php">
                                        <div class="site_col box3">
                                            <img src="<?php echo $base_url; ?>images/information_icon.webp" alt="" class="img-fluid">
                                            <p>Information</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>directorates/culture.php">
                                        <div class="site_col box3">
                                            <img src="<?php echo $base_url; ?>images/culture.webp" alt="" class="img-fluid">
                                            <p>Culture</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>directorates/film.php">
                                        <div class="site_col box3">
                                            <img src="<?php echo $base_url; ?>images/film.webp" alt="" class="img-fluid">
                                            <p>Film</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-6 col-md-6">
                                    <a href="<?php echo $base_url; ?>directorates/archaeology.php">
                                        <div class="site_col box3">
                                            <img src="<?php echo $base_url; ?>images/archaeology.webp" alt="" class="img-fluid">
                                            <p>Archaeology</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Site Page Overview Two-->

        <?php include 'include/footer.php' ?>
        
        <script>
(function blink() {
    jQuery('.blink_me').fadeOut(500).fadeIn(500, blink);
})();
</script>

    </body>
</html>