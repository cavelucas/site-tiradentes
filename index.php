<?php get_header(); ?>

<!-- este era o archive.php do site -->

    <div class="archive">
    
        <h2>Últimas aulas postadas</h2>
    
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

                <div class="archive__item">
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