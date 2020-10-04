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
			<aside class="dash-sidebar">
				<section class="sidebar-links-bx">
					<ul>
						<li><a class="common-btn round-btn" href="javascript:void(0)">Add Note</a></li>
						<li><a href="#">My Notes</a></li>
						<li><a href="#">Old Notes</a></li>
					</ul>
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<section class="content-main-dv note-dash-cont">
					<div class="note-share-sec">
						<div class="row">
							<div class="col-7">
								<div class="note-share-content">
									<div class="custom-alert alert alert-dismissible fade show" role="alert">
										<span>Link has been copied</span>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<p>My aim is to complete my assignment by Monday.</p>
									<p>Meeting with John & Sons LLC on Tuesday</p>
									<p>My temperory password for xyz.com: MsHYG(Hpyb(&b*)y)N change it!</p>		
								</div>
							</div><!-- col -->

							<div class="col-5">
								<div class="note-share-opt">
									<div class="btns-dv pr-5">
										<button class="func-btn edit-btn">
											<img src="asset/img/share-edit.png" alt="Edit">
										</button>
										<button class="func-btn clock-btn">
											<img src="asset/img/share-clock.png" alt="Delete">
										</button>
										<button class="func-btn share-btn">
											<img src="asset/img/share-share.png" alt="Delete">
										</button>
										<button class="func-btn cross-btn">
											<img src="asset/img/share-cross.png" alt="Delete">
										</button>
										<button class="func-btn trash-btn">
											<img src="asset/img/share-trash.png" alt="Delete">
										</button>
									</div>
								</div>
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