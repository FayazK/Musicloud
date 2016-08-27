<?php
function musicoud_get_track(){
    $music = 'https://soundcloud.com/pakxpert/wa-malanga-yara';
    $id = 'mc_ff_music';
    if(is_front_page()){
        $id = 'mc_ff_music';
    }else if(is_single()){
        $id = 'mc_single_music';
    }else if(is_home()){
        $id = 'mc_blog_music';
    }else if(function_exists('is_shop') && is_shop()){
        $id = 'mc_woo_music';
    }
    return  get_theme_mod($id,$music);
}
