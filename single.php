<?php get_header(); ?>
<div class="container" id="category">
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
              <div class="meta">
                <span class="time"><?php echo get_the_date() ?></span>
                <br>
                <span class="tags">
                  <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a>';
                      }
                    }
                  ?>
                </span>
              </div>
              <div class="body">
                <?php the_content('') ?>
              </div>
                <div class="comment-area">
                  <?php comments_template() ?>
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<?php get_footer(); ?>