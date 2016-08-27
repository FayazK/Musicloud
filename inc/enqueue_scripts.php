<?php
function musicloud_enqueue_scripts()
{
    //wp_enqueue_style('sc-player',MC_URL.'assets/css/sc-player-minimal.css');
    wp_enqueue_style('sc-player-std', MC_URL . 'assets/css/sc-player-standard.css');
    wp_enqueue_style('musicloud', MC_URL . 'assets/css/musicloud.css');

    wp_enqueue_script('sc-player', MC_URL . 'assets/js/sc-player.js', array('jquery'), false, true);
    wp_enqueue_script('sc-player-api', MC_URL . 'assets/js/soundcloud.player.api.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'musicloud_enqueue_scripts');

function musicloud_script()
{
    $options[] = 'links : [{url:"'.musicoud_get_track().'"}]';
    if(get_theme_mod('mc_auto_play','yes')=='yes'){
        $options[] = 'autoPlay: true';
    }
    ?>
<script type="text/javascript">
    jQuery(function($){
        $(document).ready(function(){
            $("#musicloud-title").click(function(){
                $('.sc-player').slideToggle('slow');
            });
            $('.sc-player').scPlayer({
                <?php echo implode(',', $options) ?>
            });
        });
    });
</script>
    <?php
}
add_action('wp_footer','musicloud_script',20);
