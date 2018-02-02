<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.js" type="text/javascript"></script>
  <?php wp_head(); ?>

</head>
<body class='index'>
  <nav class='navbar navbar-default main-nav'>
    <div class='container'>
      <div id='global-nav'>
        <ul class='nav navbar-nav navbar-right'>
          <li>
            <a href='#ssabout'>
              About
            </a>
          </li>
          <li>
            <a href='#ssbio'>
              Bio
            </a>
          </li>
          <li>
            <a href='#sscontact'>
              Contact
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end menu -->
