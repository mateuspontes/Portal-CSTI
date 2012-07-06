<?php get_header(); ?>

				<h1>Resultados da Busca</h1>
				
				<ul class="search">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<span class="post-data"><?php the_time('j \d\e F \d\e Y') ?></span>
						
						<a href="<?php the_permalink(); ?>">						
							<h2 class="post-title"><?php the_title(); ?></h2>
						</a>
						
						<p class="texto">
							<?php the_excerpt(); ?>
						</p>
					</li>
<?php endwhile; ?>
<?php else : ?>
					<li id="post-0" class="post no-results not-found">
						<h2 class="entry-title">Erro! Nada Encontrado!</h2>
						<p class="texto">
							<p>Nenhum resultado satisfat&oacute;rio para sua busca. Tente um novo termo.</p>
							<?php get_search_form(); ?>
						</p>
					</li>
<?php endif; ?>
				</ul>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
