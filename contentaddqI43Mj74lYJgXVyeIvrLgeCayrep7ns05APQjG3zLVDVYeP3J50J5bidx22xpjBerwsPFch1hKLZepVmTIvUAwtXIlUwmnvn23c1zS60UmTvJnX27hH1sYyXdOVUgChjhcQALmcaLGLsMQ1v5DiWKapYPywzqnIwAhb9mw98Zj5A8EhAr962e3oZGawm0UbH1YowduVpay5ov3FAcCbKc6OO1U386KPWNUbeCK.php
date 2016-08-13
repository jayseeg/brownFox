<?php
$newarray = unserialize(file_get_contents('contentGvIqbi1hPMMDOjsd2OR7fyJHonTh8WtRhvTJsSzuVgdAuDvkOB2a2QwuUPiYFOQosOPPpw4lsAXZrUP1mNNxbRUiI2TZIvjaD1b6bNwdY3fNWniCWwuWryAAB0E8UiqKxwrb65xNQMg10pHMwVyHhKdavuzgpAH5JFdvPyE6BPOsTsNXazyjlhKGVvX3Rfq2ieVvFW3Jg32BM10CfQJP8lswIU689J3e6v8R45aEAy.txt'));
if($_POST['formSubmit'] == "Submit")
{
	$offset=$newarray->getSize();
	$newarray->setSize($newarray->getSize()+$_POST['n']);
	for($j=0;$j<$_POST['n'];$j++) {
		$newarray[$j+$offset]=htmlentities($_POST["$j"]);
	}
	file_put_contents('contentGvIqbi1hPMMDOjsd2OR7fyJHonTh8WtRhvTJsSzuVgdAuDvkOB2a2QwuUPiYFOQosOPPpw4lsAXZrUP1mNNxbRUiI2TZIvjaD1b6bNwdY3fNWniCWwuWryAAB0E8UiqKxwrb65xNQMg10pHMwVyHhKdavuzgpAH5JFdvPyE6BPOsTsNXazyjlhKGVvX3Rfq2ieVvFW3Jg32BM10CfQJP8lswIU689J3e6v8R45aEAy.txt', serialize($newarray));
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

<form action="contentaddqI43Mj74lYJgXVyeIvrLgeCayrep7ns05APQjG3zLVDVYeP3J50J5bidx22xpjBerwsPFch1hKLZepVmTIvUAwtXIlUwmnvn23c1zS60UmTvJnX27hH1sYyXdOVUgChjhcQALmcaLGLsMQ1v5DiWKapYPywzqnIwAhb9mw98Zj5A8EhAr962e3oZGawm0UbH1YowduVpay5ov3FAcCbKc6OO1U386KPWNUbeCK.php" method="post">
<p>Links should be Youtube Embed Links: eg. www.youtube.com/embed/VIDEOCODE</p>
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

