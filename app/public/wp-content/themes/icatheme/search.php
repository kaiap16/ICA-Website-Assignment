<?php get_header(); ?>

<!-- The Loop -->

<div class="container-fluid">
    <div class="row search-title">
        <h1> Search Results </h1>
    </div>
    <div class="row">

    <div class="col-1"></div>

        <div class="col-10 search-design">
            <main>

            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                <div>
                    <a href="<?php the_permalink();?>">
                <h3> <?php the_title(); ?> </h3>
                </a>  
                <p><?php the_excerpt(); ?> </p>
                </div>
            
            <?php
            endwhile;
            endif;
            ?>

            </main>
        </div>

<div class="col-1"></div>
    

    </div>
</div>


        <?php 
            // endwhile; 
            // endif; 
        ?>

<?php get_footer(); ?>