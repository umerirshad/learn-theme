<?php get_header( ); ?>
<h1>Latest Posts</h1>
<?php if (have_posts(  )): ?>
    <?php while (have_posts(  )) : the_post(); ?>



<?php get_footer( ); ?>