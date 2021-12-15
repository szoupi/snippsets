<!-- Let’s say current URL is: http://example.com/wp-content/plugins/my-plugin/includes/ -->

echo plugin_dir_url( __FILE__ ).'images/placeholder.png';
<!-- will output: http://example.com/wp-content/plugins/my-plugin/includes/images/placeholder.png -->


echo plugin_dir_url( __DIR__ ).'images/placeholder.png';
<!-- will output: http://example.com/wp-content/plugins/my-plugin/images/placeholder.png -->


<a href="<?php echo admin_url('admin.php?page=sinetiks_schools_list') ?>">&laquo; Back to schools list</a>