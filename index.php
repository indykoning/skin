<?php get_header(); get_sidebar();?> <article>
    <?php if(have_posts()) : while(have_posts()) : the_post() ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <p><?php the_content() ?></p>
<?php endwhile; endif; ?>
</article>
<?php
get_footer();?>

    <?php wp_footer('')?>
