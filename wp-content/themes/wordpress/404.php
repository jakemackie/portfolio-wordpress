<?php get_header(); ?>

<article class="error-404">
    <h1><?php esc_html_e('Page Not Found'); ?></h1>
    <p><?php esc_html_e('The page you are looking for does not exist.'); ?></p>
    <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Go Home'); ?></a>
</article>

<?php get_footer(); ?>
