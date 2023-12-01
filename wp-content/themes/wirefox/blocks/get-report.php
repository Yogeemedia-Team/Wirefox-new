<div class="row_padding_left row_padding_right report_form">
    <div id="div_block-392-98" class="ct-div-block slide-up aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="50">
        <h5 id="text_block-393-98" class="ct-text-block"><?php the_field('form_title'); ?></h5>
        <div><?php the_field('form_description'); ?></div>

        <form id="yourForm">
            <div class="form-group">
                <!-- <label for="inpWebsite">Website URL:</label> -->
                <input type="text" placeholder="Enter Website URL" id="inpWebsite" name="website">
                <span id="websiteError" style="color: white;"></span>
            </div>

            <div class="form-group">
                <!-- <label for="result_FirstName">First Name:</label> -->
                <input type="text" placeholder="First Name" id="result_FirstName" name="FirstName">
                <span id="firstNameError" style="color: white;"></span>
            </div>
            <div class="form-group">
                <!-- <label for="result_LastName">Last Name:</label> -->
                <input type="text" placeholder="Last Name" id="result_LastName" name="LastName">
                <span id="lastNameError" style="color: white;"></span>
            </div>

            <div class="form-group">
                <!-- <label for="result_email">Email:</label> -->
                <input type="email" placeholder="Email" id="result_email" name="email">
                <span id="emailError" style="color: white;"></span>
            </div>

            <div class="form-group">
                <!-- <label for="result_phone">Phone:</label> -->
                <input type="text" placeholder="Phone" id="result_phone" name="phone">
                <span id="phoneError" style="color: white;"></span>
            </div>

            <!-- <label for="result_CustomField">Custom Field:</label> -->
            <!-- <input type="text" id="result_CustomField" name="customfield"> -->

            <div class="form-group">
                <div class="row">
                    <div class="col-auto my-auto">
                        <input style="width:20px;" class="my-auto" type="checkbox" id="AgreeOpt1" name="checkbox">
                    </div>
                    <div class="col my-auto">
                    <p class="mb-1">
                    I accept that <a class="link" target="_blank" href="terms-and-conditions">Terms & Conditions</a> will apply for this service.
                    </p>
                    </div>
                </div>
                <span id="checkboxError" style="color: white;"></span>
            </div>

            <button class="check_btn" type="button" id="check_btn">GET MY REPORT</button>
        </form>
        <div id="showsuccess"></div>
        <div id="showdanger"></div>
    </div>
</div>