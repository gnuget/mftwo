<?php
/*
Template Name: Blog
*/ 
get_header();
?>
  <?php
    //loop 
    query_posts('showposts=10');
    get_template_part('loop','single');
  ?> 
<?php get_sidebar();?>
<div class="mf-clear"></div>
<?php get_footer();?>
