<!DOCTYPE html>
<html lang="en">
<head>
	<link href = "styles/style.css" rel="stylesheet">
	<script src="javascript.js"></script>
	<meta charset="utf-8" >
	<meta name="description" content="Streaming Media" >
	<meta name="keywords" content=" Streaming, Media, HTML, CSS, JavaScript" >
	<meta name="author"   content="Jesse" >
<title> Streaming Media </title>
</head> 
<body id="indexbody">

	<?php
    include('header.inc');
?>

<?php
    include('menu.inc');
?>
	
	<a id="vidtext" href="https://www.youtube.com/watch?v=xVoV3qBw3gA"><h2>Streaming Media Video</h2></a>
	<iframe id="video" src="https://www.youtube.com/embed/watch?v=xVoV3qBw3gA" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
<hr>
<?php
    require('footer.inc');
?> 
</body>
</html>
