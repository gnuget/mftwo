<?php 
/*
Template Name: Support
*/ 

get_header(); ?>


<div id="blog-page" class="page">
<?php
  if( have_posts() ): while ( have_posts() ) : the_post(); 
 ?>
  <div class="blog-entry">
    <h2><a href="<?php the_permalink();?>">Magic Fields Support</a></h2>

    <div class="entry-content">
      <h3>Special Support</h3>
      <p>Necesitas soporte especial para tus proyectos? Magic Fields Team te puede ayudar, mandanos un email &#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#109;&#097;&#103;&#105;&#099;&#102;&#105;&#101;&#108;&#100;&#115;&#046;&#111;&#114;&#103; donde nos detalles en que necesitas ayuda. es importante contar con toda la información para poder darte un presupuesto .</p>
      <h3>Magic Fields Manual</h3>
      <p>Antes de que nada es importante que leas el <a href="http://wiki.magicfields.org/doku.php">manual de Magic Fields</a>. En el manual se detallan todos los aspectos de Magic Fields</p>
      
      <h3>Google Groups</h3>
      <p>Magic Fields cuenta con una gran comunidad, en <a href="https://groups.google.com/forum/#!forum/magic-fields">Google Groups</a> tu puedes encontrar ayuda o ayudar a mas desarrolladores</p>
      
      <h3>Report bugs</h3>
      <p>Si encuentras algun bug puedes reportarlo en el <a href="https://github.com/hunk/Magic-Fields/issues">sistema de issues</a> de Magic Fields</p>
      
      
    </div>
  </div> 
  <?php
    endwhile;
    endif;
  ?>
    
    <div class="blog-entry">
      <h2>Magic Fields Team</h2>

      <div class="entry-content">
        <h3>David Valdez</h3>
        <div>
          <img class="team-image" src="http://magicfields.org/wp-content/themes/oneroom/images/gnuget.png" />
          <p>Hi, my Name is <a href="http://gnuget.org/">David Valdez</a> but my friends call me "Gnuget". Im a Web Developer and i have 24 years old and currently residing in México City.Actually i’m working at Astrata Software .</p>
          
          <div>
            <img src="http://services.nexodyne.com/email/customicon/1XBFmaxF1U8VlcrehpwzmW6Eqppd/BT2Ya0g%3D/000000/ffffff/000000/0/image.png">
          <a href="http://twitter.com/gnuget" class="twitter-follow-button">Follow @gnuget</a>
          </div>
        </div>
        
        <p>&nbsp;</p>
        
        <h3>Edgar G</h3>
        <div>
          <img class="team-image" src="http://magicfields.org/wp-content/themes/oneroom/images/hunk.png" />
          <p>
            Hi! My name is <a href="http://hunk.com.mx/">Edgar G</a> ( @hunk ), I´m Software Engineer and Web Developer, currently living at México City, I have experience with PHP, CakePHP, CodeIgniter, Wordpress, Javascript/JQuery and iOS. Actually i’m freelancer.
          </p>
          <div>
            <img src="http://services.nexodyne.com/email/icon/HVv0uySIHvFb/.h.Ae2c%3D/R01haWw%3D/0/image.png" alt="hunk email">
            <a href="http://twitter.com/hunk" class="twitter-follow-button">Follow @hunk</a>
            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
          </div>
        </div>
        
        <p>&nbsp;</p>
</div>

    </div>
    
</div>


<?php get_sidebar(); ?>
<div class="mf-clear"></div>
<?php
get_footer();
?>
