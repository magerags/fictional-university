<?php

get_header();

while(have_posts()) {
  the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(../wp-content/themes/fictional-theme/images/ocean.jpg);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title()?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

  <?php 
    $parent = wp_get_post_parent_id(get_the_ID());
    if ($parent) { 
  ?>
  
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parent); ?></a> <span class="metabox__main"><?php the_title() ?></span></p>
    </div>
    
    <?php } ?>
    
    <?php 
    
    $noChildren = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($parent or $noChildren) { ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($parent); ?>"><?php echo get_the_title($parent) ?></a></h2>
        <ul class="min-list">
          <?php
            if ($parent) {
              $children = $parent;
            } else {
              $children = get_the_ID();
            }
          
            wp_list_pages(array(
              'title_li' => NULL,
              'child_of' => $children
            ));
          ?>
        </ul>
      </div>
    <?php
    }
    ?>

    <div class="generic-content">
      <?php the_content() ?>
    </div>

  </div>

<?php }
  get_footer()
?>