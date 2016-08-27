<?php
/*
Plugin Name: Music Cloud
Plugin URI: http://salfay.com
Description: A Simple Soundcloud Plugin
Author: Fayaz K
Version: 0.2
Author URI: http://fayazk.com/
*/

define('MC_URL',plugin_dir_url(__FILE__));
define('MC_DIR',plugin_dir_path(__FILE__));

require MC_DIR.'inc/options.php';
require MC_DIR.'inc/enqueue_scripts.php';
require MC_DIR.'inc/functions.php';

function musicloud_html(){
    ?>
    <div id="musicloud-player">
        <h4 id="musicloud-title"><?php echo get_bloginfo() ?>'s Music Player</h4>
        <a class="sc-player" id="mc-player"></a>
    </div>
<?php
}
//add_action('wp_footer','musicloud_html',0);

