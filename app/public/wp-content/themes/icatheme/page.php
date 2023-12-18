<?php get_header(); ?>
<?php 
if(have_posts()) :while(have_posts()) : the_post();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <main>
                <div><?php the_content(); ?></div>
            </main>
        </div>

    </div>
</div>
<?php 
                    endwhile; 
                    endif; 
                ?>
<?php get_footer(); ?>