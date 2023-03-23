<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,minimum-scale=1" />
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
    <!--meta name="keywords" content="{% for tag in post.tags %}{{tag.name}}, {% /for %}{{siteName}}" />
    {% if posts.length %}
    {% else %}
      <meta name="twitter:card" content="summary_large_image" />
      {% if ext_twitter %}<meta name="twitter:creator" content="@{{ext_twitter}}" />{% /if %}
      <meta property="og:url" content="{{siteURL}}{{ post.url }}" />
      <meta property="og:title" content="{{post.title}}" />
      {% if post.ext_subtitle.length %}
        <meta property="og:description" content="{{post.ext_subtitle}}" />
        <meta name="description" content="{{post.ext_subtitle}}" />
      {% else %}
        <meta property="og:description" content="{{post.title}}" />
      {% /if %}
      {% if post.ext_featureimg.length %}
        <meta property="og:image" content="{{post.ext_featureimg}}" />
        <meta name="twitter:image" content="{{post.ext_featureimg}}" />
      {% /if %}
      <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
    {% /if %}
    {% if ext_favicon.length %}
      <link rel="icon" href="{{ext_favicon}}">
    {% /if %}
    <link href="atom.xml" rel="alternate" title="<?php bloginfo( 'name' ); ?>" type="application/atom+xml" -->
    <script src="https://cdn.bootcss.com/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- {{siteOther}} -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </head>
  <body>
    <script src="asset/colorscheme.js"></script>
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