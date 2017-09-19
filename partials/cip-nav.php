<div id="navbar">
  <ul>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li class="left">Home</li></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>thomas-j-germinario-patent-trademark-attorney"><li class="right">About</li></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>patents"><li class="left">Patents</li></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>trademarks"><li class="right">Trademarks</li></a>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>clients"><li class="left">Clients</li></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog"><li class="right">Blog</li></a>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact"><li class="center">Contact</li></a>
  </ul>
</div>
<?php if (!is_page_template($template = "landing-page.php")) { 
  include 'cip-mobile-nav.php';
} ?>