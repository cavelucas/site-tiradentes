<?php get_header(); ?>

    <div class="post">
    
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

                <div class="post__item">
                    <h2>
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h2>
                    <p class="professor-nome">Professor: <?php the_author();?></p>
                    <h3>
                        <?php the_category(); ?>
                    </h3>
                    <p>
                        <?php the_content();?>
                    </p>
                </div>

                <?php endwhile; 
            endif; 
        ?>

    </div>

<?php get_footer(); ?>