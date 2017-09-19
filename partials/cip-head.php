<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="canonical" href="<?php echo get_permalink(); ?>">
  <link rel="stylesheet" href="/wp-content/themes/CIP/css/style.min.css">
  <?php if (is_page_template($template = "landing-page.php")) {
    echo "<link rel='stylesheet' href='/wp-content/themes/CIP/css/landing-page.min.css'>";
  } ?>

  <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/CIP/imgs/favicon.ico">
</head>