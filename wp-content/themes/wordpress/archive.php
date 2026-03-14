<?php get_header(); ?>

<h1>
    <?php
    if (is_post_type_archive()) {
        post_type_archive_title();
    } elseif (is_category()) {
        single_cat_title();
    } elseif (is_tag()) {
        single_tag_title();
    } else {
        the_archive_title();
    }
    ?>
</h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>
<?php else : ?>
    <p><?php esc_html_e('Nothing found.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
