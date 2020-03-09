<?php /* template name: aulas */ ?>

<?php get_header(); ?>

    <div class="page-aulas">
    
        <h2>Últimas aulas postadas</h2>
    
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

                <div class="page-aulas__item">
                    <h2>
                        <?php the_title();?>
                    </h2>
                    <p>
                        <?php the_excerpt();?>
                    </p>
                </div>

                <?php endwhile; 
            endif; 
        ?>

    </div>

<?php get_footer(); ?>