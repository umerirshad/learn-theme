<?php get_header(); ?>

<main class="single-post">
    <?php if (have_posts()) : while (have_posts(  )) : the_post(  ); ?>

    <h1><?php the_title( ); ?></h1>
    <?php if (has_post_thumbnail( )) : ?>
        <div>
            <?php the_post_thumbnail('medium');?>
        </div>

        <?php endif; ?>
        <p><strong>Published on: </strong><?php echo get_the_date( ); ?></p>
        
        <div class="content">
            <?php the_content( ) ; ?>
        </div>
    <?php endwhile; endif; ?>

</main>
<?php get_footer(); ?>