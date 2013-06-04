<!DOCTYPE html>
<html>
	<head>
		<title>My Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="gog-theme/themes/1718-GoG-120719-1206.css" />
		<link rel="stylesheet" href="jquery-ui/development-bundle/themes/base/jquery.ui.all.css" />
		<link rel="stylesheet" href="jquery.mobile-1.1.1/jquery.mobile.structure-1.1.1.min.css" />

		<link rel="stylesheet" href="common.css" />
		<link rel="stylesheet" href="header.css" />
		<link rel="stylesheet" href="footer.css" />
		<link rel="stylesheet" href="events.css" />
		<link rel="stylesheet" href="hycmad_form.css" />

		<script src="jquery-1.7.2.min.js"></script>
		<script src="jquery.mobile-1.1.1/jquery.mobile-1.1.1.min.js"></script>

		<script src="jquery-ui/js/jquery-ui-1.8.21.custom.min.js"></script>
		<script src="hycmad.js"></script>
		<script src="hycmad_form.js"></script>

	</head>
	<body >
		<div data-role="page" id="events">
			<div class="gog_page">
				<div class="header_div">
					<a class="home_link" href="index.php" data-ajax="false" data-transition="slide"><img src="icon-home-normal-01.png"/></a>
					<div>
						<div class="title">
							Support Through Special Events
						</div>
					</div>
				</div>
				<div id="events_bkg_div"></div>
				<div id="events_main_div">
					<div id="events_1col_copy">
						<p>
							Special event fundraisers are important as they raise needed financial support for an organization, provide increased awareness about its mission and services offered and often attract more volunteers for the cause being promoted.
						</p>
						<p>
							St. Joseph&rsquo;s Community Foundation organizes an annual fundraiser that impacts many lives as the proceeds raised benefit the Kraemer Cancer Center.  The current theme for the event is A Kentucky Derby Evening and funds raised have provided additional resources for the cancer center that would otherwise have to wait, or may not happen at all because of budget constraints and priorities.
						</p>
						<p>
						If you'd like to volunteer and impact the future of care here at the Kraemer Cancer Center, please sign up here and we'll contact you to help be a part of the next special event.
						</p>
						<a data-role="button" data-inline="true" data-theme="a" id="hycmad_contact_link">Sign Me Up</a>
					</div>
				</div>
				<?php
				include ('footer.php');
				?>
			</div>
			<?php
			$form_type='events';
			include ('hycmad_form.php');
			?>
		</div>
	</body>
</html>