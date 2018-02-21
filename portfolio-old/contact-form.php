<?php include 'includes/header.php';?>

    <center><br><h2>Contact Me</h2></center>

    <form method="POST" name="contactform" action="contact-form.php">
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
        <center><input type="submit" name ="submit" value="Submit"><br></center>
    </form>

<script language="JavaScript">
    var frmvalidator  = new Validator("contactform");
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("email","req","Please provide your email");
    frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>
<?php
if (isset($_POST['submit']))
{
    $errors = '';
    $myemail = 'anthonyafonin@gmail.com';//<-----Put Your email address here.
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

<?php include 'includes/footer.php';?>
