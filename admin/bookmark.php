<?php include_once('header.php'); ?>

<section class="dash-heading-bx">
	<div class="title-dv">
		<div class="title">Bookmark</div>
		<nav aria-label="breadcrumb" class="breadcrumb-bx">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">myOffice</a></li>
				<li class="breadcrumb-item active" aria-current="page">Bookmark</li>
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
					<span>Bookmarks</span>
				</li>
				<li class="active">
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Bookmarks 2</span>
				</li>
				<li>
					<span class="chk">
						<input type="checkbox" id="check1">
					</span>
					<span>Others</span>
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
		<div class="event-dv">
			<a href="bookmark-folder.php" class="gray-btn">Assign Permission</a>
			<button class="gray-btn" data-toggle="modal" data-target="#assignPermission">Edit Permission</button>
			<button class="gray-btn">Delete Folder</button>
		</div>
		<div class="list-dv">
			<ul>
				<li>
					<span class="icon"><img src="asset/img/bing.png" alt="Icon"></span>
					Free Tools for Competitor Keyword Research | Search Engine Journal
				</li>
				<li>
					<span class="icon"><img src="asset/img/gmail.png" alt="Icon"></span>
					Make Money Blogging : @ProBlogger					
				</li>
				<li>
					<span class="icon"><img src="asset/img/gmail.png" alt="Icon"></span>
					SEO: The Free Beginner’s Guide From Moz				
				</li>
				<li>
					<span class="icon"><img src="asset/img/bing.png" alt="Icon"></span>
					Top Online Resources to Learn how to Make Money Online 			
				</li>
				<li>
					<span class="icon"><img src="asset/img/gmail.png" alt="Icon"></span>
					10 Tips to Get Adsense Account Approved for Your Blog or Website
				</li>
				<li>
					<span class="icon"><img src="asset/img/bing.png" alt="Icon"></span>
					Top 15 Websites to Calculate Your Website Worth | MCJOnline Blog				
				</li>
				<li>
					<span class="icon"><img src="asset/img/gmail.png" alt="Icon"></span>
					seo - How do you get your Google+ profile displayed in the right hand sidebar of the Google search results page
				</li>
				<li>
					<span class="icon"><img src="asset/img/bing.png" alt="Icon"></span>
					Easiest Way to Show Author Profile Picture in Google Search Results
				</li>
				<li>
					<span class="icon"><img src="asset/img/gmail.png" alt="Icon"></span>
					How To Display Author Profile Photo in Google Search Engine Results | Moon Tricks				
				</li>
			</ul>
		</div>
	</section>
</section><!-- heading-bx -->

<!-- Assign Permission Modal -->
<section class="modal fade custom-modal" id="assignPermission" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body text-center">
				<h3 class="modal-title mb-5">Assign Permission</h3>

				<table class="custom-table mt-5">
					<tbody>
						<tr>
							<td colspan="3" style="border-bottom: none;">
								<div class="chkBx">
									<span class="txt">Name</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Jenifer Smith</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Stephanie Johnson</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Vielka Jones</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Jenifer Smith</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Xerxes Brown</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Jenifer Smith</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Jenifer Smith</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Jenifer Smith</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">Edit</span>
								</div>
							</td>
							<td>
								<div class="chkBx">
									<span class="chk"><input type="checkbox" id="check1"></span>
									<span class="txt">View</span>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<button type="submit" class="common-btn mt-5" style="min-width: 150px;">Submit</button>

			</div><!-- modal-body -->
		</div>
	</div>
</section>
<!-- modal -->

<?php include_once('footer.php'); ?>