<?php

$page = "Speakers";
include("header.php");

?>

	<div id="sub">
		<div class="section group">
			<div class="col span_10_of_10 sub_heading">
				<h2>Speakers</h2>
				<span class="line"></span>
			</div>
		</div>

		<div class="section group">		

			<div class="col span_5_of_10 speakerSingle">
				<div class="speakerPicture">
					<img src='<?php echo $site_url; ?>img/speakers/syd-lawrence.png' />
				</div>
				<div class="speakerName">Syd Lawrence</div>
				<p>Syd Lawrence is cofounder of We Make Awesome Sh, and is a developer evangelist at Twilio. He's a developer who is interested in too much tech to be particularly good at any of them. He makes stuff for fun, for profit, for lols. He's made things for companies such as Coca Cola and Microsoft, and musicians such as the rolling stones, swedish house mafia, and kylie minogue.</p>
			</div>

			<div class="col span_5_of_10 speakerSingle">
				<div class="speakerPicture">
					<img src='<?php echo $site_url; ?>img/speakers/lorna-mitchell.jpg' />
				</div>
				<div class="speakerName">Lorna Mitchell</div>
				<p>Lorna is an independent web development consultant, author and trainer based in Leeds, UK. Her books include "PHP Master" and "PHP Web APIs", and she is also published regularly at a number of outlets including netmagazine and of course her own blog lornajane.net. Lorna has spoken at technical events around the world on technical topics around PHP and APIs, regularly delivers technical training sessions and is also active as a mentor with PHPWomen.org. She is an experienced event organiser and speaker, having hosted the Dutch PHP Conference and co-founded the PHP North West conference and user group. In her spare time, she leads the joind.in open source project, which provides a platform for real-time, public feedback at community events.</p>
			</div>

		</div>

		<div class="section group">		

			<div class="col span_5_of_10 speakerSingle">
				<div class="speakerPicture">
					<img src='<?php echo $site_url; ?>img/speakers/david-mytton.png' />
				</div>
				<div class="speakerName">David Mytton</div>
				<p>David Mytton is the founder of server monitoring tool, Server Density, where he has been using MongoDB in production for almost 4 years. He has been programming in PHP and Python for over 10 years, regularly speaks about MongoDB (including starting the London MongoDB User Group), co-founded the Open Rights Group and can often be found cycling in London or drinking tea in Japan.</p>
			</div>

			<div class="col span_5_of_10 speakerSingle">
				<div class="speakerPicture">
					<img src='<?php echo $site_url; ?>img/speakers/peter-bourgon.jpg' />
				</div>
				<div class="speakerName">Peter Bourgo</div>
				<p>'m a distributed systems developer working on search and discovery problems for SoundCloud.</p>
			</div>
			
		</div>
		
		
	</div>

<?php

include("footer.php");