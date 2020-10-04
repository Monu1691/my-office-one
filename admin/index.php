<?php include_once('header.php'); ?>

<section class="dash-heading-bx">
	<div class="title-dv">
		<div class="title">Dashboard</div>
		<nav aria-label="breadcrumb" class="breadcrumb-bx">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">myOffice</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ul>
		</nav>
	</div>
	<div class="link-dv">
		<button class="common-btn" data-toggle="modal" data-target="#exportData">Export</button>
	</div>
</section><!-- heading-bx -->

<section class="home-wdgt-sec container-fluid">
	<div class="row">
		<div class="col-xl-3 col-lg-6 mb-3">
			<div class="home-wdgt">
				<div class="txt">
					<div class="nmb">5000</div>
					<div class="name">Users</div>
				</div>
				<div class="icon">
					<a href="users.php"><img src="asset/img/user-home.png" alt="Icon"></a>
				</div>
			</div><!-- home-wdgt -->
		</div><!-- col -->

		<div class="col-xl-3 col-lg-6 mb-3">
			<div class="home-wdgt">
				<div class="txt">
					<div class="nmb">150</div>
					<div class="name">Contacts</div>
				</div>
				<div class="icon">
					<a href="contacts.php"><img src="asset/img/user-pink.png" alt="Icon"></a>
				</div>
			</div><!-- home-wdgt -->
		</div><!-- col -->

		<div class="col-xl-3 col-lg-6 mb-3">
			<div class="home-wdgt">
				<div class="txt">
					<div class="nmb">560</div>
					<div class="name">Bookmarks</div>
				</div>
				<div class="icon">
					<a href="bookmark.php"><img src="asset/img/bookmark.png" alt="Icon"></a>
				</div>
			</div><!-- home-wdgt -->
		</div><!-- col -->

		<div class="col-xl-3 col-lg-6 mb-3">
			<div class="home-wdgt">
				<div class="txt">
					<div class="nmb">360</div>
					<div class="name">Notes</div>
				</div>
				<div class="icon">
					<a href="notes.php"><img src="asset/img/notes.png" alt="Icon"></a>
				</div>
			</div><!-- home-wdgt -->
		</div><!-- col -->
	</div><!-- row -->
</section>

<section class="home-data-sec container-fluid">
	<div class="row">
		<div class="col-xl-9 col-lg-8 mt-3">
			<div class="backup-log-bx h-100">
				<div class="heading-dv">
					<div class="left">
						<a href="acitivity.php" class="fn common-btn">Recent Activity</a>
						<a href="acitivity-backup.php" class="fn">Backup logs</a>
					</div>
					<div class="right">
						<a href="#" class="common-btn">View All</a>
					</div>
				</div>
				<ul>
					<li>
						<div class="data">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith has added new Contact in “Vendor” folder</span>
						</div>
						<div class="time">
							07/27/2020 at 01:12:01
						</div>
					</li>
					<li>
						<div class="data">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith has added new Contact in “Vendor” folder</span>
						</div>
						<div class="time">
							07/27/2020 at 01:12:01
						</div>
					</li>
					<li>
						<div class="data">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith has added new Contact in “Vendor” folder "<a href="">https://www.worldometers.info/coronavirus/</a>"</span>
						</div>
						<div class="time">
							07/27/2020 at 01:12:01
						</div>
					</li>
					<li>
						<div class="data">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith has added new Contact in “Vendor” folder</span>
						</div>
						<div class="time">
							07/27/2020 at 01:12:01
						</div>
					</li>
					<li>
						<div class="data">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith has added new Contact in “Vendor” folder</span>
						</div>
						<div class="time">
							07/27/2020 at 01:12:01
						</div>
					</li>
					<li>
						<div class="data">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith has added new Contact in “Vendor” folder</span>
						</div>
						<div class="time">
							07/27/2020 at 01:12:01
						</div>
					</li>
					<li>
						<div class="data">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith has added new Contact in “Vendor” folder</span>
						</div>
						<div class="time">
							07/27/2020 at 01:12:01
						</div>
					</li>
				</ul>
			</div>
		</div><!-- col -->

		<div class="col-xl-3 col-lg-4 mt-3">
			<div class="home-note h-100">
				<h6 class="heading">My notes</h6>
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>In et diam lobortis, elementum ante nec, accumsan magna.</li>
					<li>Praesent commodo tellus et metus pretium elementum.</li>
					<li>In volutpat velit mattis risus blandit rhoncus.</li>
					<li>Nunc in sapien ut erat laoreet commodo.</li>
				</ul>
			</div><!-- home-note -->
		</div><!-- col -->

	</div><!-- row -->
</section>

<?php include_once('footer.php'); ?>