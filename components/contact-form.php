<script src="/js/gen_validatorv31.js" type="text/javascript"></script>

<!-- Banner Text -->
<div class="img-header">
    <div class="header-text">
        <h1>Contact Me</h1>
    </div>
</div>
<div class="col-md-12">
<form method="POST" name="contactform" action="components/contact-form.php">
    <p>
    	<label for='name'>Your Name:</label>
    	<input type="text" name="name">
    </p>
    <p>
    	<label for='email'>Email Address:</label>
    	<input type="text" name="email">
    </p>
    <p>
    	<label for='message'>Message:</label>
    	<textarea name="message"></textarea>
    </p>
    <input type="submit" name ="submit" value="Submit">
</form>
</div>

<script language="JavaScript">
    var frmvalidator  = new Validator("contactform");
    frmvalidator.addValidation("name","req","Please enter your name");
    frmvalidator.addValidation("email","req","Please enter your email address");
    frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>
<?php
if (isset($_POST['submit']))
{
    $errors = '';
    $myemail = 'anthonyafonin@gmail.com';
    if(empty($_POST['name'])  ||
       empty($_POST['email']) ||
       empty($_POST['message']))
    {
        $errors .= "\n Error: all fields are required";
    }

    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];

    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }

    if( empty($errors))
    {
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";

        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email_address";

        mail($to,$email_subject,$email_body,$headers);
        echo '<script type="text/javascript">alert("Email Sent");</script>';
    }
    else
        echo '<script type="text/javascript">alert("' . $errors . '");</script>';
}
?>
