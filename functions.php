<?php

function lm_social_icons() {
  ?>
  <nav class="social-icons">
    <li><a href="http://www.facebook.com/lindsaymacdougallbiz" title="Facebook"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/facebook.png"></a></li>
    <li><a href="https://twitter.com/LindzMacDougall" title="Twitter"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/twitter.png"></a></li>
    <li><a href="http://www.linkedin.com/pub/lindsay-macdougall/13/988/a37" title="Linkedin"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/linkedin.png"></a></li>
    <li><a href="http://www.youtube.com/channel/UCRpgCtmsEErHSK_SegJ202w?feature=plcp" title="Youtube"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/youtube.png"></a></li>
    <li><a href="http://instagram.com/lindzmacdougall/" title="Instagram"><img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/lindsaymacdougall/img/instagram.png"></a></li>
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