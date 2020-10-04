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
							<a href="contacts-edit.php">
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
								</tr>

							</tbody>
						</table>
						
					</div>
				</section><!-- content-main-dv -->
			</section><!-- dash-content-box -->
		</section><!-- dash-panel-sec -->

	</section><!-- wrapper -->
	<script src="asset/js/custom.js"></script>
</body>
</html>