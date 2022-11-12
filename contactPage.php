<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
require(getRelativePath(__DIR__,ROOTPATH).'php/featureContent.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
// echo '<h1>contact</h1>';
if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $mailFrom=$_POST['mail'];
        $message=$_POST['message'];
        
        $mailTo = "abalone_@hotmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You received a message from ".$name."\n".$message;
        mail($mailTo,$subject,$txt,$headers);
        header("Location: contactPage.php?mailsend");
    }
?>

<div class="feedback-card">
  <div class="feedback-header">
    GET IN TOUCH
  </div>
  <form class="feedback-body" action="contactPage.php" method="post">
    <input type="text" name="name" class="feedback-body__email" placeholder="Full Name"/>
    <input type="email" name="mail" class="feedback-body__email" placeholder="Email" />
    <input  type="text" name="subject" class="feedback-body__email"  placeholder="Subject"/>
    <textarea type="text" name="message" class="feedback-body__message" placeholder="Message"></textarea>
    <button type="submit" name="submit" class="feedback-body__submit">SEND</button>
  </form>
</div>

<div class="form-container">
		<form name="frmContact" id="" frmContact"" method="post" action=""
			enctype="multipart/form-data" onsubmit="return validateContactForm()">

			<div class="input-row">
				<label style="padding-top: 20px;">Name</label> <span
					id="userName-info" class="info"></span><br /> <input type="text"
					class="input-field" name="userName" id="userName" />
			</div>
			<div class="input-row">
				<label>Email</label> <span id="userEmail-info" class="info"></span><br />
				<input type="text" class="input-field" name="userEmail"
					id="userEmail" />
			</div>
			<div class="input-row">
				<label>Subject</label> <span id="subject-info" class="info"></span><br />
				<input type="text" class="input-field" name="subject" id="subject" />
			</div>
			<div class="input-row">
				<label>Message</label> <span id="userMessage-info" class="info"></span><br />
				<textarea name="content" id="content" class="input-field" cols="60"
					rows="6"></textarea>
			</div>
			<div>
				<input type="submit" name="send" class="btn-submit" value="Send" />

				<div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"
		type="text/javascript"></script>

<?php
footerObject(__FILE__);
?>
<style>
input,
button,
textarea {
  border: 1px solid rgb(0, 0, 0);
  background-image: none;
  box-shadow: none;
  padding: 5px;
}
input:focus,
button:focus,
textarea:focus {
  outline: none;
}
textarea {
  min-height: 50px;
  resize: vertical;
}
button {
  cursor: pointer;
  font-weight: 500;
}
.feedback-card {
  border: 1px solid black;
  max-width: 980px;
  margin: 0 auto;
  box-shadow: -0.6rem 0.6rem 0 rgba(29, 30, 28, 0.26);
}
.feedback-header {
  text-align: center;
  padding: 8px;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid black;
}
.feedback-body {
  padding: 20px;
  display: flex;
  flex-direction: column;
}
.feedback-body__message {
  margin-top: 10px;
}
.feedback-body button {
  margin-top: 10px;
  align-self: flex-end;
}
.feedback-body__email{
    margin-top: 2px;
}
</style>