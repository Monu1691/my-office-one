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
			<div class="bookmarks-edit-top-dv">
				<div class="btns-dv text-right">
					<!-- <button class="func-btn edit-btn active" data-toggle="modal" data-target="#editBookmark">
						<img src="asset/img/edit.png" alt="Edit">
					</button> -->
					<button class="func-btn add-btn active" data-toggle="modal" data-target="#AddBookmark">
						<img src="asset/img/add-gray.png" alt="Add">
					</button>
				</div>
			</div>
			<aside class="dash-sidebar">
				<section class="sidebar-links-bx">
					<ul>
						<li><a href="#">Bookmarks</a></li>
						<li><a href="#">Others</a></li>
						<li><a href="#">Archived</a></li>
					</ul>
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<section class="content-main-dv bookmarks-sec">
					<ul class="book-edit-ul">
						<li>
							<div class="entry-txt mr-3">
								<span class="icon"><img src="asset/img/bing.png" alt="icon"></span>
								<span class="txt">Directorate of science and technology(dost) - Khyber Pathtunkhwa</span>
							</div>

							<div class="btns-dv ml-auto">
								<button class="func-btn edit-btn" data-toggle="modal" data-target="#editBookmark">
									<img src="asset/img/edit-gray.png" alt="Edit">
								</button>
								<button class="func-btn delete-btn">
									<img src="asset/img/delete.png" alt="Delete">
								</button>
							</div>
						</li>
						<li>
							<div class="entry-txt mr-3">
								<span class="icon"><img src="asset/img/gmail.png" alt="icon"></span>
								<span class="txt">Crazylab customs | New Zealand custom Bike Specialists</span>
							</div>

							<div class="btns-dv ml-auto">
								<button class="func-btn edit-btn" data-toggle="modal" data-target="#editBookmark">
									<img src="asset/img/edit-gray.png" alt="Edit">
								</button>
								<button class="func-btn delete-btn">
									<img src="asset/img/delete.png" alt="Delete">
								</button>
							</div>
						</li>
						<li>
							<div class="entry-txt mr-3">
								<span class="icon"><img src="asset/img/bing.png" alt="icon"></span>
								<span class="txt">Printing images - wjat file size do you need? Resolution, pizel and file sizes explained and compared for print</span>
							</div>

							<div class="btns-dv ml-auto">
								<button class="func-btn edit-btn" data-toggle="modal" data-target="#editBookmark">
									<img src="asset/img/edit-gray.png" alt="Edit">
								</button>
								<button class="func-btn delete-btn">
									<img src="asset/img/delete.png" alt="Delete">
								</button>
							</div>
						</li>
						<li>
							<div class="entry-txt mr-3">
								<span class="icon"><img src="asset/img/gmail.png" alt="icon"></span>
								<span class="txt">Types of Reports | Business Communications Skills for Managers</span>
							</div>

							<div class="btns-dv ml-auto">
								<button class="func-btn edit-btn" data-toggle="modal" data-target="#editBookmark">
									<img src="asset/img/edit-gray.png" alt="Edit">
								</button>
								<button class="func-btn delete-btn">
									<img src="asset/img/delete.png" alt="Delete">
								</button>
							</div>
						</li>
					</ul>
				</section><!-- content-main-dv -->
			</section><!-- dash-content-box -->
		</section><!-- dash-panel-sec -->


		<!-- Modal -->
		<section class="modal fade custom-modal" id="AddBookmark" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body text-center">
						<h3 class="modal-title mb-5">Add New Bookmark</h3>

						<section class="custom-form-sec">
							<form class="icon-form" action="" method="post">
								<div class="row url-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<input type="url" name="website" id="" class="form-control" autocomplete="off" required>
											<label>Web Site</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row note-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<textarea name="description" id="" class="form-control" rows="2" autocomplete="off" required></textarea>
											<label>Description</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->
								<button type="submit" class="common-btn">Save</button>
							</form>
						</section><!-- custom-form-sec -->

					</div><!-- modal-body -->
				</div>
			</div>
		</section>
		<!-- modal -->

		<!-- Modal -->
		<section class="modal fade custom-modal" id="editBookmark" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body text-center">
						<h3 class="modal-title mb-5">Edit</h3>

						<section class="custom-form-sec">
							<form class="icon-form" action="" method="post">
								<div class="row url-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<input type="url" name="website" id="" class="form-control" autocomplete="off" required>
											<label>Web Site</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row note-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<textarea name="description" id="" class="form-control" rows="2" autocomplete="off" required></textarea>
											<label>Description</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->
								<button type="submit" class="common-btn">Save</button>
							</form>
						</section><!-- custom-form-sec -->

					</div><!-- modal-body -->
				</div>
			</div>
		</section>
		<!-- modal -->

	</section><!-- wrapper -->
	<script src="asset/js/custom.js"></script>
</body>
</html>