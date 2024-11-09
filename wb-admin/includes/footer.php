</div>
</div>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <script>document.write(new Date().getFullYear())</script>  Your Website</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Scroll to Top Button-->
<div id="backto-top"><i class="fa-solid fa-arrow-up"></i></div>

<!-- JavaScript-->
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/sb-admin-2.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/jquery.uploadPreview.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.inputmask.min.js"></script>
 

<?php if (isset($_COOKIE['wc_notice'])) { ?>
    <script type="text/javascript">
                    const myToastEl = document.getElementById('notify')
                    myToastEl.addEventListener('hidden.bs.toast', () => {
                        jQuery.ajax({
                            data: {action: 'remove_notice'},
                            type: 'post',
                            url: '<?php echo AJAX_URL; ?>',
                            success: function (res) {
                                //console.log(res);
                            }
                        });
                        return false;
                    });
    </script>
<?php } ?>
</body>
</html>