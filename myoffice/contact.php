

<?php include_once('header.php'); ?>

<section class="common-sec contact-sec">
	<div class="container">
		<h2 class="entry-title text-center">Contact</h2>

		<h3 class="text-center">We'd love to hear from you. <br>
		Just fill out the form below and we'll get back to you soon.</h3>
		
		<div class="row">
			<div class="col-lg-6 mt-5">
				<div class="contact-info">
					<div class="c-dv mb-5">
						<div class="icon">
							<img src="asset/img/call.png" alt="Icon">
						</div>
						<div class="entry-txt">
							<div class="heading">Telephone</div>
							<p class="txt"><a href="tel:+1 9988 765 567">+1 9988 765 567</a></p>
						</div>
					</div><!-- c-dv -->

					<div class="c-dv mb-5">
						<div class="icon">
							<img src="asset/img/mail.png" alt="Icon">
						</div>
						<div class="entry-txt">
							<div class="heading">Email</div>
							<p class="txt"><a href="mailto:info@myoffice.com">info@myoffice.com</a></p>
						</div>
					</div><!-- c-dv -->

					<div class="c-dv mb-5">
						<div class="icon">
							<img src="asset/img/location.png" alt="Icon">
						</div>
						<div class="entry-txt">
							<div class="heading">Address</div>
							<p class="txt">8931 Sugar St. Macomb, MI 48042</p>
						</div>
					</div><!-- c-dv -->
				</div><!-- contact-info -->
			</div><!-- col -->

			<div class="col-lg-6 mt-5">
				<div class="contact-from-bx">
					<form action="">
						<div class="row m-0">
							<div class="col-md-6 p-0">
								<div class="input-bx">
									<label>Name</label>
									<input type="text" name="c_name" id="c_name" class="form-control">
								</div>
							</div><!-- col -->
							<div class="col-md-6 p-0">
								<div class="input-bx email-input-bx">
									<label>Email</label>
									<input type="email" name="c_email" id="c_email" class="form-control">
								</div>
							</div><!-- col -->
						</div><!-- col -->

						<div class="input-bx msg-input-bx">
							<label>Message</label>
							<textarea name="c_message" id="c_message" rows="5" class="form-control" spellcheck="false"></textarea>
						</div>
						<div class="link text-right mt-3">
							<button class="common-btn" type="submit">Send</button>
						</div>
					</form>
				</div><!-- contact-from-bx -->
				
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- common-sec -->

<?php include_once('footer.php'); ?>