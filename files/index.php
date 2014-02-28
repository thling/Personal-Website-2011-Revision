<?php
include_once '../resources/functions/utilities.php';
$utilities = new resources_functions_utilities();
?>
<html>
<title>Resources</title>
<head>
<?php
$utilities->echoHeaderContents();
?>
</head>
<body>
<script>
alert('Sorry, this area is under development.\nRedirecting you back to home...');
window.location='http://thling.com/';
</script>
<?php
$utilities->echoStartUpContents();
$utilities->echoNavBarString('home','resources');
?>
<div class=content>
<div class="transparent title" style="top:65px;">
	<ul style="list-style-type: none; margin:0px; padding:0px;">
		<li class="titleItem" style="font-size:25px;font-weight:normal;padding:13px 5px 0px">home</li>
		<li class="titleItem" style="font-weight:normal;padding-left:5px;">|</li>
		<li class="titleItem">resources</li>
	</ul>
</div>


</div>
</body>
</html>