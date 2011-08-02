<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */
 get_header(); ?>

    <div id="blog-page" class="page">

      <div class="blog-entry">
        <h2>Page not found</h2>

        <div class="entry-content">
          <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
      		<?php get_search_form(); ?>
        </div>
      </div> 

    </div>
<?php get_sidebar();?>
<div class="mf-clear"></div>
<?php get_footer();?>