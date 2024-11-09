<?php
$data = [];
if (isset($_COOKIE['wc_notice'])) {
    $wc_notice = json_decode($_COOKIE['wc_notice'], true);
    $data = $wc_notice['data'];
}
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>
<?php if (isset($data['type']) && $data['type'] == 'success') { ?>
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-absolute top-0 end-0 p-3" style="z-index:9999;">
            <div id="notify" class="toast fade align-items-center bg-success text-light border-0" role="alert" data-bs-delay="4000" data-bs-autohide="true" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <?php echo $data['msg']; ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto"  data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
<?php } elseif (isset($data['type']) && $data['type'] == 'warning') { ?>
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-absolute top-0 end-0 p-3">
            <div id="notify" class="toast align-items-center bg-warning text-light border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <?php echo $data['msg']; ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
<?php } elseif (isset($data['type']) && $data['type'] == 'error') { ?>
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-absolute top-0 end-0 p-3">
            <div id="notify" class="toast align-items-center bg-danger text-light border-0" role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
                <div class="d-flex">
                    <div class="toast-body">
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <?php echo $data['msg']; ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>