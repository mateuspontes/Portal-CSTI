<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="Robots" content="noindex, nofollow" />
	
	<?php if(@file_exists(TEMPLATEPATH.'/print-css.css')): ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/print-css.css" type="text/css" media="screen, print" />
	<?php else: ?>
		<link rel="stylesheet" href="<?php echo plugins_url('wp-print/print-css.css'); ?>" type="text/css" media="screen, print" />
	<?php endif; ?>
	
	<?php if('rtl' == $text_direction): ?>
		<?php if(@file_exists(TEMPLATEPATH.'/print-css-rtl.css')): ?>
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/print-css-rtl.css" type="text/css" media="screen, print" />
		<?php else: ?>
			<link rel="stylesheet" href="<?php echo plugins_url('wp-print/print-css-rtl.css'); ?>" type="text/css" media="screen, print" />
		<?php endif; ?>
	<?php endif; ?>
</head>
<body onload="window.print();">

<div id="geral">
	<div id="conteudo">
		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>
				<div id="topo">
					<img src="<?php bloginfo('template_directory') ?>/images/logo-hor_200.jpg" alt="Portal CSTI" width="200" />

					<h1 class="post-title"><?php the_title(); ?></h1>
					
					<p class="post-data">
						<?php the_time(sprintf(__('%s, %s', 'wp-print'), get_option('date_format'), get_option('time_format'))); ?>
						<?php _e('Categoria:', 'wp-print'); ?> <?php print_categories('<u>', '</u>'); ?>
					</p>
				</div>

				<div class="texto"><?php the_content(); ?></div>
			<?php endwhile; ?>

			<div id="footer">
				<p><strong><?php bloginfo('name'); ?>:</strong> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('url'); ?></a></p>

				<p><strong><?php _e('URL do artigo ', 'wp-print'); ?>:</strong> <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
				
				<p style="text-align: right" id="print-link">
					<?php _e('Clique', 'wp-print'); ?> <a href="#Print" onclick="window.print(); return false;" title="<?php _e('Clique aqui para imprimir.', 'wp-print'); ?>"><?php _e('aqui', 'wp-print'); ?></a> <?php _e('para imprimir.', 'wp-print'); ?>
				</p>

				<p class="copy"><?php echo stripslashes($print_options['disclaimer']); ?></p>
			</div>

		<?php else: ?>
				<p><?php _e('Nenhum post encontrado.', 'wp-print'); ?></p>
		<?php endif; ?>
	</div>
</div>




</body>
</html>