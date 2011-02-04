<?php
/*
Plugin Name: Instapaper Friendly
Plugin URI: http://www.hung-truong.com/blog/instapaper-friendly-wordpress-plugin/
Description: Adds Instapaper class titles to your content so that it will display correctly in Instapaper.
Version: 1.0
Author: Hung Truong
Author URI: http://www.hung-truong.com/
License: GPL2
*/

function add_instapaper_class_to_content($content = ''){
  if(is_single()){
    //Add the div with class name "instapaper_body" to wrap the content
    //if this is a single post (e.g. not a list of posts)
    $content = '<div class="instapaper_body">' . "\n" . $content;
    $content .= "</div><!-- instapaper_body -->\n";
  }
  return $content;
}

add_filter('the_content', 'add_instapaper_class_to_content');

?>
