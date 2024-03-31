<footer>
    <?php 
    $footerLinks1 = array(
        '<a href="https://banff.ca/">Old Site</a>'
    );

    $footerLinks2 = array(
        '<a href="https://education.nationalgeographic.org/resource/erosion/">Science</a>'
    );

    $footerLinks3 = array(
        '<a href="https://volcano.si.edu/gvp_currenteruptions.cfm">More science</a>'
    );

    foreach ($footerLinks1 as $key => $link) {
        if ($key != 0) {
            echo " | ";
        }
        echo $link;
    }

    echo " | ";

    foreach ($footerLinks2 as $key => $link) {
        if ($key != 0) {
            echo " | ";
        }
        echo $link;
    }

    echo " | ";

    foreach ($footerLinks3 as $key => $link) {
        if ($key != 0) {
            echo " | ";
        }
        echo $link;
    }
    ?>
    <h3>All rights reserved @2024</h3>
    <?php get_sidebar('primary'); ?>
    <div class="footer-column">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'container'      => false,
            'menu_class'     => 'footer-menu',
        ) );
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
