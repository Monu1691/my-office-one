<?php include_once('header.php'); ?>

<section class="dash-heading-bx">
	<div class="title-dv">
		<div class="title">Notes</div>
		<nav aria-label="breadcrumb" class="breadcrumb-bx">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">myOffice</a></li>
				<li class="breadcrumb-item active" aria-current="page">Notes</li>
			</ul>
		</nav>
	</div>
	<div class="link-dv">
		<button class="common-btn">Add New folder</button>
		<button class="common-btn" data-toggle="modal" data-target="#exportData">Export</button>
	</div>
</section><!-- heading-bx -->

<section class="data-main-sec">
	<aside class="data-sidebar">
		<div class="titl-bx">
			<div>Notes</div>
			<div><button class="srch-tog"><img src="asset/img/search-icon.png" alt="Search"></button></div>
		</div>

		<div class="data-list">
			<ul>
				<li><span>Jenifer Smith</span></li>
				<li class="active">
					<span>Stephanie Johnson</span>
				</li>
				<li><span>Vielka Jones</span></li>
				<li><span>Jenifer Smith</span></li>
				<li><span>Vielka Jones</span></li>
			</ul>
		</div>
	</aside>

	<section class="data-content-bx">
		<div class="notes-content-sec">
			<div class="note-list">
				<ul>
					<li class="active"><a href="#">My Notes</a></li>
					<li><a href="#">Old Notes</a></li>
				</ul>
			</div><!-- note-list -->

			<div class="notes-content">
				<div class="notes-data mb-5">
					<ul>
						<li>My aim is to complete my assignment by Monday.</li>
						<li>Meeting with John & Sons LLC on Tuesday</li>
						<li>My temperory password for xyz.com: MsHYG(Hpyb(&b*)y)N change it!</li>
					</ul>
				</div>

				<div class="notes-data mb-5">
					<ul>
						<li>My aim is to complete my assignment by Monday.</li>
						<li>Meeting with John & Sons LLC on Tuesday</li>
						<li>My temperory password for xyz.com: MsHYG(Hpyb(&b*)y)N change it!</li>
					</ul>
				</div>

				<div class="notes-data mb-5">
					<ul>
						<li>My aim is to complete my assignment by Monday.</li>
						<li>Meeting with John & Sons LLC on Tuesday</li>
						<li>My temperory password for xyz.com: MsHYG(Hpyb(&b*)y)N change it!</li>
					</ul>
				</div>
			</div><!-- notes-content -->
		</div>
	</section>
</section><!-- data-main-sec -->

<?php include_once('footer.php'); ?>