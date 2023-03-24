<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,minimum-scale=1" />
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
    <script src="https://cdn.bootcss.com/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- {{siteOther}} -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <div class="head">
        <div class="row">
          <div class="col-md-12">
            <div class="blogname"><?php bloginfo( 'name' ); ?></div>
            <!--nav>
              {% for m in siteMenu %}
                <div class="item"><a target="{{ m.target }}" href="{{ m.url }}">{{ m.name }}</a></div>
              {% /for %}
            </nav-->
            <nav>
              <?php wp_nav_menu() ?>
            </nav>
          </div>
        </div>
      </div>
      <hr>
    </div>