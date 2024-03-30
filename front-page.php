<?php
get_header();
get_template_part('part', 'hero');
?>

<h1 class="text-center">This Is My Homepage</h1>
<img class="water-pic" src="<?php echo get_theme_file_uri('assets/water.jpg') ?>">

<section>
  <h2 class="text-center">Picture Carousel</h2>
  <div class="container">
    <div id="myCarousel" class="carousel slide mx-auto" data-ride="carousel" style="max-width: 600px;">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/wood.jpg') ?>" alt="First slide" height="600">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/stick.jpg') ?>" alt="Second slide" height="600">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/water.jpg') ?>" alt="Third slide" height="600">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/dock.jpg') ?>" alt="Fourth slide" height="600">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/shack.jpg') ?>" alt="Fifth slide" height="600">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<section>
  <h2 id="need-pad" class="text-center">Testimonials</h2>
  <div id="testimonials" class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial">
          <img src="<?php echo get_theme_file_uri('assets/image.png') ?>" alt="Testimonial 1" class="testimonial-img img-fluid">
          <h3>John Doe</h3>
          <h4>Adventurer</h4>
          <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam, nisi nec ultricies efficitur, sem elit bibendum ligula, at dictum eros risus sed quam."
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <img src="<?php echo get_theme_file_uri('assets/image.png') ?>" alt="Testimonial 2" class="testimonial-img img-fluid">
          <h3>Jane Smith</h3>
          <h4>Nature Enthusiast</h4>
          <p>
            "Sed consectetur nec justo eget ultrices. Phasellus bibendum ipsum non felis accumsan, vitae aliquet elit scelerisque."
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <img src="<?php echo get_theme_file_uri('assets/image.png') ?>" alt="Testimonial 3" class="testimonial-img img-fluid">
          <h3>David Johnson</h3>
          <h4>Hiker</h4>
          <p>
            "Fusce hendrerit malesuada felis, sed lobortis orci. Curabitur id enim sed elit pharetra sodales non eu mauris."
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="video">
  <iframe src="https://player.vimeo.com/video/226761321?h=f75b95dada" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</section>

<h4>Blog Posts</h4>
<div>
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
  );
  $query = new WP_Query($args);
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
  ?>
      <div class="post-card">
        <h4>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h4>
        <?php the_content(); ?>
        <p>Author: <?php the_author(); ?></p>
      </div>
  <?php
    endwhile;
    wp_reset_postdata(); // Reset post data
  else:
  ?>
    <p>No posts found</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
