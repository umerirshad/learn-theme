<?php get_header( ); ?>
<h1>Latest Posts</h1>
<?php if (have_posts(  )): ?>
    <?php while (have_posts(  )) : the_post(); ?>
    <article>
        <h2><a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a></h2>
        <?php if(has_post_thumbnail(  )): ?>
            <div>
                <?php the_post_thumbnail( 'medium' ); ?>
            </div>
            <?php endif; ?>
            <?php the_excerpt(  ); ?>
    </article>

    <?php endwhile; ?>
    <?php else: ?>
        <p>No posts found.</p>
<?php endif; ?>


<?php get_footer( ); ?>