<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Office</title>

	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.css">

	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</head>
<body>
	<section id="wrapper">
		<?php include_once('dash-header.php'); ?>

		<section class="dash-panel-sec mt-3 note-dash-sec">
			<div class="note-share-opt w-100">
				<div class="btns-dv pr-5">
					<button class="common-btn round-btn text-center">
						Delete Forever
					</button>
					<button class="common-btn round-btn text-center">
						Restore
					</button>
				</div>
			</div>

			<aside class="dash-sidebar">
				<section class="sidebar-links-bx">
					<ul>
						<li><a href="#">My Notes</a></li>
					</ul>
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<section class="content-main-dv note-dash-cont">
					<div class="note-share-sec">
						<div class="row">
							<div class="col-7">
								<div class="note-share-content">
									<p>My aim is to complete my assignment by Monday.</p>
									<p>Meeting with John & Sons LLC on Tuesday</p>
									<p>My temperory password for xyz.com: MsHYG(Hpyb(&b*)y)N change it!</p>		
								</div>
							</div><!-- col -->

							<div class="col-5">
								
							</div><!-- col -->
						</div>
					</div><!-- note-share-sec -->
				</section><!-- content-main-dv -->
			</section><!-- dash-content-box -->
		</section><!-- dash-panel-sec -->

	</section><!-- wrapper -->
	<script src="asset/js/custom.js"></script>
</body>
</html>