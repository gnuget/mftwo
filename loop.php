<?php 
$extra="";
if(preg_match('/^\/forum/',$_SERVER['REQUEST_URI'])){
  $extra = "forum";
}
?>
<div id="blog-page" class="<?php print $extra;?> page">
<?php
  if( have_posts() ): while ( have_posts() ) : the_post(); 
 ?>
  <div class="blog-entry">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <div class="entry-postmeta">
      <?php edit_post_link('Edit','<span>','</span> |'); ?>
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

  if(! is_single()):
  ?>
    <div class="navigation">
	    <div class="alignleft"><?php next_posts_link('&laquo; Previous entries') ?></div>
    	<div class="alignright"><?php previous_posts_link('Next entries &raquo;') ?></div>
    </div>
  <?php else: ?>
    <div class="comments">
     <?php  comments_template(); ?>
    </div>
  <?php
    endif;
  ?>
</div>
