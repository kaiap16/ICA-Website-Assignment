<?php get_header(); ?>
<?php 
if(have_posts()) :while(have_posts()) : the_post();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
           
        </div>

        <div class="col-9">
        <main>
                <div><?php the_title(); ?></div>
            </main>
            
            <main>
                <div><?php the_excerpt(); ?></div>
            </main>
        </div>

    </div>
</div>


<?php 
                    endwhile; 
                    endif; 
                ?>
<?php get_footer(); ?>