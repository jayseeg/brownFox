<!doctype html>
 <html>
  <head>
    <title>Abandon All Hope</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/components.css">
  </head>
  <body>
    <!-- Add header here-->
    <div class="media-wrapper">
	<?php 
		$array = unserialize(file_get_contents('contentGvIqbi1hPMMDOjsd2OR7fyJHonTh8WtRhvTJsSzuVgdAuDvkOB2a2QwuUPiYFOQosOPPpw4lsAXZrUP1mNNxbRUiI2TZIvjaD1b6bNwdY3fNWniCWwuWryAAB0E8UiqKxwrb65xNQMg10pHMwVyHhKdavuzgpAH5JFdvPyE6BPOsTsNXazyjlhKGVvX3Rfq2ieVvFW3Jg32BM10CfQJP8lswIU689J3e6v8R45aEAy.txt'));
		$i=$array->getSize()-1;
		while($i>=0) {
		if($array[$i]) {
	?>
	<div class="video-wrapper">
        	<iframe width="420" height="315" src="<?=html_entity_decode($array[$i])?>" frameborder="0" allowfullscreen></iframe>
	</div>
<br/>
	<?php
		}
			$i--;
		}
	?>
    </div>
    <footer>
      <p class="copyright">&copy; 2016 Tom Hagerman</p>
    </footer>
    <!-- Add javascript here -->
    <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slideshow.js"></script>
  </body>
 </html>
