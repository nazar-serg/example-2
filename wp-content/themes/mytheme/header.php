<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__content">
        <div class="header__menu menu">
          <div class="menu__icon icon-menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <nav class="menu__body">
            <?php
                    wp_nav_menu( [
                        'theme_location'  => 'top',
                        'container'       => 'null'
                    ] );
                ?>
          </nav>
        </div>
      </div>
    </header>
    <div class="content">