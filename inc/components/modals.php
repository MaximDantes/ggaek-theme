<div class="modal hidden log-in-modal">
    <div class="modal-window card-wrapper">
        <?php wp_login_form()?>
    </div>
</div>

<div class="modal hidden sign-up-modal">
    <div class="modal-window card-wrapper">
       <?php echo do_shortcode('[wppb-register]') ?>
    </div>
</div>