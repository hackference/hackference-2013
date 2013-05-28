<?php

$page = "Index";
include("header.php");

?>

	<div id="hero">
		<div class="section group">
			<div class="col span_10_of_10">
				<img src='http://fakeimg.pl/1000x320/282828/eae0d0/' />
			</div>
		</div>
	</div>

	<div id="sub">
		<div class="section group">
			<div class="col span_10_of_10 sub_heading">
				<h2>Birmingham's First Combined Conference & Hackathon</h2>
				<span class="line"></span>
			</div>
		</div>
		<div class="section group">
			<div class="col span_10_of_10">
				<div class="paras">
					<p>A first-of-its-kind event in Birmingham starts on August 23rd, collecting 300 developers to look into different technologies, languages and best practices available in the development world. The team at Hackference will be bringing you internationally renowned developers to share their knowledge on a wide range of subjects covering different areas of coding and development.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="sub">
		<div class="section group">
			<div class="col span_10_of_10 sub_heading">
				<h3>Conference Speakers</h3>
				<span class="line"></span>
			</div>
		</div>
		<div class="section group speakers">
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='<?php echo $site_url; ?>img/speakers/syd-lawrence.png' />
					<div class="speakerCaption"><a href=''>Syd Lawrence</a></div>
				</div>
			</div>
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='<?php echo $site_url; ?>img/speakers/lorna-mitchell.jpg' />
					<div class="speakerCaption"><a href=''>Lorna Mitchell</a></div>
				</div>
			</div>
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='<?php echo $site_url; ?>img/speakers/david-mytton.png' />
					<div class="speakerCaption"><a href=''>David Mytton</a></div>
				</div>
			</div>			
		</div>
		<div class="section group speakers">
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='<?php echo $site_url; ?>img/speakers/peter-bourgon.jpg' />
					<div class="speakerCaption"><a href=''>Peter Bourgon</a></div>
				</div>
			</div>
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='<?php echo $site_url; ?>img/speakers/cristiano-betta.jpg' />
					<div class="speakerCaption"><a href=''>Cristiano Betta</a></div>
				</div>
			</div>
			
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='<?php echo $site_url; ?>img/speakers/phil-leggetter.jpg' />
					<div class="speakerCaption"><a href=''>Phil Leggetter</a></div>
				</div>
			</div>
		</div>
		<div class="section group speakers">			
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='http://fakeimg.pl/100x100/282828/eae0d0/' />
					<div class="speakerCaption"><a href=''>George Ornbo</a></div>
				</div>
			</div>
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='http://fakeimg.pl/100x100/282828/eae0d0/' />
					<div class="speakerCaption"><a href=''>Joe Littlejohn</a></div>
				</div>
			</div>
			<div class="col span_1_of_3 speaker">
				<div style="position: relative">
					<img src='http://fakeimg.pl/100x100/282828/eae0d0/' />
					<div class="speakerCaption"><a href=''>Joe Littlejohn</a></div>
				</div>
			</div>
		</div>
	</div>

	<div id="sub">
		<div class="section group">
			<div class="col span_10_of_10 sub_heading">
				<h3>Hackathon</h3>
				<span class="line"></span>
			</div>
		</div>
		<div class="section group">			
			<div class="col span_10_of_10">
				<div class="paras_small">
					<p>After the conference a whole weekend of coding is afoot (August 23rd and 24th). That means 100 developers gathering together to build some great applications on different platforms in under 36 hours. With access to the knowledge gained at the conference and the APIs and SDKs of the hackathon providers, who will walk away with the prizes?</p>
				</div>
			</div>
		</div>
	</div>


	<div id="sub">
		<div class="section group">
			<div class="col span_10_of_10 sub_heading">
				<h3>Sponsors</h3>
				<span class="line"></span>
			</div>
		</div>
		<div class="section group sponsors">
			<div class="col span_1_of_4 sponsor">
				<a href='http://www.sendgrid.com/'><img src='<?php echo $site_url; ?>img/sponsors/sendgrid.png' /></a>
			</div>
			<div class="col span_1_of_4 sponsor">
				<a href='http://www.soundcloud.com/'><img src='<?php echo $site_url; ?>img/sponsors/soundcloud.png' /></a>
			</div>
			<div class="col span_1_of_4 sponsor">
				<a href='http://github.com/'><img src='<?php echo $site_url; ?>img/sponsors/github.png' /></a>
			</div>
			<div class="col span_1_of_4 sponsor">
				<a href='http://campaignmonitor.com/'><img src='<?php echo $site_url; ?>img/sponsors/campaign_monitor.png' /></a>
			</div>
		</div>
	</div>

<?php

include("footer.php");