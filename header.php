<?php include 'partials/cip-head.php' ?>
<body>
	<div id="wrapper">
		<div id="header" <?php if (is_page_template("landing-page.php")) { echo "class='lp-header'"; } ?>>

			<div id="top">
				<?php include 'partials/cip-logo.php' ?>

				<?php  
				if (!is_page_template($template = "landing-page.php")) { 
					include 'partials/cip-callout.php'; 
					include 'partials/cip-nav.php';
				} ?>
			</div>
		</div>
		