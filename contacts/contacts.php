<?PHP
 require_once("../include/fgcontactform-min.php");require_once("../include/simple-captcha-min.php");$formproc=new FGContactForm();$sim_captcha=new FGSimpleCaptcha('scaptcha');$formproc->EnableCaptcha($sim_captcha);$formproc->AddRecipient('ed@ed-hatrick-smith.com');$formproc->SetFormRandomKey('3I99tSt4ympAJtq');if(isset($_POST['submitted'])){if($formproc->ProcessForm()){$formproc->RedirectToURL("message-sent.php");}}?>
<!doctype html><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><title>Ed Hatrick Smith - Contact Me</title><meta name="description" content="Ed Hatrick-Smith: contact information "/><meta name="keywords" content="web developer, desginer, photographer, awesome person, solutions"/><meta name="author" content="Edward Hatrick-Smith: ed.hatricksmith@gmail.com"/><link rel="stylesheet" type="text/css" href="/css/styles.contacts.min.css"/><?php $thisPage="contacts";?><script type='text/javascript' src='/scripts/gen_validatorv31-min.js'></script><?php include_once("/home/akolob/public_html/analyticstracking.php") ?></head><body><?php include("/home/akolob/public_html/header.php");?><div id="contacts"><article><form id='contactus' action='<?php echo $formproc->GetSelfScript();?>' method='post' accept-charset='UTF-8'><fieldset><legend>Send me a message:</legend><input type='hidden' name='submitted' id='submitted' value='1'/><input type='hidden' name='<?php echo $formproc->GetFormIDInputName();?>' value='<?php echo $formproc->GetFormIDInputValue();?>'/><input type='text' class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName();?>'/><span class='short_explanation'>* required fields</span><div><span class='error'><?php echo $formproc->GetErrorMessage();?></span></div><div class='container'><label for='name' >Your Full Name:* </label><br/><input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50"/><br/><span id='contactus_name_errorloc' class='error'></span></div><div class='container'><label for='email' >Email Address:*</label>
          <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50"/>
          <br/><br/><span id='contactus_email_errorloc' class='error'></span></div><div class='container'><label for='phone' >Phone Number:</label><br/><input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15"/><br/><span id='contactus_phone_errorloc' class='error'></span></div><div class='container'><label for='message' >Message:</label><br/><span id='contactus_message_errorloc' class='error'></span><textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea></div><fieldset id='antispam'><legend >Anti-spam question</legend><span class='short_explanation'>Please answer the following anti-spam question:</span><div class='container'><label for='scaptcha' ><?php echo $sim_captcha->GetSimpleCaptcha();?></label><input type='text' name='scaptcha' id='scaptcha' maxlength="10"/><br/><span id='contactus_scaptcha_errorloc' class='error'></span></div></fieldset><div class='container'><input type='submit' name='Submit' value='Submit'/></div></fieldset></form></article><aside><h2>Or you can get in touch with these:</h2><div class="contacts_block">
            <p><span class="bold">Phone:</span> (+64) 22 067 0953</p>
              <p><span class="bold">Email:</span><a href="mailto:ed.hatricksmith@gmail.com?subject=Hi%20Ed,%20I'd%20like%20to%20get%20in%20touch" target="_blank"> ed.hatricksmith@gmail.com</a></p><p><a href="http://nz.linkedin.com/pub/ed-hatrick-smith/15/391/133" target="_blank">LinkedIn</a></p><p><a href="http://www.facebook.com/ed.hatricksmith" target="_blank">Facebook</a></p></div><section><h4>About this site</h4><p class="first">If you'd like to know more about how I built this site, you can take a look at <a href="/site-development-guide.php">this page</a> which gives a pretty good breakdown of some of the tools and plug-ins I used in development.</p><p>In the best nature of an open source internet I'm willing to share code snippets as well. Just drop me a message and I'll hook you up.</p></section></aside></div><div class="clearfix"></div><?php include("/home/akolob/public_html/footer.php");?>
<!-- client-side Form Validations:Uses the excellent form validation script from JavaScript-coder.com-->
<script type='text/javascript'>//<![CDATA[
var frmvalidator=new Validator("contactus");frmvalidator.EnableOnPageErrorDisplay();frmvalidator.EnableMsgsTogether();frmvalidator.addValidation("name","req","Please provide your name");frmvalidator.addValidation("email","req","Please provide your email address");frmvalidator.addValidation("email","email","Please provide a valid email address");frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");frmvalidator.addValidation("scaptcha","req","Please answer the anti-spam question");//]]></script></body></html>