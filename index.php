<?php get_header(); ?>

<!-- este era o archive.php do site -->

    <div class="archive">
    
        <h2>Últimas aulas postadas</h2>
    
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

                <div class="archive__item">
                    <h2>
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h2>
                    <p class="professor-nome" >Professor: <?php the_author();?></p>
                    <h3>
                        <?php the_category(); ?>
                    </h3>
                    <p>
                        <?php the_excerpt();?>
                        <a class="ver-mais" href="<?php the_permalink(); ?>">Ver completo</a>
                    </p>
                </div>

                <?php endwhile; 
            endif; 
        ?>

    </div>

<?php get_footer(); ?>