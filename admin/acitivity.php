<?php include_once('header.php'); ?>

<section class="dash-heading-bx">
	<div class="title-dv">
		<div class="title">Activity</div>
		<nav aria-label="breadcrumb" class="breadcrumb-bx">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">myOffice</a></li>
				<li class="breadcrumb-item active" aria-current="page">Activity</li>
			</ul>
		</nav>
	</div>
	<div class="link-dv">
		<button class="date-btn">
			<span>Apr 1, 2020  -  Apr 30, 200</span>
			<span class="ml-4"><img src="asset/img/calander.png" alt="calander"></span>
		</button>
		<button class="common-btn" data-toggle="modal" data-target="#exportData">Export</button>
	</div>
</section><!-- heading-bx -->

<section class="activity-sec">
	<div class="backup-log-bx h-100">
		<div class="heading-dv">
			<div class="left">
				<a href="acitivity.php" class="fn common-btn">Recent Activity</a>
				<a href="acitivity-backup.php" class="fn">Backup logs</a>
			</div>
			<div class="right">
				<span>Time</span>
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

	<div class="pagination-bx">
		<ul>
			<li><a href="#">1</a></li>
			<li class="active"><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>
	</div>
</section><!-- sec -->

<?php include_once('footer.php'); ?>