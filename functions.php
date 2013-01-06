<?php

function lm_social_icons() {
  ?>
  <nav class="social-icons">
    <li><a href="#"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/facebook.png"></a></li>
    <li><a href="#"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/twitter.png"></a></li>
    <li><a href="#"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/linkedin.png"></a></li>
    <li><a href="#"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/youtube.png"></a></li>
    <li><a href="#"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/instagram.png"></a></li>
  </nav>
  <?php
}
add_action('thematic_header','lm_social_icons', 2);



function childtheme_header_imgs() {
  ?>
  <div id="header-img">
    <img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/header-banner.jpg">
  </div>
  <?php
}
add_action('thematic_header', 'childtheme_header_imgs', 7);





?>