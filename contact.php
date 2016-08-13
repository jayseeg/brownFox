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
 <html>
 	<head>
	<meta charset="UTF-8">
 		<title>Abandon All Hope</title>
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="css/reset.css">
 		<link rel="stylesheet" href="css/main.css">
 		<link rel="stylesheet" href="css/layout.css">
 		<link rel="stylesheet" href="css/navigation.css">
 		<link rel="stylesheet" href="css/components.css">
 	</head>

<body>
<div class="container">
  <div class="row">
    <nav role="navigation">
      <span class="entypo-menu" id="toggle-menu"></span>
    <div class="logo">
      <span class="entypo-s"></span>Tom Hagerman
    </div>
      <ul>
        <li><a href="bio.php">About</a></li>
        <li ><a href="store.php">Store</a>
        </li>
        <li><a href="shows.php">Shows</a></li>
        <li><a href="media.php">Media</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="index.html">Home</a></li>
      </ul>
    </nav>
  </div>
  <div class="media-wrapper">


<form action="contact.php" method="post">
<p> Name: *</p>
<input type="text" name="contactName" maxlength="50" required/> <br/>
<p> Email for Reply: </p>
<input type="email" name="contactEmail" maxlength="50"/><br/>
<p> Subject:* </p>
<input type="text" name="subject" maxlength="50" required/><br/>
<p> Message:* </p>
<textarea type="text" name="message" cols="40" rows="6" required></textarea><br/>
<input type="submit" name="formSubmit"/><br/>
</form>
    </div>
</body>
</html>
