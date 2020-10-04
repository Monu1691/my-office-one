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

		<section class="dash-panel-sec">
			<section class="dash-content-box">
				<section class="content-main-dv chat-sec">
					<?php include_once('chat-sidebar.php'); ?>
					
					<div class="chat-wall">
						<div class="row m-0 chat-row">
							<div class="col-lg-4 p-0 alert fade show active" role="alert">
								<div class="alert-head">
									<div class="name-status">
										<div class="name">Veronica Anderson</div>
										<div class="status">
											<span class="clr"></span>
											<span>Online</span>
										</div>
									</div><!-- name-status -->
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<i class="fa fa-times" aria-hidden="true"></i>
									</button>
								</div><!-- alert-head -->
								<?php include('chat-block.php'); ?>
							</div><!-- col -->
							<div class="col-lg-4 p-0 alert fade show" role="alert">
								<div class="alert-head">
									<div class="name-status">
										<div class="name">Veronica Anderson</div>
										<div class="status">
											<span class="clr"></span>
											<span>Online</span>
										</div>
									</div><!-- name-status -->
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<i class="fa fa-times" aria-hidden="true"></i>
									</button>
								</div><!-- alert-head -->
								<?php include('chat-block.php'); ?>
							</div><!-- col -->
							<div class="col-lg-4 p-0 alert fade show" role="alert">
								<div class="alert-head">
									<div class="name-status">
										<div class="name">Veronica Anderson</div>
										<div class="status">
											<span class="clr"></span>
											<span>Online</span>
										</div>
									</div><!-- name-status -->
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<i class="fa fa-times" aria-hidden="true"></i>
									</button>
								</div><!-- alert-head -->
								<?php include('chat-block.php'); ?>
							</div><!-- col -->
						</div>

						<div class="sending-sec">
							<div class="sending-bx">
								<span class="voice"><img src="asset/img/voice.png"></span>
								<span class="type-here"><input type="text" name="type_here" placeholder="Type Here"></span>
								<span class="attachment"><img src="asset/img/attatchment.png"></span>
								<span class="gallery"><img src="asset/img/gallery.png"></span>
								<span class="send"><button type="submit">Send <span><img src="asset/img/telligram.png"></span></button></span>
							</div>
						</div><!-- sending-sec -->

					</div><!-- wall -->

				</section><!-- content-main-dv -->
			</section><!-- dash-content-box -->
		</section><!-- dash-panel-sec -->

	</section><!-- wrapper -->
	<script src="asset/js/custom.js"></script>
</body>
</html>