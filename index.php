<?php get_header(); ?>
                <div class="destaques container">
                    <div id="featured">
<?php query_posts('cat=3&showposts=5');
	$i = 1;
	while (have_posts()) : the_post(); ?>
						<div class="content" style="width: 710px; height: 255px;<?php if ($i > 1) { ?> left: -710px;<?php } ?>">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail( array(710,255), 'home-post-thumbnail' ); ?>
                            </a>
							
							<div class="description">
								<h2><?php the_title(); ?></h2>
								<?php the_excerpt(); ?>
							</div>
                        </div>
<?php 
	$i++; 
	if($i > 5) $i = 1;
	endwhile; 
?>
                    </div>
                </div>

                <div class="pages">
                    <ul>
                        <li>
                            <a href="<?php echo home_url( '/' ); ?>sobre-a-central-de-servicos/" title="Sobre a Central de Servi&ccedil;os">
                                <img src="<?php bloginfo('template_directory') ?>/images/sobre-a-central.jpg" alt="Sobre a Central de Serviços" />
                            </a>

                            <h3>Sobre a <strong>Central de Servi&ccedil;os</strong></h3>
                            <p>Conhe&ccedil;a como funciona, sua composi&ccedil;&atilde;o e formas de atendimento</p>

                            <a href="<?php echo home_url( '/' ); ?>sobre-a-central-de-servicos" class="mais">+ saiba mais</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url( '/' ); ?>parque-computacional" title="Parque Computacional">
                                <img src="<?php bloginfo('template_directory') ?>/images/parque-computacional.jpg" alt="Parque Computacional" />
                            </a>

                            <h3>Parque <strong>Computacional</strong></h3>
                            <p>Saiba a quantidade e os tipos de equipamentos existentes na sede e nos Cart&oacute;rios Eleitorais.</p>

                            <a href="<?php echo home_url( '/' ); ?>parque-computacional" class="mais">+ saiba mais</a>
                        </li>

                        <li class="last">
                            <a href="<?php echo home_url( '/' ); ?>categoria/tutoriais" title="Nossos Tutoriais">
                                <img src="<?php bloginfo('template_directory') ?>/images/tutoriais.jpg" alt="Nossos Tutoriais" />
                            </a>

                            <h3>Nossos <strong>Tutoriais</strong></h3>
                            <p>Consulte nossos tutoriais sobre instala&ccedil;&otilde;es e configura&ccedil;&otilde;es de equipamentos e sistemas.</p>

                            <a href="<?php echo home_url( '/' ); ?>categoria/tutoriais" class="mais">+ saiba mais</a>
                        </li>
                    </ul>
                </div>

                <div class="links">
                    <h3>Links</h3>

					<ul class="listalinks">
					<?php
						$bookmarks = get_bookmarks( array( 'orderby' => 'id', 'order' => 'ASC' ));

						foreach ( $bookmarks as $bm ) { 
						 echo "<li>
								<a href='{$bm->link_url}'>
								<img src='" . home_url( '/' ) . "wp-content/themes/" . get_template() . "{$bm->link_image}' alt='{$bm->link_name}' width='94' height='99' />
								{$bm->link_name}</a>
							</li>";
						}
					?>
					</ul>
                </div>
            </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>