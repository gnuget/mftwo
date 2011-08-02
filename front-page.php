<?php get_header();?>
  <div id="curtain">
    <div class="description">
      
    </div>
    <div id="curtain-download">
      <a href="/downloads" class="button download">Download MagicFields Now</a>
    </div>
    <span class="preview">&nbsp;</span>
    <span class="hat"></span>
  </div>
  <div id="mf-info">
    <div class="mf-title">
      
      
      <h1>A Magical Wordpress Plugin</h1>
      
      <div class="social">
        <!-- <a  class="twitter" href="http://twitter.com/magicfields" title="Follow us on twitter" alt="Follow us on twitter">&nbsp;</a>
        <a  class="facebook" href="http://facebook.com" title="facebook" alt="facebook">&nbsp;</a> -->

        <a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="magicfields">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

        <!-- Place this tag where you want the +1 button to render -->
        <g:plusone count="false"></g:plusone>

        <!-- Place this tag after the last plusone tag -->
        <script type="text/javascript">
          (function() {
              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/plusone.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>

        <div class="mf-clear"></div>
      </div>
      
      <p>Magic Fields is a WordPress CMS plugin  who is focused in improved the way about how are create the custom fields in wordpress. With magic Fields you will be able to choose between 15 types of custom fields</p>
      
      <span>Some benefits of Magic Fields</span>
      
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
            <img src="<?php print $theme_url.'/images/code.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            Magic Fields v2 was rewritten to use them to improve that was included Wordpress 3.0, which allowed us to optimize and to improve the functioning of Magic Fields
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/cf.png' ?>" alt="feature" title="feature" />
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

      <div class="features-column features-column-right">
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/pt.png' ?>" alt="feature" title="feature" />
          </div>
          <span>
            Magic Fields v2 allows creates of easy form and simple post types and custom taxonomies, you can easily set options and labels for Post Types and Custom Taxonomies
          </span>
          <div class="mf-clear"></div>
        </div>
        <div class="feature-item">
          <div class="feature-picture">
            <img src="<?php print $theme_url.'/images/gr.png' ?>" alt="feature" title="feature" />
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
        <a href="/downloads" class="button download">Download MagicFields Now</a>
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
        <div class="blog-title"><h2>Support Us</h2></div>
          <div class="mf-blog-donate">
            <p>If you are a happy user of magic fields, <span class="bold">please consider make a donation</span>, with your support and donations we can continue working on this plugin.
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
              ">
              <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
              
            </p>
          </div>
        </div>
      </div>
    <div class="mf-clear"></div>
  </div>
<?php get_footer();?>
