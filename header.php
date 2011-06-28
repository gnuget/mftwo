<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>  
    <?php print wp_head();?>
  </head>
  <body>
    <div id="content">
      <div id="header">
        <div class="menu">
          <span class="wp-flag"></span>
          <ul>
            <li>Home</li>
            <li>About</li>
            <li>Blog</li>
            <li>Download</li>
            <li>Support</li>
            <li class="menu-right">FAQ</li>
          </ul>
          <span class="wp-flag"></span>
        </div>
      </div>
    </div>
