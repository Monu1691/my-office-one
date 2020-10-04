<?php include_once('header.php'); ?>

<section class="dash-heading-bx">
	<div class="title-dv">
		<div class="title">Contact</div>
		<nav aria-label="breadcrumb" class="breadcrumb-bx">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">myOffice</a></li>
				<li class="breadcrumb-item active" aria-current="page">Contact</li>
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
			<div>Folders</div>
			<div><button class="srch-tog"><img src="asset/img/search-icon.png" alt="Search"></button></div>
		</div>

		<div class="data-list">
			<ul>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Vendor</span>
				</li>
				<li class="active">
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Customer</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Buyer</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Archived</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Customer</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Folder name 1</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Folder name 2</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Folder name 3</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Folder name 4</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Folder name 5</span>
				</li>
			</ul>
		</div>
	</aside>

	<section class="data-content-bx">
		<div class="heading-dv">
			<div class="left">
				<a href="contacts.php" class="fn">Assign Permission</a>
				<a href="contacts-view.php" class="fn common-btn">View</a>
			</div>
			<div class="right">
				<a href="#" class="gray-btn">Edit</a>
				<a href="#" class="gray-btn">Delete</a>
			</div>
		</div>

		<table class="custom-table2 mt-5">
			<thead>
				<tr>
					<td>Name</td>
					<td>Company</td>
					<td>Email</td>
					<td>Mobile Number</td>
					<td>Phone Number</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="name">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith</span>		
						</div>
					</td>
					<td><div class="cmp">Sed Dolor Fusce Company</div></td>
					<td><div class="eml"><a href="#">quisque@accums.net</a></div></td>
					<td><div class="mnm">(671) 572-5640	</div></td>
					<td><div class="pnm">(474) 764-1174</div></td>
				</tr>
				<tr>
					<td>
						<div class="name">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith</span>		
						</div>
					</td>
					<td><div class="cmp">Sed Dolor Fusce Company</div></td>
					<td><div class="eml"><a href="#">quisque@accums.net</a></div></td>
					<td><div class="mnm">(671) 572-5640	</div></td>
					<td><div class="pnm">(474) 764-1174</div></td>
				</tr>
				<tr>
					<td>
						<div class="name">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith</span>		
						</div>
					</td>
					<td><div class="cmp">Sed Dolor Fusce Company</div></td>
					<td><div class="eml"><a href="#">quisque@accums.net</a></div></td>
					<td><div class="mnm">(671) 572-5640	</div></td>
					<td><div class="pnm">(474) 764-1174</div></td>
				</tr>
				<tr>
					<td>
						<div class="name">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith</span>		
						</div>
					</td>
					<td><div class="cmp">Sed Dolor Fusce Company</div></td>
					<td><div class="eml"><a href="#">quisque@accums.net</a></div></td>
					<td><div class="mnm">(671) 572-5640	</div></td>
					<td><div class="pnm">(474) 764-1174</div></td>
				</tr>
				<tr>
					<td>
						<div class="name">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith</span>		
						</div>
					</td>
					<td><div class="cmp">Sed Dolor Fusce Company</div></td>
					<td><div class="eml"><a href="#">quisque@accums.net</a></div></td>
					<td><div class="mnm">(671) 572-5640	</div></td>
					<td><div class="pnm">(474) 764-1174</div></td>
				</tr>
				<tr>
					<td>
						<div class="name">
							<span class="icon">S</span>
							<span class="txt">Jenifer Smith</span>		
						</div>
					</td>
					<td><div class="cmp">Sed Dolor Fusce Company</div></td>
					<td><div class="eml"><a href="#">quisque@accums.net</a></div></td>
					<td><div class="mnm">(671) 572-5640	</div></td>
					<td><div class="pnm">(474) 764-1174</div></td>
				</tr>
			</tbody>
		</table>

	</section>
</section><!-- heading-bx -->

<?php include_once('footer.php'); ?>