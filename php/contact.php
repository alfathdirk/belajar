<?php include("include/header.php"); ?>

	<div id="body" class="clearfix">
		<div id="content-global" class="clearfix">
		
			<div class="breadcumbs"><a href="#">Home</a> &bull; Contact US</div>

			<h2>Contact <span>Us</span></h2>
			
				<div class="form-voice">
					<form action="thank-contact.php" method="post" class="jqtransform">

							<fieldset>
								<label for="name-contact">Name</label>
								<input type="text" id="name-contact" name="name-contact">
								
								</fieldset>
								
								<fieldset>
									<label for="email-contact">Email</label>
									<input type="email" id="email-contact" name="email-contact">
								</fieldset>
								
								<fieldset>
									<label for="phone-contact">Phone Number</label>
									<input type="text" id="phone-contact" name="phone-contact">
								</fieldset>
								
								<fieldset>
									<label for="comment-contact">Comment</label>
									<textarea name="comment-contact" id="comment-contact"></textarea>
								</fieldset>
								
								<fieldset>
									<input id="submit-contact" name="submit-contact" type="submit" value="Submit">
								</fieldset>

					</form>
				</div>
		
		</div>
	</div>

<?php include("include/footer.php"); ?>















