<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Office</title>

	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</head>
<body>
	<section id="wrapper">
		<?php include_once('dash-header.php'); ?>

		<section class="dash-panel-sec mt-3">
			<aside class="dash-sidebar">
				<section class="sidebar-links-bx">
					<ul>
						<li><a href="bookmark-edit.php">Bookmarks</a></li>
						<li><a href="#">Others</a></li>
						<li><a href="#">Archived</a></li>
					</ul>
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<section class="content-main-dv bookmarks-sec">
					<ul class="book-edit-ul">
						<li>
							<div class="entry-txt">
								<span class="icon"><img src="asset/img/bing.png" alt="icon"></span>
								<span class="txt">Directorate of science and technology(dost) - Khyber Pathtunkhwa</span>
							</div>
						</li>
						<li>
							<div class="entry-txt">
								<span class="icon"><img src="asset/img/gmail.png" alt="icon"></span>
								<span class="txt">Crazylab customs | New Zealand custom Bike Specialists</span>
							</div>
						</li>
						<li>
							<div class="entry-txt">
								<span class="icon"><img src="asset/img/bing.png" alt="icon"></span>
								<span class="txt">Printing images - wjat file size do you need? Resolution, pizel and file sizes explained and compared for print</span>
							</div>
						</li>
						<li>
							<div class="entry-txt mr-3">
								<span class="icon"><img src="asset/img/gmail.png" alt="icon"></span>
								<span class="txt">Types of Reports | Business Communications Skills for Managers</span>
							</div>
						</li>
					</ul>
				</section><!-- content-main-dv -->
			</section><!-- dash-content-box -->
		</section><!-- dash-panel-sec -->

	</section><!-- wrapper -->
	<script src="asset/js/custom.js"></script>
</body>
</html>