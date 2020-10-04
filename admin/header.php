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
		<section class="dash-panel-sec">
			<aside class="dash-sidebar">
				<section class="top-side-bx mb-5">
					<div class="logo pt-2">
						<a href="index.php">
							<img src="asset/img/logo.svg" alt="Logo">
						</a>
					</div>
				</section><!-- top-side-bx -->

				<section class="sidebar-links-bx">
					<ul>
						<li class="active"><a href="index.php">Dashboard</a></li>
						<li><a href="users.php">Users</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="bookmark.php">Bookmarks</a></li>
						<li><a href="notes.php">Notes</a></li>
						<li><a href="billing.php">Billing</a></li>
						<li><a href="acitivity.php">Activity</a></li>
					</ul>
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<?php include_once('dash-header.php'); ?>

				<section class="content-main-dv">