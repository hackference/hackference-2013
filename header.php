<?php

include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<title>Hackference - A web developers dream</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/normalize.css" />
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/gridpak.css" />
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/global.css" />

</head>
<body>

	<?php

	if ($early_bird == true)
	{
		?>
		<div id="flashMessage">
			Get in quick - <strong><a href=''>Early bird tickets only £65</a></strong>
		</div>
		<?php
	}

	?>

	<header>
		<div class="section group">
			<div class="col span_3_of_10">
				<h1><a href='<?php echo $site_url; ?>'><img src='img/hackference_logo.png' width="100%"></a></h1>
			</div>
			<div class="col span_7_of_10">
				<div class="topNavInfo">
					The Custard Factory, August 23 - 25 2013
				</div>
				<ul class="topNav">
					<li><a href='<?php echo $site_url; ?>speakers' <?php if ($page == "Speakers") { echo "class='active'"; } ?>>Speakers</a></li>
					<li><a href='<?php echo $site_url; ?>schedule'>Schedule</a></li>
					<li><a href='<?php echo $site_url; ?>hackathon'>Hackathon</a></li>
					<li><a href='<?php echo $site_url; ?>location'>Location</a></li>
					<li class="navButton"><a href='<?php echo $site_url; ?>buy'>Buy Tickets</a></li>
				</ul>
			</div>
		</div>
	</header>