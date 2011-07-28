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
            Magic Fields v2 was rewritten to use them to improve that was included Wordpress 3.0, which allowed us to optimize and to improve the functioning of Magic Fields
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/feature-image.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            Magic Fields has 15 types of Custom Fields, including image, multiline, checkbox, audio, file, color picker, date picker, drop down, etc.
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item feature-item-bottom">
          <h2>It works with Wordpress 3.x</h2>
          <span>
            Magic Fields is constantly tested the latest version of Wordpress to make sure everything works fine
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
            Magic Fields v2 allows creates of easy form and simple post types and custom taxonomies, you can easily set options and labels for Post Types and Custom Taxonomies
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/feature-image.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            One of the best characteristics of Magic Fields is that you can duplicate groups and Custom Fields, only you need to mark the option to duplicate and I list
          </span>
          <div class="mf-clear"></div>
        </div>

        <div class="feature-item feature-item-bottom">
          <h2>Browser Compatibility</h2>
          <span>
            Fully supported browsers: Google Chrome, Firefox 3.5+, Internet Explorer 7.0+, Safari 3.0+
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
