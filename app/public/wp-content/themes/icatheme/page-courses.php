<?php get_header(); ?>

<?php 
if(have_posts()) :while(have_posts()) : the_post();

?>

<div class="container-fluid">
    <div class="row">

    <div class="col-3">
                 <?php
                    if(is_active_sidebar("courses-sidebar")){
                        dynamic_sidebar("courses-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>

                
    </div>

        <div class="col-9">
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