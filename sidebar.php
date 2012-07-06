<div id="sidebar">
                <div class="contato">
                    <ul>
                        <li>(86) 2107-9999 (7:30h &agrave;s 14:30h)</li>
                        <li>cs@tre-pi.gov.br</li>
                        <li>Portal CSTI</li>
                    </ul>

                    <a href="http://spiceworks.tre-pi.gov.br:8000/portal" title="Abrir chamado na Central de Servi&ccedil;os" target="_blank" class="chamado"></a>
                </div>

                <div class="tutonoticias">
                    
                    <h3 class="noticias">
                        <a href="<?php echo home_url( '/' ); ?>categoria/noticias">&Uacute;LTIMAS NOT&Iacute;CIAS
                    </h3>

                    <ul class="noticias">
<?php query_posts('cat=3&showposts=3');
    while (have_posts()) : the_post(); ?>
                        <li>
                            <strong><?php the_time('j \d\e F \d\e Y') ?></strong>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
<?php endwhile; ?>
                    </ul>
                    

					<h3 class="tutoriais">
						<a href="<?php echo home_url( '/' ); ?>categoria/tutoriais">TUTORIAIS RECENTES</a>
					</h3>
					

                    <ul class="tutoriais">
<?php query_posts('cat=1&showposts=3');
	while (have_posts()) : the_post(); ?>
						<li>
                            <strong><?php the_time('j \d\e F \d\e Y') ?></strong>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
<?php endwhile; ?>
                    </ul>
                    <span class="bottom"></span>
                </div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif;?>
            </div>