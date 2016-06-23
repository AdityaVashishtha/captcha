<!DOCTYPE html>
<html>
<head>
	<title>Layout</title>
	<script type="text/javascript">
		function change() {
			alert();
			document.getElementById("ad").innerHTML = "Hello World";
		}
	</script>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div>
	<img src="http://www.deluxevectors.com/images/sample/thumbtack-pushpin-2" class="absot">
	<p class="abso" onclick="myFunction();">
		<img src="http://www.deluxevectors.com/images/sample/thumbtack-pushpin-2" class="absot">
		This example looks similar to the one on page 368, but it uses relative positioning for the elements. Because the paragraphs are relatively positioned, by default they would appear over the top of the heading as the user scrolls down the page. To ensure that the element stays on top, we use the z-index property on the rule for the element.
	</p>
	<p class="fixed" id="ad" onclick="change();">
		<img src="http://www.deluxevectors.com/images/sample/thumbtack-pushpin-2" class="absot">
		This example looks similar to the one on page 368, but it uses relative positioning for the elements. Because the paragraphs are relatively positioned, by default they would appear over the top of the heading as the user scrolls down the page. To ensure that the element stays on top, we use the z-index property on the rule for the element.
	</p>

	<?php
	echo '
	<script>
	function myFunction() {
	    var x = document.createElement("STYLE");
	    var t = document.createTextNode(
	    	"@import url(\'style.css\');"
	    	);
	    x.appendChild(t);
	    document.head.appendChild(x);
	}
	</script>
	';
?>
</div>

</div>
</body>
</html>
