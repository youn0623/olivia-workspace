<?php get_header(); ?>
<div class= "single-post">
    <h4>Category: <?php the_category(' |');?></h4>
        <?php the_content();?>
    <div class= "post-navigation">
        <span><?php previous_post_link('< %link');?></span>
        <span><?php next_post_link('%link >')?></span>
    </div>
</div>
<div class="comment-section">
    <?php comments_popup_link();?>
</div>
<div>
    <?php comments_template();?>
</div>