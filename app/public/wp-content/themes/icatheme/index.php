<?php get_header(); ?>

<!-- The Loop -->

	<!-- <h1>Index</h1> -->

<div class="container-fluid p-0 m-0">
	<div class="row">
		<div class="col-12">
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->

				<?php 
					the_content(); 
					endwhile;
					endif;
				?>
		</div>	
		<div class="col-4">
			<!-- Prepped for Sidebar -->
		</div>
	</div>
    <div class="row">
<!-- The Loop -->
<?php 
	$args = array('section_title' => 'Home');
	get_template_part("template-parts/loop", null, $args);
?>
		<div class="col-4">
			<!-- Prepped for Sidebar -->
			<!-- <h4>Featured Articles</h4> -->
		</div>
	</div>
</div>
<?php get_footer(); ?>