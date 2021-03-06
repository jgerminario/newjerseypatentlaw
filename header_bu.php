<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--<link rel="stylesheet" href="/wp-content/themes/CIP/css/bootstrap.css">-->
	<link rel="canonical" href="<?php echo get_permalink(); ?>">
	<link rel="stylesheet" href="/wp-content/themes/CIP/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/CIP/imgs/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700|Merriweather:400,700' rel='stylesheet' type='text/css'>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25178193-2', 'auto');
ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

</script>
</head>
<body>
		<div id="header">
			<div id="top">
				<div id="logo">
					<a class="img" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/TJG.png" alt="Thomas J Germinario, Patent and Trademark Attorney"></a>
				</div>
				
				<div id="call"><div id="phone"></div>
					<p class="call">Call today</p>
					<p class="number"><a id="phoneHeaderLink" href="tel:+19088790091" style="text-decoration: none;">908.879.0091</a></p>
				</div> <!--for normal -->
			</div>
			<a href="tel:+19088790091" id="phoneHeaderResponsive"><div id="call_mobile">
					<p class="number"><img class="phone" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/phone.png">Tap to call 908.879.0091</p>
					</div></a>
			<div id="navbar">
				<ul >
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li class="left">Home</li></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>thomas-j-germinario-patent-attorney"><li class="right">About</li></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>patents"><li class="left">Patents</li></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>trademarks"><li class="right">Trademarks</li></a>
					<!-- 	<div class="mobile_delimiter"></div> -->
					<!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>clients"><li class="left">Clients</li></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog"><li class="right">Blog</li></a>-->
				<!-- 		<div class="mobile_delimiter"></div> -->
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact"><li class="center">Contact</li></a>
				</ul>
				</div>
				  <a href="#" id="pull" onclick='document.getElementById("navbar").className = "show"; document.getElementById("pull_active").style.display = "block";document.getElementById("pull").style.display = "none";' ></a>
				<a href="#" id="pull_active" onclick='document.getElementById("navbar").className = ""; document.getElementById("pull_active").style.display = "none";document.getElementById("pull").style.display = "block";'></a>
				   
			</div>
		</div>
		<div id="wrapper">