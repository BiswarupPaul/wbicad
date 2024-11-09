
<!---FOOTER-->
<footer>
    <div class="container text-center">
        <ul>
            <li><a href="<?php echo $base_url; ?>archive.php">Archive</a></li>
            <li><a href="<?php echo $base_url; ?>rti.php">Right to Information</a></li>
            <li><a href="<?php echo $base_url; ?>copyright.php">Copyright Policy</a></li>
            <li><a href="<?php echo $base_url; ?>terms.php">Terms Of Use</a></li>
            <li><a href="<?php echo $base_url; ?>links.php">Links</a></li>
            <li><a href="<?php echo $base_url; ?>publication.php">Publication</a></li>

            <li><a href="<?php echo $base_url; ?>sitemap.php">Site Map</a></li>
            <li><a href="<?php echo $base_url; ?>downloads.php">Downloads</a></li>

        </ul>
        <div class="disclimer">
            <p>
                <strong>Disclaimer:</strong>  Site Contents owned, designed, developed, maintained and updated by the Information &amp; Cultural Affairs Department, Government of West Bengal.
            </p>
        </div>

        <div class="copyright">
            <p>Official Site of Government of West Bengal, India | Copyright 
                <script>document.write(new Date().getFullYear())</script>, All Rights Reserved.
            </p>
        </div>

        <div class="social_div">
            <div class="row">
                <div class="float-center">
                    <img src="<?php echo $base_url; ?>images/web-accessibility-complient.jpg" alt="" class="img-fluid">
                </div>
                <!--<div class="col-6 col-md-6">
                    <div class="social_icons">
                        <div class="social_icon">
                            <a class="social-button" target="_blank" href="https://www.facebook.com/wb.gov.in/" style="background-color:#2087e7;"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a class="social-button" target="_blank" style="background-color:#1c0b24;" href="https://twitter.com/egiye_bangla"><i class="fa-brands fa-x-twitter"></i></a>
                            <a class="social-button" target="_blank" href="https://www.youtube.com/channel/UCU915TXpyO1DiqS1nqCBvEg" style="background-color:#e01627;"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>-->
            </div>
        </div>
</footer>
<!---FOOTER-->

<script src="<?php echo $base_url; ?>js/jquery-min.js"></script>
<script src="<?php echo $base_url; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base_url; ?>js/jquery.inputmask.bundle.min.js"></script>

<script src="<?php echo $base_url; ?>js/stellarnav.js"></script>
<script src="<?php echo $base_url; ?>js/waitMe.min.js"></script>
<script src="<?php echo $base_url; ?>js/custom.js"></script>
<script src="<?php echo $base_url; ?>js/scrolltofixed-min.js"></script>
<script src="<?php echo $base_url; ?>js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>


                    $(document).ready(function () {
                        $('#example, #example2, #example3, #example4, #example6, #example7, #example8,#culture,#film_one,#film_two,#service_rules,#archive,#budget').dataTable();

                          // Initialize specific DataTables with no ordering
                          $('#example5').dataTable({
                           "ordering": false,
                           columnDefs: [{ width: '20%', targets: 1 }]
                             }); 
                             
                        $('#insitute-culture,#insitute-info,#insitute-film,#insitute-arch,#insitute-basu').dataTable({
                            "order": []
                        });



                        $('#contact').dataTable({
                            order: [],
                            autoWidth: false,
                            columns: [
                                {"width": "60%"},
                                {"width": "40%"}
                            ]
                        });

                        $('#tender_tbl').dataTable({
                            order: [],
                            ordering: false,
                            autoWidth: false,
                            columns: [
                                {"width": "70%"},
                                /*{"width": "15%"},
                                {"width": "15%"}*/
                            ]
                        });


                    });
</script>



<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
                    $(function () {
                        $("#datepicker").datepicker();
                        $("#datepicker2").datepicker();
                    });
</script>

<script>
    $('.galbox').each(function () {
        var rel = $(this).attr('rel');
        Fancybox.bind('a[rel=' + rel + ']');
    });
</script>
