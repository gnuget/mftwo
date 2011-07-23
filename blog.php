<?php
/*
Template Name: Blog
*/ 
get_header();
?>
<div id="blog-page">
  <?php
    //loop 
    query_posts('showposts=10');
    if( have_posts() ): while ( have_posts() ) : the_post(); 
  ?>
  <div class="blog-entry">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <div class="entry-postmeta">
      <span><?php edit_post_link('Edit',''); ?>  </span> |
      <span><?php the_time('F jS, Y') ?>  </span> |
      <span>This post currently has <?php comments_number('no comments','one comment','% comments'); ?></span>
    </div>

    <div class="entry-content">
    <?php the_content();?> 
    </div>
  </div> 
  <?php
    endwhile;
    endif;
  ?>
</div>
<?php get_sidebar();?>
<div class="mf-clear"></div>
<?php get_footer();
