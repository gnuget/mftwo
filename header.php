<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>  

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.76812.js"></script>
    <?php print wp_head();?>
  </head>
  <body>
    <div id="content"> <!-- Content -->
      <div id="header">
        <div class="menu">
          <span class="wp-flag"></span>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/category/blog/">Blog</a></li>
              <li><a href="/downloads">Downloads</a></li>
            <li><a href="/support">Support</a></li>
            <li class="menu-right"><a href="http://wiki.magicfields.org/doku.php">Wiki</a></li>
          </ul>
          <span class="wp-flag"></span>
        </div>
      </div>
