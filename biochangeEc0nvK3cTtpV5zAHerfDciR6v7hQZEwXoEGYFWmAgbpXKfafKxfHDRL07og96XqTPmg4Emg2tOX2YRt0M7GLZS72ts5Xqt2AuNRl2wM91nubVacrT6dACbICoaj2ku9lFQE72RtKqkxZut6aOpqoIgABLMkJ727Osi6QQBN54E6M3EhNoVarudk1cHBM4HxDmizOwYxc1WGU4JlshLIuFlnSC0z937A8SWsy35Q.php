<?php
$newarray = unserialize(file_get_contents('biokbSJUBLiYIjPl47hqZaryFqG3xgRm8u0iLgE5iJZnzLWcRlCXhE5VCrPrGDxP7DsY2YbjozYQO3uydOP79Alf5qpobtFgAqXr0QIH7SOqSLjeJ8sh14npstV4tclUoxvV6KWRELFTwB07mvikD7GicuB5OJzwkGkt0nQT4ius5KN5Gy2NL0lBRpaIHvnfwVX4x6sPd3S0HgT7BdeGYzuM2ksc0pp80YKjzG3S0yDgZZ0S.txt'));
if($_POST['formSubmit'] == "Submit")
{
	for ($j = $newarray->getSize()-1; $j >=0; $j--) {
		$newarray[$j] =htmlentities(nl2br($_POST["$j"]));
	}
	file_put_contents('biokbSJUBLiYIjPl47hqZaryFqG3xgRm8u0iLgE5iJZnzLWcRlCXhE5VCrPrGDxP7DsY2YbjozYQO3uydOP79Alf5qpobtFgAqXr0QIH7SOqSLjeJ8sh14npstV4tclUoxvV6KWRELFTwB07mvikD7GicuB5OJzwkGkt0nQT4ius5KN5Gy2NL0lBRpaIHvnfwVX4x6sPd3S0HgT7BdeGYzuM2ksc0pp80YKjzG3S0yDgZZ0S.txt', serialize($newarray));
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

<form action="biochangeEc0nvK3cTtpV5zAHerfDciR6v7hQZEwXoEGYFWmAgbpXKfafKxfHDRL07og96XqTPmg4Emg2tOX2YRt0M7GLZS72ts5Xqt2AuNRl2wM91nubVacrT6dACbICoaj2ku9lFQE72RtKqkxZut6aOpqoIgABLMkJ727Osi6QQBN54E6M3EhNoVarudk1cHBM4HxDmizOwYxc1WGU4JlshLIuFlnSC0z937A8SWsy35Q.php" method="post">
<?php
$array = unserialize(file_get_contents('biokbSJUBLiYIjPl47hqZaryFqG3xgRm8u0iLgE5iJZnzLWcRlCXhE5VCrPrGDxP7DsY2YbjozYQO3uydOP79Alf5qpobtFgAqXr0QIH7SOqSLjeJ8sh14npstV4tclUoxvV6KWRELFTwB07mvikD7GicuB5OJzwkGkt0nQT4ius5KN5Gy2NL0lBRpaIHvnfwVX4x6sPd3S0HgT7BdeGYzuM2ksc0pp80YKjzG3S0yDgZZ0S.txt'));
$i=0;
while($i<$array->getSize()) {
?>
<p>Put any Bio information here:</p>
<textarea name="<?=$i?>"> <?= html_entity_decode($array[$i]) ?> </textarea> <br/>

<?php
$i++;
}
?>
<input type="submit" name="formSubmit"/>
</form>

</body>
</html>
