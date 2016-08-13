<?php
$newarray = unserialize(file_get_contents('showsEcGCD2JbBWBwaa3t30CGOq523lKm3YcZ5VsL8T2Gumc2sqtf4H3YlBtCjJVYZjcwOfgXEqVwUuwfvn6prnWBlEGlHJTUeuwu9DjEFU9lzx6Mdb9Tn8AtkNv8LKsu3hiL7OdB9Q7qVX09iL893Vfe8D5pLegz6rZqCIfktY7cNMOE22izNa4VNQXath4awAiZCRxv35vGEyLLSiLtKORjEln9yRs6w97g2arTUzmI7Ul.txt'));
if($_POST['formSubmit'] == "Submit")
{
	$offset=$newarray->getSize();
	$newarray->setSize($newarray->getSize()+$_POST['n']);
	for($j=0;$j<$_POST['n'];$j++) {
		$newarray[$j+$offset]=htmlentities($_POST["$j"]);
	}
	file_put_contents('showsEcGCD2JbBWBwaa3t30CGOq523lKm3YcZ5VsL8T2Gumc2sqtf4H3YlBtCjJVYZjcwOfgXEqVwUuwfvn6prnWBlEGlHJTUeuwu9DjEFU9lzx6Mdb9Tn8AtkNv8LKsu3hiL7OdB9Q7qVX09iL893Vfe8D5pLegz6rZqCIfktY7cNMOE22izNa4VNQXath4awAiZCRxv35vGEyLLSiLtKORjEln9yRs6w97g2arTUzmI7Ul.txt', serialize($newarray));
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

<form action="showsaddwGsffKUF5QD25KzMDPoJ7ByNVOTidjH8y3XsssHjlQeJv7b5YlZegWS8xBZ4zPNHveDh8RGQNjmEuOVwoYfVepupsoFw2pP4q2VzDMm5sTA4ayO6ZrAanVp9ddeAy5r31in1wQf0A6CrjVvWYwj6h73pOc51JkfFH0YbyoLzKynTDw2f3chjlx6UVU5xFrb7c0B3kiSEumNEErkn53kmYpwSVYJlcZP9BqxJ6yt5.php" method="post">
<?php
$toAdd = 3;
if($_GET['n']) $toAdd=$_GET['n']*3;
$i = $toAdd-1;
while($i>=0) {
?>
<p>Title:</p>
<input type="text" name="<?=$i?>" maxlength="50" placeholder="Title" required/> <br/>
<p>Content</p>
<input type="text" name="<?=$i-1?>" maxlength="500" placeholder="Content eg. date, location..." required/> <br/>
<p>Purchase Link</p>
<input type="url" name="<?=$i-2?>" maxlength="500" placeholder="Purchase Link" required/> <br/>
<?php
$i-=3;
}
?>
<input type="number" name="n" value="<?=$toAdd?>" hidden="1"/>
<input type="submit" name="formSubmit"/>
</form>

</body>
</html>
