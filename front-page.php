<?php get_header();?>
  <div id="curtain">
    <div class="description">
      <p>Magic Fields let you create post types and custom fields in a very easy way</p>
    </div>
    <div id="curtain-download">
      <a href="javascript:void(0);" class="button download">Download MagicFields Now</a>
    </div>
    <span class="preview">&nbsp;</span>
    <span class="hat"></span>
  </div>
  <div id="mf-info">
    <div class="mf-title">
      <h1>Hakuna matata</h1>
      <span>Some benefits of Magic Fields</span>

      <div class="social">
        <a  class="twitter" href="http://twitter.com/magicfields" title="Follow us on twitter" alt="Follow us on twitter">&nbsp;</a>
        <a  class="facebook" href="http://facebook.com" title="facebook" alt="facebook">&nbsp;</a>
        <div class="mf-clear"></div>
      </div>
    </div> 
    <?php 
      //theme url 
      $theme_url =  get_bloginfo('stylesheet_directory');
    ?>
    <div id="mf-features">
    <div class="mf-features-separator"></div>
      <div class="features-column">
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/feature-image.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            Our theme control panel and installation guids get you started in no time
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/feature-image.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            Our theme control panel and installation guids get you started in no time
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item">
          <h2>Este es un cuadro de texto</h2>
          <span>
            Our theme control panel and installation guids get you started in no time
          </span>
          <div class="mf-clear"></div>
        </div>
      </div>

      <div class="features-column">
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/feature-image.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            Our theme control panel and installation guids get you started in no time
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/feature-image.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            Our theme control panel and installation guids get you started in no time
          </span>
          <div class="mf-clear"></div>
        </div>

        <div class="feature-item">
          <h2>Este es un cuadro de texto</h2>
          <span>
            Our theme control panel and installation guids get you started in no time
          </span>
          <div class="mf-clear"></div>
        </div>
      </div>
      <div class="mf-clear"></div>
      <div id="feature-download">
        <a href="javascript:void(0);" class="button download">Download MagicFields Now</a>
      </div>
    </div>
    <div id="mf-about">
      <div class="blog-title"><h2>Blog</h2></div>
      <div class="mf-blog">
        <?php 
          query_posts('posts_per_page=2'); 
          if( have_posts() ):
             while( have_posts()): the_post(); 
          ?>  
            <div class="mf-blog-post">
              <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
              <?php the_excerpt();?>
            </div> 
         
         <?php
              endwhile;
          endif;
        ?>
      </div>
      <div class="mf-authors">
      </div>
    </div>
    <div class="mf-clear"></div>
  </div>
<?php get_footer();?>
