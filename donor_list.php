<?php

include ('read_donors.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="stylesheet" href="gog-theme/themes/1718-GoG-120719-1206.css" />
		<link rel="stylesheet" href="jquery.mobile-1.1.1/jquery.mobile.structure-1.1.1.min.css" />
			
		<link rel="stylesheet" href="common.css" />
		<link rel="stylesheet" href="header.css" />
		<link rel="stylesheet" href="footer.css" />
		<link rel="stylesheet" href="donor_list.css" />
		
		<script src="jquery-1.7.2.min.js"></script>
		<script src="jquery.mobile-1.1.1/jquery.mobile-1.1.1.min.js"></script>
		
		<script src="jquery-ui/js/jquery-ui-1.8.21.custom.min.js"></script>
		
		<script src="cubiq-iscroll-a62693c/src/iscroll.js"></script>
		
		<script src="donor_list.js"></script>
	
	</head>
	<body >
<div data-role="page" id="donor_list">
	<div class="gog_page">
		<div class="header_div">
			<a class="home_link" href="index.php" data-ajax="false" data-transition="slide"><img src="icon-home-normal-01.png"/></a>
			<div>
				<div class="title">Donor List</div>
			</div>
		</div>
		<div id="donor_list_collage_div">
			<div id="donor_list_collage_text">
				St. Joseph's Community Foundation would like to thank our many donors <br>
				who support Froedtert Health St. Joseph's Hospital and the Kraemer <br>
				Cancer Center. Your gifts provide essential funding for patient-friendly <br>
				facilities, state-of-the-art technology and cancer care programs for those <br>
				living and working in the greater Washington County areas. The generous <br>
				support of our neighbors and friends helps to ensure that everyone has <br>
				access to advanced, comprehensive cancer care close to home.
			</div>
		</div>
		<div id="donor_list_main_div">
			<div id="donor_heading_div">
				<div id="donor_heading_text">
					Donors
				</div>
			</div>
			<div id="donor_list_chooser_col">

				<div id="donor_list_chooser">
					<?php
					$count = 0;
					foreach ($amts as $amt => $ls) {
						$selected = "";
						if ($count == 0) {
							$selected = " selected ";
						}
						echo "<div onclick=\"load_donors($amt,this);\" class=\"donor_list_li $selected\">" . $codes[$amt] . "</div>";
						$count++;
					}
					?>
					</div>

				</div>
				<div id="donor_display">
					<ul id="donor_list">
					<?php
					$disp = "block";
					foreach ($amts as $amt => $ls) {
						foreach ($ls as $don) {
							echo "<li class=\"donor_indiv amount_$amt\">";
							if ($don['slname']) {
								echo $don['fname'];
								echo " ";
								echo $don['lname'];
								echo " and ";
								echo $don['sfname'];
								echo " ";
								echo $don['slname'];
							} else if ($don['sfname']) {
								echo $don['fname'];
								echo " and ";
								echo $don['sfname'];
								echo " ";
								echo $don['lname'];
							} else {
								echo $don['fname'];
								echo " ";
								echo $don['lname'];
							}
							echo "</li>";
						}
					}
					?>
					</ul>
					</div>
				</div>
				<?php
				include ('footer.php');
				?>
			</div>
		</div>
</body>
</html>