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

    <form id="yourFormId">
        <!-- Form fields -->
        <label for="inpWebsite">Website URL:</label>
        <input type="text" id="inpWebsite" name="inpWebsite">

        <label for="result_FirstName">First Name:</label>
        <input type="text" id="result_FirstName" name="result_FirstName">

        <label for="result_LastName">Last Name:</label>
        <input type="text" id="result_LastName" name="result_LastName">

        <label for="result_email">Email:</label>
        <input type="email" id="result_email" name="result_email">

        <label for="result_phone">Phone:</label>
        <input type="tel" id="result_phone" name="result_phone">

        <label for="result_CustomField">Custom Field:</label>
        <input type="text" id="result_CustomField" name="result_CustomField">

        <input type="checkbox" id="AgreeOpt1" name="AgreeOpt1"> Agree to terms

        <!-- Button to trigger form validation -->
        <button type="button" id="check_btn">Submit</button>
    </form>
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
		<?php echo do_shortcode('[contact-form-7 id="a6b98fa" title="Contact form"]');?>
	</div>
</div>





<script type="text/javascript">
        $('#showsuccess').hide();
        $('#showdanger').hide();
        /* Please add these script at the end of code for form validation */
        $("#check_btn").on('click', function(e) {
            e.preventDefault();
			
            var website_name = $("#inpWebsite").val();
            var FirstName = $("#result_FirstName").val();
            var LastName = $("#result_LastName").val();
            var email = $("#result_email").val();
            var phone = $("#result_phone").val();
            var customfield = $("#result_CustomField").val();


            if ($('#AgreeOpt1').prop("checked") == true) {
                var checkbox = true;
            } else if ($('#AgreeOpt1').prop("checked") == false) {
                var checkbox = false;
            }

            function ValidateEmail(email) {
                var expr =
                    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
                return expr.test(email);
            };

            function isUrl(s) {
                var regexp = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi
                return regexp.test(s);
            }

            if (website_name == '' && document.getElementById("inpWebsite")) {

                $('#p').html('');
                $('#textdanger').html('Enter Website url');
                $('#textdanger').css('color', 'red');
                return false;
            } else if (isUrl(website_name) == false && document.getElementById("inpWebsite")) {
                $('#textdanger').html('');
                $('#textdanger').html('Enter Website url with http/https');
                $('#textdanger').css('color', 'red');
                return false;
            } else if (checkbox == false && document.getElementById("AgreeOpt1")) {
                $('#textdanger').html('');
                $('#textdanger').html('Select Checkbox');
                $('#textdanger').css('color', 'red');
                return false;
            }
            
    
        else {
            $('#textdanger').html('');
            var senddata = {
                'website': website_name,
                'FirstName': FirstName,
                'LastName': LastName,
                'email': email,
                'phone': phone,
                'customfield': customfield,
                'checkbox': checkbox,
                'iframeCode': 'IMC8gE',
                'webPageURL': window.location.href
            }
			
            $.ajax({
                type: 'post',
                data: senddata,
                url: 'https://app.serpwizz.com/add-lead',
                crossDomain: true,
                success: function(data) {
                    var jsondata = $.parseJSON(data)
                    if (jsondata.status == 'YES') {
                        if (jsondata.getAction == '1') {
                            var url =
                                "https://seoaudit.wirefox.co.uk/IMC8gE-" +
                                jsondata.insert_id + "/" + jsondata.auditurl;
                            window.open(url);

                        } else if (jsondata.getAction == '2') {

                            $('.formhide').hide();
                            $('#showsuccess').css('display', 'block');
                            $('#showsuccess').html(' Thank you for the filled form we will contact as soon as possible');

                        } else if (jsondata.getAction == '3') {
                            window.open(jsondata.redurl, "_self");
                        } else {

                            $('.formhide').hide();
                            $('#showdanger').css('display', 'block');
                            $('#showdanger').html('Contact to support');

                        }

                    } else if (jsondata.status == 'NOT') {
                        $('.formhide').hide();
                        $('#showdanger').css('display', 'block');
                        $('#showdanger').html('The website URL you have entered is not responding. Please confirm that the URL you have entered is correct, and that the website is actually loading at this address in your browser.');

                    } else {
                        $('.formhide').hide();
                        $('#showdanger').css('display', 'block');
                        $('#showdanger').html('Something is Wrong .. !!');

                    }
                }
            })
        }
    

        });

        $("#result_phone").keyup(function() {
            this.value = this.value.replace(/[^0-9\.+() ]/, '');
        });
    </script>
<?php

get_footer();
