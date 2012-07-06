<?php get_header(); ?>

				<h1>Arquivos</h1>
				
				<h2>Arquivos por Ordem Alfab&eacute;tica:</h2>
				<ul class="search">
					<?php wp_get_archives('type=alpha'); ?>
				</ul>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
