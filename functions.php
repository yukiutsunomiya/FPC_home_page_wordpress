<?php

function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

function themebs_enqueue_styles() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');


function themebs_enqueue_scripts() {
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');



/**
* contact-form-7でバリデーションを追加
*/
add_filter('wpcf7_validate_text', 'wpcf7_validate_post', 11, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_post', 11, 2);
function wpcf7_validate_post($result,$tag){
  $tag = new WPCF7_Shortcode($tag);
  $name = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
//$nameはContactForm7のフォーム要素(input等)のname="この部分"
//$valueはユーザーが入力した(選択した)値
//
//ここから項目を指定してバリデーションの追加
//
/**
*名字 名前
**/
//ここから名字
if ($name === "your-lastname") {
  //your-lastnameという名前のフォームに対して
  if(!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/", $value)) {
  //if(!この部分はPHPで指定)は指定したい条件に当てはまらない(!)場合は
  if (method_exists($result, 'invalidate')) {
  $result->invalidate( $tag,"全角日本語のみで入力してください");
  } else {
  $result['valid'] = false;
  $result['reason'][$name] = '全角日本語のみで入力してください';
  }
  //条件を変えた場合は文言も書き換えておく。
  }
  }
  //ここから名前
  if ($name === "your-firstname") {
  //your-firstnameという名前のフォームに対して
  if(!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u", $value)) {
  //if(!この部分はPHPで指定)は指定したい条件に当てはまらない(!)場合は
  if (method_exists($result, 'invalidate')) {
  $result->invalidate( $tag,"全角日本語のみで入力してください");
  } else {
  $result['valid'] = false;
  $result['reason'][$name] = '全角日本語のみで入力してください';
  }
  //条件を変えた場合は文言も書き換えておく。
  }
  }

//
//ここまでバリデーションの追加
  return $result;
}

//問い合わせページ送信後の遷移先
/*
functions.phpadd_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = 'https://haniwaman.com/thanks/'; /* 遷移先のURL 
}, false );
</script>
EOD;
}
*/