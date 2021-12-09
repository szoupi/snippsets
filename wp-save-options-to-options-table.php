<?php
    // whitelist options
    function register_mysettings() {
        register_setting( 'myoption-group', 'Facebook' );
        register_setting( 'myoption-group', 'LinkedIn' );
        register_setting( 'myoption-group', 'Twitter' );
        register_setting( 'myoption-group', 'Pinterest' );
        register_setting( 'myoption-group', 'GooglePlus' );
    }
?>

<div class="wrap">
    <h2>Sharing plugin settings</h2>

    <?php
        add_action( 'admin_init', 'register_mysettings' );
        settings_fields( 'myoption-group' );
        do_settings_sections( 'myoption-group' );
    ?>

    <form method="post" action="options.php">
        <label for="Facebook">Facebook</label>
        <input type="checkbox" name="Facebook" value="<?php echo get_option('Facebook'); ?>" checked="checked" /><br/>
        <label for="LinkedIn">LinkedIn</label>
        <input type="checkbox" name="LinkedIn" value="<?php echo get_option('LinkedIn'); ?>" checked="checked" /><br/>
        <label for="Twitter">Twitter</label>
        <input type="checkbox" name="Twitter" value="<?php echo get_option('Twitter'); ?>" checked="checked" /><br/>
        <label for="Pinterest">Pinterest</label>
        <input type="checkbox" name="Pinterest" value="<?php echo get_option('Pinterest'); ?>" checked="checked" /><br/>
        <label for="GooglePlus">Google Plus</label>
        <input type="checkbox" name="GooglePlus" value="<?php echo get_option('GooglePlus'); ?>" checked="checked" />
        <?php submit_button(); ?>
    </form>
</div>