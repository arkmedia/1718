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
		<link rel="stylesheet" href="hycmad.css" />
		<link rel="stylesheet" href="hycmad_form.css" />

		<script src="jquery-1.7.2.min.js"></script>
		<script src="jquery.mobile-1.1.1/jquery.mobile-1.1.1.min.js"></script>

		<script src="jquery-ui/js/jquery-ui-1.8.21.custom.min.js"></script>

		<script src="hycmad.js"></script>
		<script src="hycmad_form.js"></script>
	</head>
	<body >
		<div data-role="page" id="hycmad">
			<div class="gog_page">
				<div class="header_div">
					<a class="home_link" href="index.php" data-ajax="false" data-transition="slide"><img src="icon-home-normal-01.png"/></a>
					<div>
						<div class="title">
							How You Can
						</div>
						<div class="subtitle">
							MAKE A DIFFERENCE
						</div>
					</div>
				</div>
				<div id="hycmad_collage_div">
					&nbsp;
				</div>
				<div id="hycmad_bkg_div"></div>
				<div id="hycmad_main_div">
					<div id="hycmad_main_spacer">
						&nbsp;
					</div>
					<div id="hycmad_copy_header">
						Everyone has the ability<br>to make a difference
					</div>
					<!--<div id="hycmad_header_spacer">
					&nbsp;
					</div>-->
					<div id="hycmad_1col_copy">
						<p>
							A gift to the Kraemer Cancer Center through St. Joseph&rsquo;s Community Foundation allows you to invest in local cancer care facilities and services that will provide a benefit for many years to come.  Your gift will provide essential funding for patient-friendly facilities, state-of-the-art technology and cancer care programs for those living in the greater Washington County community.
						</p>
						<p>
							The generous support of our neighbors and friends helps to ensure that everyone has access to advanced, comprehensive cancer care close to home.
						</p>
						<p>
							To receive more information from St. Joseph&rsquo;s Community Foundation, please share your information and we&rsquo;ll contact you.
							<br/>
							<a data-role="button" data-inline="true" data-theme="a" id="hycmad_contact_link">Please Contact Me</a>
						</p>
					</div>
					<!--<div id="hycmad_header_spacer2">
					&nbsp;
					</div>-->
					<div id="hycmad_copy_col1">
						<div class="hycmad_col_header" >
							Unrestricted Gifts
						</div>
						<p>
							Contributions made without donor restrictions provide more flexibility and the ability to respond to the Cancer Center&rsquo;s highest priority needs. These gifts are truly valuable because they also provide support for critical services in need of additional resources.
						</p>
					</div>
					<div id="hycmad_copy_col2">
						<div class="hycmad_col_header" >
							Tribute Gifts
						</div>
						<p>
							Contributions may be made in memory of someone who has passed away or in honor of a loved one, family member or friend. Both are wonderful ways to show a measure of affection, admiration or gratitude. When such gifts are made, notification is sent to the family or individual from the information you provide.
						</p>
					</div>
					<div id="hycmad_copy_col3">
						<div class="hycmad_col_header" >
							Planned Giving
						</div>
						<p>
							Incorporating charitable gifts into your financial and estate plans can have a tremendous benefit for both you and the Cancer Center, now and in the future. Planned gifts allow you to see your philanthropic dollars at work and can include bequests, charitable trusts, gift annuities, life insurance or retirement plans.
						</p>

					</div>
				</div>
				<?php
				include ('footer.php');
				?>
			</div>
			<?php
			include ('hycmad_form.php');
			?>
		</div>
	</body>
</html>