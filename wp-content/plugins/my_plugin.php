<?php
/*
Plugin Name: Capitalize Post Title
Description: This plugin capitalizes the titles of all posts.
Version: 1.0
Author: Zahra Atef
*/
?>
<?php
function capitalize_post_title($title) {
    return strtoupper($title);
}
add_action('the_title', 'capitalize_post_title');
?>