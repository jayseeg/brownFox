<?php
$newarray = unserialize(file_get_contents('storeVCtStSWW6JGEEpJRh5C4CvlLHAS8N1F8JcaSb3VNNtDaf9D4xuBGWk1nGJR674UnWw75VqHSbyucmymDkqBqORVZbq3cmO4PCCli59SeHIUU8JZIxtVV7pGx4NnuCGboPjd4Ebisy2h1XvmfX8b7pY2JRwCvCMnNpe4CsFnjcIs2rSBFHNGB7mLSDX05I454iPZVhDPNf6Q5CbXosGKhJDsc7oz9ODCaejpHVuf3YvJ.txt'));
if($_POST['formSubmit'] == "Submit")
{
	for ($j = $newarray->getSize()-1; $j >=0; $j--) {
		$newarray[$j] =htmlentities(nl2br($_POST["$j"]));
	}
	file_put_contents('storeVCtStSWW6JGEEpJRh5C4CvlLHAS8N1F8JcaSb3VNNtDaf9D4xuBGWk1nGJR674UnWw75VqHSbyucmymDkqBqORVZbq3cmO4PCCli59SeHIUU8JZIxtVV7pGx4NnuCGboPjd4Ebisy2h1XvmfX8b7pY2JRwCvCMnNpe4CsFnjcIs2rSBFHNGB7mLSDX05I454iPZVhDPNf6Q5CbXosGKhJDsc7oz9ODCaejpHVuf3YvJ.txt', serialize($newarray));
	header("Location: /staging/show.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>TESTING IN PROGRESS</title>
</head>
<body>

<h1>Testing form iteration</h1>

<form action="storechangeKymyOJJz7dGyize5mWNseLfJD67NlQs4cX1t1RhwUsdFiBk0mA99OWIBGoTqeicqYN9sbEsUgiODy26PB4ALTGWAWdDnTqBKE6kvY6HaUSbC8rcMhB3jR6OWyq1XulrPBTyLaC8zyIdCIOYSXcAiDmob2zD28pZpWUSMwwxHyYmFpqnVZrBtnDhAQ2ICqw3VgFRo4bH1xyBmfMHLe4yXeVxv5mGeytlXj0VYD.php" method="post">
<?php
$array = unserialize(file_get_contents('storeVCtStSWW6JGEEpJRh5C4CvlLHAS8N1F8JcaSb3VNNtDaf9D4xuBGWk1nGJR674UnWw75VqHSbyucmymDkqBqORVZbq3cmO4PCCli59SeHIUU8JZIxtVV7pGx4NnuCGboPjd4Ebisy2h1XvmfX8b7pY2JRwCvCMnNpe4CsFnjcIs2rSBFHNGB7mLSDX05I454iPZVhDPNf6Q5CbXosGKhJDsc7oz9ODCaejpHVuf3YvJ.txt'));
$i=$array->getSize()-1;
while($i>=0) {
if($array[$i]) {
?>
<textarea name="<?=$i?>"> <?= html_entity_decode($array[$i]) ?> </textarea> <br/>

<?php
}
$i--;
}
?>
<input type="submit" name="formSubmit"/>
</form>

</body>
</html>
