<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>

        <div class="entry-meta">
            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
        </div>

        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>
