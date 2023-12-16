<?php get_header(); ?>

<!-- The Loop -->

	<h1>Index</h1>
    
		<div class="row">

			<div class="col-6">
			<?php get_sidebar(); ?>

			</div>	
				<div class="col-6">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?>

				<?php 
					the_content(); 
					endwhile;
					endif;
				?>
					</div>
		</div>	


	
	
		<!-- <div class="row"> -->
<!-- The Loop -->
<!-- <?php 
	$args = array('section_title' => 'Home');
	get_template_part("template-parts/loop", null, $args);
?> -->
		
	</div>
<?php get_footer(); ?>