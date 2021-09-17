<?php
  
  function cutesy_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
  }

  add_action('after_setup_theme','cutesy_theme_support');

  function cute_menu(){
      $locations = array(
          'primary'=> "Desktop Primary Left Sidebar",
          'footer'=>"Footer Menu Items"
      );
      register_nav_menus($locations);
  }

  add_action('init','cute_menu');

  function cutesy_register_style(){
      wp_enqueue_style('cute_style',get_template_directory_uri()."/style.css",array('cute_bootstrap'), '1.0','all');
      wp_enqueue_style('cute_bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
      wp_enqueue_style('cute_fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');
  }

  add_action('wp_enqueue_scripts','cutesy_register_style');

  function cutesy_register_scripts(){

    wp_enqueue_script('cute_jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true);
    wp_enqueue_script('cute_popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'1.16.0',true);
    wp_enqueue_script('cute_bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1',true);
    wp_enqueue_script('cute_script',get_template_directory_uri()."/asset/js/main.js",array(),'1.0',true);

  }

  add_action('wp_enqueue_scripts','cutesy_register_scripts');
 
?>