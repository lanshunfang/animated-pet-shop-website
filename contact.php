<?php include "inc/header.php";?>
<div class="contactus">
<div class="contactpic"><img src="public/img/dogs3.jpg"></div>
<form action="./control2.php" id="formContact">
<h1>Contact <span>Us</span></h1>
<fieldset>
	<legend>
Contact us
	</legend>

<label>
Name
<br>
<input type="text" name="contactname" autocomplete autofocus placeholder="Name" required class="contactname">
</label>
<br>

<label>
Email Address
<br>
<input type="email" name="contactemail" autocomplete autofocus placeholder="Email Address" required class="contactemail">
</label>
<br>

<label>
Address
<br>
<input type="text" name="contactadress" autocomplete autofocus placeholder="Address" required class="contactaddress">
</label>
<br>

<label>
Comments
</label>
<br>
<textarea name="comments" class="comments" rows="15" type="text"  placeholder="Enter your comments here..." required ></textarea>
<br>
<button type="submit" class="contactbutton" >Submit</button>
			<br />&nbsp;<br />
			<span style="font-size:12px;">We respect your privacy and will not share your email with a 3rd party.</span>
</fieldset>
</form>






</div>


<?php include "inc/footer.php";?>




