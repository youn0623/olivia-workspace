<?php get_header(); ?>

<div class="whole-search">
    <div class="search-results">
        <h2>Results For: "<?php echo get_search_query(); ?>"</h2>
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <div class="post-card">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <p><?php the_time(); ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>No results.</p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
