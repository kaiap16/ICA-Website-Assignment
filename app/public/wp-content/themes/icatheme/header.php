<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body style="background-color: white;" <?php body_class(); ?>>

<header>
<div class="container-fluid">
  <div class="row">
    <div class="col-1"> <a href="http://ica-website-assignment.local/"> <img src="../../logo-white" class="logo" alt="MCAST Logo in white"></div> </a>
    <div class="col-8">
      <nav id="ica-main-menu" class="navbar ">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu'
          ));
        ?>
      </nav>
    </div>
    <div class="col-3" ><?php get_search_form(true)?></div>
  </div>  
</div>
</header>



