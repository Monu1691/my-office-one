<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Office</title>

	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.css">

	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.js"></script>
</head>
<body>
	<section id="wrapper">
		<?php include_once('dash-header.php'); ?>

		<section class="dash-panel-sec mt-3 note-dash-sec">
			<aside class="dash-sidebar">
				<section class="sidebar-links-bx">
					<ul>
						<li><a class="common-btn round-btn" href="javascript:void(0)">Add Note</a></li>
						<li><a href="#">My Notes</a></li>
						<li><a href="#">Old Notes</a></li>
					</ul>
				</section><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<section class="content-main-dv note-dash-cont">
					<div id="content-row">
						<div class="row">
							<div class="col-sm-8">
								<textarea class="form-control" id="code_preview0" name="" style="height: 300px;"></textarea>
							</div>
						</div>
					</div>
					<!-- Page - Content End -->
				</div>

				<script type="text/javascript">
					$(document).ready(function() {
						$('#code_preview0').summernote({height: 300});
					});
				</script>
			</section><!-- content-main-dv -->
		</section><!-- dash-content-box -->
	</section><!-- dash-panel-sec -->

</section><!-- wrapper -->
<script src="asset/js/custom.js"></script>
</body>
</html>