

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


