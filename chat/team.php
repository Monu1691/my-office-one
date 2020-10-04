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
					
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<section class="content-main-dv chat-sec">
					<div class="chat-sidebar">
						<div class="profilebx">
							<div class="img">
								<img src="asset/img/profile.png">
							</div>
							<div class="info">
								<div class="name">lisa vicari</div>
								<div class="dropdown status">
									<span class="clr"></span>
									<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Available
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<li>Bussy</li>
										<li>Meeting</li>
										<li>Party</li>
										<li>Offline</li>
									</ul>
								</div><!-- status -->
							</div>
						</div>

						<div class="chat-team-dv">
							<a href="index.php" class="chat-dv">Chat</a>
							<a href="team.php" class="team-dv active">Team</a>
						</div><!-- chat-team -->

						<div class="chat-search team-search">
							<form action="">
								<button type="submit">
									<img src="asset/img/chat-search.png">
								</button>
								<input type="text" placeholder="Search User/Team">
							</form>
							<button class="create" data-toggle="modal" data-target="#createTeam">Create</button>
						</div><!-- chat-search -->

						<ul class="chat-list">
							<li class="active">
								<div class="chat-list-dv">
									<div class="img">
										<img src="asset/img/profile.png">
									</div>
									<div class="info-dv">
										<div class="info w-100">
											<div class="name">Veronica Anderson</div>
											<div class="msg">35 Users</div>
										</div>
									</div>
								</div>	
							</li>
							<li>
								<div class="chat-list-dv">
									<div class="img">
										<img src="asset/img/profile.png">
									</div>
									<div class="info-dv">
										<div class="info">
											<div class="name">Veronica Anderson</div>
											<div class="msg">5 Users</div>
										</div>
										<div class="text">
											<span class="time">10:20 AM</span>
										</div>
									</div>
								</div>	
							</li>
							<li>
								<div class="chat-list-dv">
									<div class="img">
										<img src="asset/img/profile.png">
									</div>
									<div class="info-dv">
										<div class="info">
											<div class="name">Veronica Anderson</div>
											<div class="msg">5 Users</div>
										</div>
										<div class="text">
											<span class="time">10:20 AM</span>
										</div>
									</div>
								</div>	
							</li>
							<li>
								<div class="chat-list-dv">
									<div class="img">
										<img src="asset/img/profile.png">
									</div>
									<div class="info-dv">
										<div class="info">
											<div class="name">Veronica Anderson</div>
											<div class="msg">5 Users</div>
										</div>
										<div class="text">
											<span class="time">10:20 AM</span>
										</div>
									</div>
								</div>	
							</li>
						</ul>
					</div>
					
					<div class="chat-wall">
						<div class="user-info-bar">
							<div class="info">
								<h3>myOffice</h3>
								<span>35 Users</span>
							</div>

							<div class="action">
								<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="asset/img/dots.png">
								</button>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
									<li>Add Member</li>
									<li>View All Member</li>
								</ul>
							</div>
						</div><!-- user-info-bar -->

						<div class="chat-msg-bx">
							<div class="chat-msg-dv">
								<div class="icon">
									<img src="asset/img/profile.png">
								</div>
								<div class="content">
									<div class="name">
										Veronica Anderson
										<span class="date">10.20 AM</span>
									</div>
									<div class="msg-bx">
										Hiii Lisa Vicari <br />
										Meeting with John & Sons LLC on Tuesday
									</div>
								</div>
							</div><!-- chat-msg-dv -->

							<div class="chat-msg-dv right">
								<div class="icon">
									<span><img src="asset/img/profile.png"></span>
								</div>
								<div class="content">
									<div class="name">
										<span class="date">10.20 AM</span>
									</div>
									<div class="msg-bx">
										Hiii Lisa Vicari <br />
										I Know and I prepared everything
									</div>
								</div>
							</div><!-- chat-msg-dv -->

							
							<div class="chat-msg-dv">
								<div class="icon">
									<span><img src="asset/img/profile.png"></span>
								</div>
								<div class="content">
									<div class="name">
										Veronica Anderson
										<span class="date">10.20 AM</span>
									</div>
									<div class="msg-bx">
										Hiii Lisa Vicari <br />
										Meeting with John & Sons LLC on Tuesday
									</div>
								</div>
							</div><!-- chat-msg-dv -->

							<div class="chat-msg-dv right">
								<div class="icon">
									<span><img src="asset/img/profile.png"></span>
								</div>
								<div class="content">
									<div class="name">
										<span class="date">10.20 AM</span>
									</div>
									<div class="msg-bx">
										Hiii Lisa Vicari <br />
										I Know and I prepared everything
									</div>
								</div>
							</div><!-- chat-msg-dv -->
							
						</div><!-- chat-msg-bx -->

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

		<!-- Export Data Modal -->
		<section class="modal fade custom-modal" id="createTeam" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body text-center">
						<h3 class="modal-title mb-4">Create Team</h3>

						<div class="create-team-bx">
							<div class="name-dv">
								<input type="text" placeholder="Team Name">
							</div>
							<div class="team-list">
								<input type="text" placeholder="Search">
								<ul>
									<li>
										<div class="team-bx">
											<div class="img">
												<img src="asset/img/profile.png">
											</div>
											<div class="info-dv">
												<div class="info">
													<div class="name">Veronica Anderson</div>			
												</div>
												<div class="text">
													<span class="chk"><input type="checkbox" id="check1"></span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="team-bx">
											<div class="img">
												<img src="asset/img/profile.png">
											</div>
											<div class="info-dv">
												<div class="info">
													<div class="name">Veronica Anderson</div>			
												</div>
												<div class="text">
													<span class="chk"><input type="checkbox" id="check1"></span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="team-bx">
											<div class="img">
												<img src="asset/img/profile.png">
											</div>
											<div class="info-dv">
												<div class="info">
													<div class="name">Veronica Anderson</div>			
												</div>
												<div class="text">
													<span class="chk"><input type="checkbox" id="check1"></span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="team-bx">
											<div class="img">
												<img src="asset/img/profile.png">
											</div>
											<div class="info-dv">
												<div class="info">
													<div class="name">Veronica Anderson</div>			
												</div>
												<div class="text">
													<span class="chk"><input type="checkbox" id="check1"></span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="team-bx">
											<div class="img">
												<img src="asset/img/profile.png">
											</div>
											<div class="info-dv">
												<div class="info">
													<div class="name">Veronica Anderson</div>			
												</div>
												<div class="text">
													<span class="chk"><input type="checkbox" id="check1"></span>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<button type="submit" class="common-btn mt-3" style="min-width: 150px;">Create</button>
						</div>

					</div><!-- modal-body -->
				</div>
			</div>
		</section>
		<!-- modal -->

	</section><!-- wrapper -->
	<script src="asset/js/custom.js"></script>
</body>
</html>