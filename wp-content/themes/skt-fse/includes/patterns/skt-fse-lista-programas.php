<?php
/**
 * Programas
 */
return array(
	'title'      => __( 'Programas', 'skt-fse' ),
	'categories' => array( 'skt-fse' ),
	'blockTypes' => array( 'core/template-part/skt-fse' ),
	'content'    => '<!-- wp:group {"tagName":"main"} -->
    <main class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"15px","right":"15px"}}},"backgroundColor":"background","className":"skt-fse-blog-single-area","layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group skt-fse-blog-single-area has-background-background-color has-background" style="padding-top:80px;padding-right:15px;padding-bottom:80px;padding-left:15px"><!-- wp:group {"tagName":"section","style":{"color":{"background":"#eff5fa"},"spacing":{"padding":{"bottom":"80px"}}},"className":"skt-fse-sec skt-fse-section7","layout":{"type":"constrained","contentSize":"1230px"}} -->
    <section class="wp-block-group skt-fse-sec skt-fse-section7 has-background" style="background-color:#eff5fa;padding-bottom:80px"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"25px"}}}} -->
    <div class="wp-block-columns" style="padding-bottom:25px"><!-- wp:column {"width":"25%"} -->
    <div class="wp-block-column" style="flex-basis:25%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textAlign":"center","level":5,"style":{"color":{"text":"#6458ef"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"fontFamily":"poppins"} -->
    <h5 class="wp-block-heading has-text-align-center has-text-color has-poppins-font-family" style="color:#6458ef;padding-top:0px;padding-bottom:0px;font-size:18px;font-style:normal;font-weight:600;text-transform:capitalize">Educación Digital</h5>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#0a1d2d"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"15px","bottom":"30px"}}},"fontFamily":"poppins"} -->
    <h2 class="wp-block-heading has-text-align-center has-text-color has-poppins-font-family" style="color:#0a1d2d;padding-top:15px;padding-bottom:30px;font-size:40px;font-style:normal;font-weight:700">Programas de Formación</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"25%"} -->
    <div class="wp-block-column" style="flex-basis:25%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:query {"queryId":15,"query":{"perPage":3,"pages":0,"offset":0,"postType":"programas","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained"}} -->
    <div class="wp-block-query"><!-- wp:post-title /-->
    
    <!-- wp:post-featured-image /-->
    
    <!-- wp:post-date /-->
    
    <!-- wp:query-pagination -->
    <!-- wp:query-pagination-previous /-->
    
    <!-- wp:query-pagination-numbers /-->
    
    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
    
    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Añade texto o bloques que se mostrarán cuando la consulta no devuelva ningún resultado."} -->
    <p></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query --></section>
    <!-- /wp:group --></div>
    <!-- /wp:group --></main>
    <!-- /wp:group -->',
);