<?php
function setup() {
   //ここに関数の中身を記述します。
   add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
   add_theme_support( 'menus');  //メニュー機能をON
}
add_action( 'after_setup_theme', 'setup' ); 
//after_setup_themeアクションフック※に登録します。

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}
?>


