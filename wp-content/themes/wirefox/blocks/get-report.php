

<div id="div_block-392-98" class="ct-div-block slide-up aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="50">
<h5 id="text_block-393-98" class="ct-text-block"><?php the_field('form_title');?></h5>
<div><?php the_field('form_description');?></div>

      <form id="yourForm">
        <label for="inpWebsite">Website URL:</label>
        <span id="websiteError" style="color: white;"></span>
        <input type="text" id="inpWebsite" name="website">
        

        <label for="result_FirstName">First Name:</label>
        <span id="firstNameError" style="color: white;"></span>
        <input type="text" id="result_FirstName" name="FirstName">
        

        <label for="result_LastName">Last Name:</label>
        <span id="lastNameError" style="color: white;"></span>
        <input type="text" id="result_LastName" name="LastName">
        

        <label for="result_email">Email:</label>
        <span id="emailError" style="color: white;"></span>
        <input type="email" id="result_email" name="email">
        

        <label for="result_phone">Phone:</label>
        <span id="phoneError" style="color: white;"></span>
        <input type="text" id="result_phone" name="phone">
        

        <label for="result_CustomField">Custom Field:</label>
        <input type="text" id="result_CustomField" name="customfield">

        <label>
            <input type="checkbox" id="AgreeOpt1" name="checkbox"> Agree to terms and conditions
        </label>
        <span id="checkboxError" style="color: white;"></span>

        <button type="button" id="check_btn">Submit</button>
    </form>
    <div id="showsuccess"></div>
    <div id="showdanger"></div>
</div>



    <script type="text/javascript">
        $('#showsuccess').hide();
        $('#showdanger').hide();
        /* Please add these script at the end of code for form validation */
$(document).ready(function () {
    $('#showsuccess').hide();
    $('#showdanger').hide();

    $("#check_btn").on('click', function (e) {
        e.preventDefault();

        var website_name = $("#inpWebsite").val();
        var FirstName = $("#result_FirstName").val();
        var LastName = $("#result_LastName").val();
        var email = $("#result_email").val();
        var phone = $("#result_phone").val();
        var customfield = $("#result_CustomField").val();

        // Clear previous error messages
        $('#websiteError').html('');
        $('#firstNameError').html('');
        $('#lastNameError').html('');
        $('#emailError').html('');
        $('#phoneError').html('');
        $('#checkboxError').html('');

        // Validation for Website URL
        if (website_name == '' && document.getElementById("inpWebsite")) {
            $('#websiteError').html('Enter Website URL');
            return false;
        } else if (!isUrl(website_name) && document.getElementById("inpWebsite")) {
            $('#websiteError').html('Enter Website URL with http/https');
            return false;
        }

        // Validation for First Name
        if (FirstName == '') {
            $('#firstNameError').html('Enter First Name');
            return false;
        }

        // Validation for Last Name
        if (LastName == '') {
            $('#lastNameError').html('Enter Last Name');
            return false;
        }

        // Validation for Email
        if (email == '' || !ValidateEmail(email)) {
            $('#emailError').html('Enter a valid Email address');
            return false;
        }

        // Validation for Phone
        if (phone == '') {
            $('#phoneError').html('Enter Phone number');
            return false;
        }

        // Validation for Checkbox
        var checkbox = $('#AgreeOpt1').prop("checked");
        if (!checkbox && document.getElementById("AgreeOpt1")) {
            $('#checkboxError').html('Select Checkbox');
            return false;
        }

        // Continue with form submission logic...
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
            success: function (data) {
                var jsondata = $.parseJSON(data);
                if (jsondata.status == 'YES') {
                    if (jsondata.getAction == '1') {
                        var url = "https://seoaudit.wirefox.co.uk/IMC8gE-" + jsondata.insert_id + "/" + jsondata.auditurl;
                        window.open(url);
                    } else if (jsondata.getAction == '2') {
                        $('.formhide').hide();
                        $('#showsuccess').css('display', 'block').html('Thank you for the filled form. We will contact you as soon as possible.');
                    } else if (jsondata.getAction == '3') {
                        window.open(jsondata.redurl, "_self");
                    } else {
                        $('.formhide').hide();
                        $('#showdanger').css('display', 'block').html('Contact support');
                    }
                } else if (jsondata.status == 'NOT') {
                    $('.formhide').hide();
                    $('#showdanger').css('display', 'block').html('The website URL you have entered is not responding. Please confirm that the URL you have entered is correct, and that the website is actually loading at this address in your browser.');
                } else {
                    $('.formhide').hide();
                    $('#showdanger').css('display', 'block').html('Something went wrong. Please try again.');
                }
            },
            error: function () {
                $('.formhide').hide();
                $('#showdanger').css('display', 'block').html('An error occurred during the form submission. Please try again later.');
            }
        });
    });

    $("#result_phone").keyup(function () {
        this.value = this.value.replace(/[^0-9\.+() ]/, '');
    });

    function isUrl(s) {
        var regexp = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi;
        return regexp.test(s);
    }

    function ValidateEmail(email) {
        var expr = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        return expr.test(email);
    }
});

    </script>