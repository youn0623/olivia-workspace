<?php get_header(); ?>
<?php the_title(); ?>

<?php if (is_page('Attractions')) : ?>
    <img class="water-pic" src="<?php echo get_theme_file_uri('assets/wood.jpg')?> ">
<?php endif; ?>

<?php if (is_page('About us')) : ?>
    <img class="water-pic" src="<?php echo get_theme_file_uri('assets/stick.jpg')?> ">
<?php endif; ?>

<?php if (is_page('Contact')) : ?>
    <img class="water-pic" src="<?php echo get_theme_file_uri('assets/water.jpg')?> ">
<?php endif; ?>

<?php the_content(); ?>
<?php get_template_part('custom-template/google','map');?>
<?php get_footer(); ?>