<?php
$newarray = unserialize(file_get_contents('storeVCtStSWW6JGEEpJRh5C4CvlLHAS8N1F8JcaSb3VNNtDaf9D4xuBGWk1nGJR674UnWw75VqHSbyucmymDkqBqORVZbq3cmO4PCCli59SeHIUU8JZIxtVV7pGx4NnuCGboPjd4Ebisy2h1XvmfX8b7pY2JRwCvCMnNpe4CsFnjcIs2rSBFHNGB7mLSDX05I454iPZVhDPNf6Q5CbXosGKhJDsc7oz9ODCaejpHVuf3YvJ.txt'));
if($_POST['formSubmit'] == "Submit")
{
	$offset=$newarray->getSize();
	$newarray->setSize($newarray->getSize()+$_POST['n']);
	for($j=0;$j<$_POST['n'];$j++) {
		$newarray[$j+$offset]=htmlentities($_POST["$j"]);
	}
	file_put_contents('storeVCtStSWW6JGEEpJRh5C4CvlLHAS8N1F8JcaSb3VNNtDaf9D4xuBGWk1nGJR674UnWw75VqHSbyucmymDkqBqORVZbq3cmO4PCCli59SeHIUU8JZIxtVV7pGx4NnuCGboPjd4Ebisy2h1XvmfX8b7pY2JRwCvCMnNpe4CsFnjcIs2rSBFHNGB7mLSDX05I454iPZVhDPNf6Q5CbXosGKhJDsc7oz9ODCaejpHVuf3YvJ.txt', serialize($newarray));
	header("Location: thankyou.html");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>TESTING IN PROGRESS</title>
</head>
<body>

<h1>Adding <?=$_GET['n']?> Elements to Content c</h1>

<form action="storeaddozKi587ZuLBRbkkip4pF8PcECk6etirL2UstFSdbljtw5YpMnlmDMOEOlT3G6nr2MieU9EpzwOr4Vm9IcLZZjjMA1DH5ljS4TuRENNw8wYrXmTDDMiAozgOpcl4XNsCfYukiVpToIlj9mFNbeizK280sQQ54pkNfiOZ8JqExbkgQdXrL2u7ceDnmiC3e0FFxnO4hWhYMIMA9h0S3yNduuHtKBUycWrH6jvTgePQx.php" method="post">
<?php
$toAdd = 1;
if($_GET['n']) $toAdd=$_GET['n'];
$i = $toAdd-1;
while($i>=0) {
?>
<textarea name="<?=$i?>"></textarea> <br/>

<?php
$i--;
}
?>
<input type="number" name="n" value="<?=$toAdd?>" hidden="1"/>
<input type="submit" name="formSubmit"/>
</form>

</body>
</html>
