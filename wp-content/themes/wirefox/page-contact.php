<?php
/* 
Template Name: Contact
*/
get_header();
?>
<!-- Top section -->
<div class="row row_padding_left row_padding_right row_padding_top row_padding_bottom">
	<div class="col-md-7 my-auto">
		<div class="py-5 p-md-0 pe-md-5 mt-4 mt-md-0">
			<h5 class="mini-h">Like What You See</h5>
			<h1 class="title">Get In Touch</h1>
			<p>How Can We Help You?</p>
		</div>
	</div>
	<div class="col-md-5">
		<div class="overflow-hidden">
			<img class="fifty-fifty-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-us.jpg" alt="" />
		</div>
	</div>
</div>
<!-- Top section -->

<!-- contact details Section -->
<div class="row row_padding_left row_padding_right row_padding_top row_padding_bottom contact_box">
	<div class="row contact-details">
		<div class="col-md-12 col-lg-4">
			<div class="single_box bg-black p-5 mx-lg-5">
				<h3 class="title">Birmingham</h3>
				<p>Suite 2A, Blackthorn House<br />
					St Paul’s Square
					<br>
					Birmingham<br />
					B3 1RL
				</p>

				<p><a href="mailto:br@wirefox.co.uk">br@wirefox.co.uk</a></p>
				<p>Tel: <a href="tel:01213680098">0121 368 0098</a></p>
				<div class="mt-5 mb-3">
					<a href="#" class="contact-btn">GET DIRECTIONS</a>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4">
			<div class="single_box bg-black p-5 mx-lg-5">
				<h3 class="title">Coventry</h3>
				<p>584 Kenilworth Road
					<br>
					Balsall Common
					<br>
					Coventry
					<br>
					CV7 7DQ
				</p>

				<p><a href="mailto:co@wirefox.co.uk">co@wirefox.co.uk</a></p>
				<p>Tel: <a href="tel:08455442655">0845 544 2655</a></p>
				<div class="mt-5 mb-3">
					<a href="#" class="contact-btn">GET DIRECTIONS</a>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4">
			<div class="single_box bg-black p-5 mx-lg-5">
				<h3 class="title">Leicester</h3>
				<p>32 DeMontfort Street,
					<br>
					Leicester
					<br>
					LEI 7GD
					<br><br>
				</p>

				<p><a href="mailto:le@wirefox.co.uk">le@wirefox.co.uk</a></p>
				<p>Tel: <a href="tel:05603673659">056 0367 3659</a></p>
				<div class="mt-5 mb-3">
					<a href="#" class="contact-btn">GET DIRECTIONS</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact details Section -->


<div class="row row_padding_left row_padding_right row_padding_top row_padding_bottom">
	<div class="contact-text-area">
		<h4 class="title text-capitalize">We would love to hear about your project</h4>
		<div class="row">
			<div class="col-lg-6">
				<p>If you would like to arrange a meeting to discuss a potential project or have any queries
					that you think we could help with, please give us a call 0121 368 0098 or use the contact
					form on this page.</p>
			</div>
		</div>
	</div>
	<div class="mt-5" id="contact-form">
		<form>
			<input type="text" name="" placeholder="Name" />
			<input type="email" name="" placeholder="Email" />
			<input type="text" name="" placeholder="Contact number" />
			<input type="email" name="" placeholder="COMPANY / ORGANISATION" />
			<input type="text" name="" placeholder="YOUR URL" />
			<input type="text" name="" placeholder="HOW DID YOU HEAR ABOUT US?" />
			<textarea placeholder="HOW DID YOU HEAR ABOUT US?"></textarea>
			<input class="sub_btn" type="submit" name="" value="SEND YOUR ENQUIRY" />
		</form>
	</div>
</div>






<?php
get_footer();
