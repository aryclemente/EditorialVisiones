<?php
 /**
  * Title: Header
  * Slug: skt-fse/header
  * Categories: skt-fse
  */
return array(
	'title'      => __( 'Header', 'skt-fse' ),
	'categories' => array( 'skt-fse' ),
	'blockTypes' => array( 'core/template-part/skt-fse' ),
	'content'    => '<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#84a7c7"}},"className":"skt-fse-header","layout":{"type":"constrained","contentSize":"1200px"}} -->
<header class="wp-block-group skt-fse-header has-background" style="background-color:#84a7c7;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"20%","className":"skt-fse-header-logo"} -->
<div class="wp-block-column skt-fse-header-logo" style="flex-basis:20%"><!-- wp:image {"id":24,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="'.home_url().'"> <img src="'.esc_url(get_template_directory_uri()).'/assets/images/logo.png" alt="logo" class="wp-image-24"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"skt-fse-header-menu"} -->
<div class="wp-block-column skt-fse-header-menu has-link-color" style="padding-right:0px;flex-basis:65%"><!-- wp:navigation {"textColor":"background","icon":"menu","customOverlayBackgroundColor":"#366a97","overlayTextColor":"background","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","lineHeight":"2.5"},"spacing":{"blockGap":"40px"}},"fontFamily":"poppins"} /-->  wp_nav_menu(array("theme_location" => "top_menu")); </div>
<!-- /wp:column -->'

);
