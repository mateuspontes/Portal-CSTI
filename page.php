<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
				<div class="post" id="post-<?php the_ID(); ?>">

                    <h1 class="post-title"><?php the_title(); ?></h1>
                    
                    <div class="texto">
                        <?php the_content('<p class="serif">Leia mais</p>'); ?>
						
<?php /* if($post->post_parent) { */ ?>
						<a href="javascript:history.back();" title="Voltar para p&aacute;gina anterior">&laquo; Voltar</a>
<?php /* } */?>
                    </div>
                    
                </div>
			</div>
<?php if ($post->ID == 177) { //catalogo de servicos ?>			
			<script type="text/javascript">
			$(function(){
				$('.categorias-servicos .content').click(function(e) {
					if($(this).children(".hide").hasClass("selected")) { 
						$(this).children(".hide").slideUp("fast").removeClass("selected");
					} else {
						$(".hide").slideUp("fast").removeClass("selected");
						$(this).children(".hide").slideDown("slow").addClass("selected");
					}
				});
			});
			</script>
			<style type="text/css">
			div .hide{ display: none}
			div .content { padding: 0px 15px 5px; width: 650px; }
			div .content .hide { padding: 5px 10px; border: 1px solid #d9d9d9; background: #e9e9e9; }
			div .content a, div .content a:visited { font-weight: bold; text-decoration: none; }
			</style>			
<?php } ?>

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
