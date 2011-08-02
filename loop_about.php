<div id="blog-page" class="page">
<?php
  if( have_posts() ): while ( have_posts() ) : the_post(); 
 ?>
  <div class="blog-entry">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

    <div class="entry-content">
    <?php the_content();?> 
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
