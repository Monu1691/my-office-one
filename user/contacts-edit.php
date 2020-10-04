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
				<section class="sidebar-links-bx contacts-side-links">
					<ul>
						<li>
							<a href="#">
								<span>Contacts</span>
								<span>1</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Contacts</span>
								<span>5</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Contacts</span>
								<span>9</span>
							</a>
						</li>
					</ul>
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<section class="content-main-dv contacts-sec">
					<div class="dash-table">
						<table class="table table-borderless">
							<thead>
								<tr>
									<th>Name</th>
									<th>Company</th>
									<th>Email</th>
									<th>Mobile Number</th>
									<th>Phone Number</th>
									<th>
										<div class="btns-dv text-right">
											<!-- <button class="func-btn edit-btn active" data-toggle="modal" data-target="#editContact">
												<img src="asset/img/edit-gray.png" alt="Edit">
											</button> -->
											<button class="func-btn add-btn active" data-toggle="modal" data-target="#AddContact">
												<img src="asset/img/add-gray.png" alt="Add">
											</button>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="td-name">
											<span class="n-ltr">J</span>
											<span class="name">John smith</span>
										</div>
									</td>
									<td><span>JS &amp; Co.</span></td>
									<td><span>john@no.com</span></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td>
										<div class="btns-dv ml-auto">
											<button class="func-btn edit-btn" data-toggle="modal" data-target="#editContact">
												<img src="asset/img/edit-gray.png" alt="Edit">
											</button>
											<button class="func-btn delete-btn">
												<img src="asset/img/delete.png" alt="Delete">
											</button>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="td-name">
											<span class="n-ltr">M</span>
											<span class="name">Mac anderson</span>
										</div>
									</td>
									<td><span>JS &amp; Co.</span></td>
									<td><span>john@no.com</span></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td>
										<div class="btns-dv ml-auto">
											<button class="func-btn edit-btn" data-toggle="modal" data-target="#editContact">
												<img src="asset/img/edit-gray.png" alt="Edit">
											</button>
											<button class="func-btn delete-btn">
												<img src="asset/img/delete.png" alt="Delete">
											</button>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="td-name">
											<span class="n-ltr">J</span>
											<span class="name">John smith</span>
										</div>
									</td>
									<td><span>JS &amp; Co.</span></td>
									<td><span>john@no.com</span></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td>
										<div class="btns-dv ml-auto">
											<button class="func-btn edit-btn" data-toggle="modal" data-target="#editContact">
												<img src="asset/img/edit-gray.png" alt="Edit">
											</button>
											<button class="func-btn delete-btn">
												<img src="asset/img/delete.png" alt="Delete">
											</button>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="td-name">
											<span class="n-ltr">M</span>
											<span class="name">Mac anderson</span>
										</div>
									</td>
									<td><span>JS &amp; Co.</span></td>
									<td><span>john@no.com</span></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td>
										<div class="btns-dv ml-auto">
											<button class="func-btn edit-btn" data-toggle="modal" data-target="#editContact">
												<img src="asset/img/edit-gray.png" alt="Edit">
											</button>
											<button class="func-btn delete-btn">
												<img src="asset/img/delete.png" alt="Delete">
											</button>
										</div>
									</td>
								</tr>

							</tbody>
						</table>
						
					</div>
				</section><!-- content-main-dv -->
			</section><!-- dash-content-box -->
		</section><!-- dash-panel-sec -->

		<!-- Modal -->
		<section class="modal fade custom-modal" id="editContact" tabindex="-1" role="dialog" aria-hidden="true">
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
								<div class="row user-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<input type="text" name="name" id="" class="form-control" autocomplete="off" required>
											<label>First</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row company-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<input type="text" name="company" id="" class="form-control" autocomplete="off" required>
											<label>Company</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row email-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<input type="email" name="email" id="" class="form-control" autocomplete="off" required>
											<label>Email</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row phone-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<input type="tel" name="mobile" id="" class="form-control" autocomplete="off" required>
											<label>Mobile</label>
										</div>
									</div><!-- col -->
								</div>

								<div class="row phone-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<input type="tel" name="phone" id="" class="form-control" autocomplete="off" required>
											<label>Phone</label>
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
		<section class="modal fade custom-modal" id="AddContact" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body text-center">
						<h3 class="modal-title mb-5">Add New Contact</h3>

						<section class="custom-form-sec">
							<form class="icon-form" action="" method="post">
								<div class="row user-icon">
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="text" name="f_name" id="" class="form-control" autocomplete="off" required>
											<label>First Name</label>
										</div>
									</div><!-- col -->
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="text" name="l_name" id="" class="form-control" autocomplete="off" required>
											<label>last Name</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row company-icon">
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="text" name="company" id="" class="form-control" autocomplete="off" required>
											<label>Company</label>
										</div>
									</div><!-- col -->
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="text" name="job_title" id="" class="form-control" autocomplete="off" required>
											<label>Job Title</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row phone-icon">
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="tel" name="mobile" id="" class="form-control" autocomplete="off" required>
											<label>Mobile</label>
										</div>
									</div><!-- col -->
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="tel" name="phone" id="" class="form-control" autocomplete="off" required>
											<label>Phone</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row email-icon">
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="text" name="fex" id="" class="form-control" autocomplete="off" required>
											<label>Fax</label>
										</div>
									</div><!-- col -->
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="email" name="email" id="" class="form-control" autocomplete="off" required>
											<label>Email</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row url-icon">
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="url" name="website" id="" class="form-control" autocomplete="off" required>
											<label>Web Site</label>
										</div>
									</div><!-- col -->
									<div class="col-sm-6">
										<div class="input-bx">
											<input type="text" name="address" id="" class="form-control" autocomplete="off" required>
											<label>Address</label>
										</div>
									</div><!-- col -->
								</div><!-- row -->

								<div class="row note-icon">
									<div class="col-sm-12">
										<div class="input-bx">
											<textarea name="notes" id="" class="form-control" rows="2" autocomplete="off" required></textarea>
											<label>Notes</label>
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