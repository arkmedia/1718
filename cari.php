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
		<link rel="stylesheet" href="cari.css" />

		<script src="jquery-1.7.2.min.js"></script>
		<script src="jquery.mobile-1.1.1/jquery.mobile-1.1.1.min.js"></script>

		<script src="jquery-ui/js/jquery-ui-1.8.21.custom.min.js"></script>

		<script src="cari.js"></script>

		<script src="mediaplayer-5.10/jwplayer.js"></script>
	</head>
	<body >
		<div data-role="page" id="cari">
			<div class="gog_page">
				<div class="header_div">
					<a class="home_link" href="index.php" data-ajax="false" data-transition="slide"><img src="icon-home-normal-01.png"/></a>
					<div>
						<div class="title">
							Cari's Story
						</div>
					</div>
				</div>
				<div id="cari_collage_div">
					<div id="container">
						Loading the player ...
					</div>
					<script type="text/javascript">
						jwplayer("container").setup({
							flashplayer : "mediaplayer-5.10/player.swf",
							file : "cari.mp4",
							height : 600,
							width : 1080,
							image:"cari_poster.jpg"
						});
					</script>
				</div>

				<div id="cari_main_div">
					<div id="cari_main_spacer">
						&nbsp;
					</div>
					<div id="cari_copy_header">

					</div>
					<div id="cari_header_spacer">
						&nbsp;
					</div>
					<div id="cari_copy_col1">

					</div>
					<div id="cari_copy_col2">

					</div>
				</div>
				<?php
				include ('footer.php');
				?>
			</div>
		</div>
	</body>
</html>