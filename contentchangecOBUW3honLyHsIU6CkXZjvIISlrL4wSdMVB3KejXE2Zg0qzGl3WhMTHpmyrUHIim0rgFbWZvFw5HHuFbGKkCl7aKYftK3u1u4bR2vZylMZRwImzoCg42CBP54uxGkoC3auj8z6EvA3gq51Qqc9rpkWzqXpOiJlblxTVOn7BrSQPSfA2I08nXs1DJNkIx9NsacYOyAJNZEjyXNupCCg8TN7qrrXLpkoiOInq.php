<?php
$newarray = unserialize(file_get_contents('contentGvIqbi1hPMMDOjsd2OR7fyJHonTh8WtRhvTJsSzuVgdAuDvkOB2a2QwuUPiYFOQosOPPpw4lsAXZrUP1mNNxbRUiI2TZIvjaD1b6bNwdY3fNWniCWwuWryAAB0E8UiqKxwrb65xNQMg10pHMwVyHhKdavuzgpAH5JFdvPyE6BPOsTsNXazyjlhKGVvX3Rfq2ieVvFW3Jg32BM10CfQJP8lswIU689J3e6v8R45aEAy.txt'));
if($_POST['formSubmit'] == "Submit")
{
	for ($j = $newarray->getSize()-1; $j >=0; $j--) {
		$newarray[$j] =htmlentities($_POST["$j"]);
	}
	file_put_contents('contentGvIqbi1hPMMDOjsd2OR7fyJHonTh8WtRhvTJsSzuVgdAuDvkOB2a2QwuUPiYFOQosOPPpw4lsAXZrUP1mNNxbRUiI2TZIvjaD1b6bNwdY3fNWniCWwuWryAAB0E8UiqKxwrb65xNQMg10pHMwVyHhKdavuzgpAH5JFdvPyE6BPOsTsNXazyjlhKGVvX3Rfq2ieVvFW3Jg32BM10CfQJP8lswIU689J3e6v8R45aEAy.txt', serialize($newarray));
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

<form action="contentchangecOBUW3honLyHsIU6CkXZjvIISlrL4wSdMVB3KejXE2Zg0qzGl3WhMTHpmyrUHIim0rgFbWZvFw5HHuFbGKkCl7aKYftK3u1u4bR2vZylMZRwImzoCg42CBP54uxGkoC3auj8z6EvA3gq51Qqc9rpkWzqXpOiJlblxTVOn7BrSQPSfA2I08nXs1DJNkIx9NsacYOyAJNZEjyXNupCCg8TN7qrrXLpkoiOInq.php" method="post">
<p>Links should be Youtube Embed Links: eg. www.youtube.com/embed/VIDEOCODE</p>
<?php
$array = unserialize(file_get_contents('contentGvIqbi1hPMMDOjsd2OR7fyJHonTh8WtRhvTJsSzuVgdAuDvkOB2a2QwuUPiYFOQosOPPpw4lsAXZrUP1mNNxbRUiI2TZIvjaD1b6bNwdY3fNWniCWwuWryAAB0E8UiqKxwrb65xNQMg10pHMwVyHhKdavuzgpAH5JFdvPyE6BPOsTsNXazyjlhKGVvX3Rfq2ieVvFW3Jg32BM10CfQJP8lswIU689J3e6v8R45aEAy.txt'));
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
