<?php
//------------------add css + js ----------------------
  function ewa_scripts() {
    //---------------css---------------------
    wp_enqueue_style( 'style_fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
    wp_enqueue_style( 'style_normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'style_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'style_slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'style_slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'style_main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'style_style', get_template_directory_uri() . '/assets/css/main.min.css' );
    
    //---------------js---------------------
    wp_enqueue_script( 'sctipt_jquery', get_template_directory_uri() . '/assets/libs/jquery/dist/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'sctipt_fa-all', get_template_directory_uri() . '/assets/js/fa-all.min.js', array(), '', true );
    wp_enqueue_script( 'sctipt_slick', get_template_directory_uri() . '/assets/js/slick.js', array(), '', true );
    wp_enqueue_script( 'sctipt_fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array(), '', true );
    wp_enqueue_script( 'sctipt_maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.js', array(), '', true );
    wp_enqueue_script( 'sctipt_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'sctipt_js', get_template_directory_uri() . '/assets/js/js.js', array(), '', true );
    wp_enqueue_script( 'sctipt_form', get_template_directory_uri() . '/assets/js/form.js', array(), '', true );

    //--------------libs-js---------------------
    wp_enqueue_script( 'sctipt_validate', get_template_directory_uri() . '/assets/libs/jquery.validate.js', array(), '', true );
    // wp_enqueue_script( 'sctipt_popupoverlay', get_template_directory_uri() . '/assets/libs/jquery.popupoverlay.js', array(), '', true );
    wp_enqueue_script( 'sctipt_mask', get_template_directory_uri() . '/assets/libs/jquery.mask.min.js', array(), '', true );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'ewa_scripts' );

//------------------чистка від лишнього ----------------------
  remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
  remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
  remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
  remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
  remove_action('wp_head','wp_generator');  // скрыть версию wordpress
  function modify_jquery() {
        if (!is_admin()) {
      wp_deregister_script('jquery');
        }
  }
  add_action('init', 'modify_jquery');


//------------------підключення додаткових функцій для постов ----------------------
  function myfirsttheme_setup() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );
  
  
//------------------стили админка ----------------------
  add_action('admin_head', 'moi_novii_style');
  function moi_novii_style() {
  print '<style>
    /*Стили в админку*/
      .editor-block-list__block {
        max-width: 100%;
      }
      .wp-block {
        max-width: 100%;
      }
  </style>';
  }
  