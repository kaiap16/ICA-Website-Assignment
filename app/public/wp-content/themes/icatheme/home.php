<?php get_header(); ?>
<div class="container p-0 m-0">
	<div class="row">

	<!-- The Loop -->
<?php 
	$args = array('section_title' => 'Home');
	get_template_part("template-parts/loop", null, $args);
?>
	</div>
</div>

<!-- The Loop -->

	<div class="container-fluid p-0 m-0">
	<div class="row">
		<div class="col-12">
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?>

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

	<?php 
	$args = array('section_title' => 'Home');
	get_template_part("template-parts/loop", null, $args);
	?>
    <div class="row">

<?php get_footer(); ?>