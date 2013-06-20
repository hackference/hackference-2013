<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<title>Hackference - A developer's dream</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/normalize.css" />
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/gridpak.css" />
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/global.css" />

    <!-- JS -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
    <script type="text/javascript" src="<?php echo $site_url; ?>js/main.js" ></script>

</head>
<body>

	<?php

	if ($early_bird == true)
	{
		?>
		<div id="flashMessage">
			Get in quick - <strong><a href='<?php echo $site_url; ?>buy'>Early bird tickets only £65</a></strong>
		</div>
		<?php
	}

	?>

	<header>
		<div class="section group">
			<div id="header-logo" class="col span_4_of_10">
				<a href='<?php echo $site_url; ?>'><img src='img/hackference_logo.png' width="100%"></a>
			</div>
			<div class="col span_6_of_10 header-information">
				<div class="topNavInfo">
					Digbeth, August 30 - September 1 2013
				</div>
                <div class="openClose" >
                    <img src="<?php echo $site_url; ?>img/menu.png" />
                </div>
				<ul class="topNav">
					<li><a href='<?php echo $site_url; ?>speakers' <?php if ($page == "speakers") { echo "class='active'"; } ?>>Speakers</a></li>
					<li><a href='<?php echo $site_url; ?>schedule' <?php if ($page == "schedule") { echo "class='active'"; } ?>>Schedule</a></li>
					<li><a href='<?php echo $site_url; ?>hackathon' <?php if ($page == "hackathon") { echo "class='active'"; } ?>>Hackathon</a></li>
					<li><a href='<?php echo $site_url; ?>location' <?php if ($page == "location") { echo "class='active'"; } ?>>Location</a></li>
					<li class="navButton"><a href='<?php echo $site_url; ?>buy'>Buy Tickets</a></li>
				</ul>
			</div>
		</div>
	</header>
