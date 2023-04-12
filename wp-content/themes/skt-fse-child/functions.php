<?php 
function init_child_theme(){
  wp_enqueue_style(
    'estilos-padre',
    get_template_directory_uri().'/style.css'
  );

  wp_enqueue_style(
    'estilos-hijo',
    get_template_directory_uri().'/style.css',
    array('estilos_padre'),
    '1.0'
  );
}

add_action('wp_enqueue_scripts','init_child_theme');

?>