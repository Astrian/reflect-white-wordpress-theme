<?php get_header(); ?>
<div class="container" id="category">
<?php
if ( have_posts() ) :
  $i = 0;
	while ( have_posts() ) : the_post();
  if ($i == 0) {
  ?>
  <div class="article huge">
    <?php if (get_the_post_thumbnail_url() != '') { ?>
      <div class="featureimg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
    <?php } else { ?>
      <div class="featureimg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/defaultfeaimg.jpg')"></div>
    <?php } ?>
      <div class="row content">
        <div class="col-md-2"></div>
        <div class="col-md-10 main">
          <div class="row">
            <div class="col-md-10 post">
              <div class="headline"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
              <div class="subtitle"><?php the_excerpt() ?></div>
              <div class="meta"><span class="time"><?php the_date() ?></span></div>
              <div class="body">
              <?php the_content('') ?>
              </div>
              <div class="bottom">
                <a href="<?php the_permalink() ?>" class="continue float-right">
                  继续阅读
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="otherposts row">
      <?php
      } else {
      ?>
        <div class="col-md-6">
          <a href="<?php the_permalink() ?>" class="item">
            <div class="article normal">
              <?php if (get_the_post_thumbnail_url() != '') { ?>
                <div class="featureimg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
              <?php } else { ?>
                <div class="featureimg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/defaultfeaimg.jpg')"></div>
              <?php } ?>
              <div class="articleinfo">
                <div class="headline"><?php the_title() ?></div>
                <div class="subtitle"><?php the_excerpt() ?></div>
              </div>
            </div>
          </a>
        </div>
      <?php
      }
      $i++;
      ?>
    
      </div>
	<?php endwhile;

else :
	echo '<p>Starry, starry night...</p>';

endif;

?>
</div>
<?php get_footer(); ?>