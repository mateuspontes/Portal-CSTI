<?php
/*
Template Name: Tutoriais
*/
?>
<?php get_header(); ?>

				<div class="post">
					<h1>Acesse nossos Tutoriais</h1>
					
					<ul class="search categorias">

					<?php if (is_category()) {

						//Verificar o ID da categoria atual
						$this_category = get_category($cat);

						//Exibir as subcategorias
						if (get_category_children($this_category->cat_ID) != "") {
							wp_list_categories('orderby=&order=ASC&title_li=&use_desc_for_title=0&show_count=0&child_of='.$this_category->cat_ID);
						}
					}
					?>
					</ul>
					
					<a href="javascript:history.back();" title="Voltar para p&aacute;gina anterior">&laquo; Voltar</a>
					
				</div>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
