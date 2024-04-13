<?php 
/* 
    Template Name: Home Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'hero'); ?>
<?php get_template_part('partials/section', 'about'); ?>
<?php get_template_part('partials/section', 'products'); ?>
<?php //get_template_part('partials/section', 'why'); ?>
<?php get_template_part('partials/section', 'contacts'); ?>

<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>



<?php get_footer(); ?>