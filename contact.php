<?php
setlocale(LC_CTYPE, "en_US.UTF-8");
if($_POST['formSubmit'] == "Submit")
{
	if ($_POST['contactName']) $name=htmlentities($_POST['contactName']); //Need to sanitize input here
	else $name = htmlentities("(No name given)"); //Also cmd escape this
	if ($_POST['contactEmail']) $email=htmlentities($_POST['contactEmail']); //Need to sanitize input here
        else $email = "";
	if ($_POST['subject']) $subject=htmlentities($_POST['subject']); //Need to sanitize input here
        else $subject = htmlentities("(No subject given)"); //Also cmd escape this
	if ($_POST['message']) $message=htmlentities($_POST['message']); //Need to sanitize input here
        else $message = htmlentities("(No message given)"); //Also cmd escape this
	exec("echo \"From: " . escapeshellarg($name) . ", " . escapeshellarg($email) . "\\nMessage:\\n" . escapeshellarg($message) . "\" | mail -s \"Contact Request from " . escapeshellarg($name) . ": Subject: " . escapeshellarg($subject) . "\" connor.bray.ricks@gmail.com");
	header("Location: /staging/a.txt");
        exit;
}
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Contact Tom Hagerman</title>
</head>

<body>
<form action="contact.php" method="post">
<p> Name: *</p>
<input type="text" name="contactName" maxlength="50" required/> <br/>
<p> Email for Reply: </p>
<input type="email" name="contactEmail" maxlength="50"/><br/>
<p> Subject:* </p>
<input type="text" name="subject" maxlength="50" required/><br/>
<p> Message:* </p>
<textarea type="text" name="message" required></textarea><br/>
<input type="submit" name="formSubmit"/><br/>
</form>
</body>
</html>
