<?php

get_header() ?>

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

    while(have_posts()) {
      the_post(); ?>
      <div class="post-item">
       <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <div class="metabox">
        <p>Posted by <?php ?> on 06/08/21 in News</p>
       </div>
      
      <div class="generic-content">
      <?php the_excerpt() ?>
      <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading</a></p>
      </div>
    </div>
    <?php }

  ?>
  </div>


<?php
get_footer()

?>