<div class="wrap">
    <span class="alignright">
        <a target="_blank" href="<?php _e( 'https://www.satellitewp.com/en', 'swp-font-resizer' ); ?>">
            <img src="<?php echo $this->plugin_dir_url; ?>/images/satellitewp.png" alt="SatelliteWP" style="height:38px; width:202px">
        </a>
    </span>
    <h1><?php _e( 'Accessibility Font Resizer', 'swp-font-resizer' ); ?></h1>
    <p>
        <?php _e( 'Manage your font resizing settings to enable a better accessibility for your visitors.', 'swp-font-resizer' ); ?>
    </p>
    <form method="post" action="options.php">
        <?php
        settings_fields( 'swp_font_resizer' );
        do_settings_sections( 'swp_font_resizer' );
        submit_button();
        ?>
    </form>
</div>