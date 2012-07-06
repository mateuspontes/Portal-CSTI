<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
				<div class="post" id="post-<?php the_ID(); ?>">
                    <span class="post-data"><?php the_time('j \d\e F \d\e Y') ?></span>
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    
					<span class="lead"><?php (has_excerpt()) ? the_excerpt() : "" ; ?></span>
					
                    <div class="texto">
                        <?php the_content('<p class="serif">Leia mais</p>'); ?>
                    </div>

                    <?php if(function_exists('wp_print')) { print_link(); } ?> 
                    
                </div>
			</div>
<?php endwhile; ?>
<?php else : ?>
				<div class="post" id="post-0">

                    <h1 class="post-title">Erro! Nada Encontrado.</h1>
                    
                    <p class="texto">
						<p>Nenhum resultado satisfat&oacute;rio para sua busca. Tente um novo termo.</p>
						<?php get_search_form(); ?>
					</p>
                    
                </div>
			</div>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
