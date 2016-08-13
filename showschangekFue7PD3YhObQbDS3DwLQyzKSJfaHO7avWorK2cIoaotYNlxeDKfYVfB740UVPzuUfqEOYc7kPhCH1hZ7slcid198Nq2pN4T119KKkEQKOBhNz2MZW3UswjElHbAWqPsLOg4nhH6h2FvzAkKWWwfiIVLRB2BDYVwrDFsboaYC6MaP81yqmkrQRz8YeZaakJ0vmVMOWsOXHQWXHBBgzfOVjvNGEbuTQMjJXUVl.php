<?php
$newarray = unserialize(file_get_contents('showsEcGCD2JbBWBwaa3t30CGOq523lKm3YcZ5VsL8T2Gumc2sqtf4H3YlBtCjJVYZjcwOfgXEqVwUuwfvn6prnWBlEGlHJTUeuwu9DjEFU9lzx6Mdb9Tn8AtkNv8LKsu3hiL7OdB9Q7qVX09iL893Vfe8D5pLegz6rZqCIfktY7cNMOE22izNa4VNQXath4awAiZCRxv35vGEyLLSiLtKORjEln9yRs6w97g2arTUzmI7Ul.txt'));
if($_POST['formSubmit'] == "Submit")
{
	for ($j = $newarray->getSize()-1; $j >=0; $j--) {
		$newarray[$j] =htmlentities($_POST["$j"]);
	}
	file_put_contents('showsEcGCD2JbBWBwaa3t30CGOq523lKm3YcZ5VsL8T2Gumc2sqtf4H3YlBtCjJVYZjcwOfgXEqVwUuwfvn6prnWBlEGlHJTUeuwu9DjEFU9lzx6Mdb9Tn8AtkNv8LKsu3hiL7OdB9Q7qVX09iL893Vfe8D5pLegz6rZqCIfktY7cNMOE22izNa4VNQXath4awAiZCRxv35vGEyLLSiLtKORjEln9yRs6w97g2arTUzmI7Ul.txt', serialize($newarray));
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

<form action="showschangekFue7PD3YhObQbDS3DwLQyzKSJfaHO7avWorK2cIoaotYNlxeDKfYVfB740UVPzuUfqEOYc7kPhCH1hZ7slcid198Nq2pN4T119KKkEQKOBhNz2MZW3UswjElHbAWqPsLOg4nhH6h2FvzAkKWWwfiIVLRB2BDYVwrDFsboaYC6MaP81yqmkrQRz8YeZaakJ0vmVMOWsOXHQWXHBBgzfOVjvNGEbuTQMjJXUVl.php" method="post">
<?php
$array = unserialize(file_get_contents('showsEcGCD2JbBWBwaa3t30CGOq523lKm3YcZ5VsL8T2Gumc2sqtf4H3YlBtCjJVYZjcwOfgXEqVwUuwfvn6prnWBlEGlHJTUeuwu9DjEFU9lzx6Mdb9Tn8AtkNv8LKsu3hiL7OdB9Q7qVX09iL893Vfe8D5pLegz6rZqCIfktY7cNMOE22izNa4VNQXath4awAiZCRxv35vGEyLLSiLtKORjEln9yRs6w97g2arTUzmI7Ul.txt'));
$i=$array->getSize()-1;
while($i>=0) {
if($array[$i]) {
?>
<p>Title:</p>
<textarea name="<?=$i?>"> <?= html_entity_decode($array[$i]) ?> </textarea> <br/>
<p>Content:</p>
<textarea name="<?=$i-1?>"> <?= html_entity_decode($array[$i-1]) ?> </textarea> <br/>
<p>Purchase Link:</p>
<input type="url" name="<?=$i-2?>" maxlength="500" value="<?= html_entity_decode($array[$i-2]) ?>"/> <br/>
<br/>
<?php
}
$i-=3;
}
?>
<input type="submit" name="formSubmit"/>
</form>

</body>
</html>
