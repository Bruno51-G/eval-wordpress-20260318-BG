<?php
get_header();
?>

<h1>INDEX.PHP</h1>
<div class="montheme-article-grid">
    <?php 
        if(have_posts()):
            while(have_posts()):
                the_post();
    ?>
        <article class="monTheme-article">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_content(); ?>
            </div>
        </article>

        <?php 
            endwhile;
        else:
            echo 'Aucun contenu';
        endif;
        ?>
</div>

<?php get_footer();
