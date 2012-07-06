<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'P&aacute;gina %s', 'twentyten' ), max( $paged, $page ) );

		?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?2" />
		<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/jquery-1.5.1.min.js"></script>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<?php if ( is_home() )  { ?><!-- * orbit * -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/orbit-1.2.3.css">
		<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/jquery.orbit-1.2.3.js"></script>	
	
		<!--[if IE]>
		 <style type="text/css">
			 .timer { display: none !important; }
			 div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
			 #conteudo .destaques .description { left: 0px; }
		</style>
		<![endif]-->
				
		<!-- Run the plugin -->
		<script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit();
			});
		</script>
		<?php } ?>
				
		<?php wp_head(); ?>
    </head>
    <body>

        <div id="geral">
            <div id="topo">
                <div class="logo">
                    <a href="<?php echo home_url( '/' ); ?>">
                        <img src="<?php bloginfo('template_directory') ?>/images/logo_top.jpg" alt="Portal CSTI" />
                    </a>
                </div>

                <div class="busca">
                    <form method="" action="<?php bloginfo('url'); ?>/">
                        <input type="text" value="<?php the_search_query(); ?>" name="s" class="input-search" />
                        <input type="submit" class="searchsubmit" value="&nbsp;" />
                    </form>
                </div>

                <ul class="nav">
                    <li class="home"><a href="<?php echo home_url( '/' ); ?>">P&Aacute;GINA INICIAL</a></li>
                    <li class="contato"><a href="<?php echo home_url( '/' ); ?>fale-conosco">FALE CONOSCO</a></li>
                </ul>
            </div>

            <div id="conteudo">