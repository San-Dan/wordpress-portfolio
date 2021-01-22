<?php get_header(); ?>
  
<?php if (have_posts()): ?>
    <div class="row">
        <div class="col-sm">
    <?php while (have_posts()): the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

    <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>