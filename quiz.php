<!DOCTYPE html>
<html lang="en">
<head>
	<link href = "styles/style.css" rel="stylesheet">
	<meta charset="utf-8"/>
	<meta name="description"	content="Streaming Quiz"/>
	<meta name="keywords"		content="HTML, CSS, PHP"/>
	<meta name="Author"		content="Arvan, Alexander"/>
	<title>Streaming Media Quiz</title>

</head>
<body>
<div class="content">
  <?php
	include('header.inc');
?>
<?php
	include('menu.inc');
?>
	<form action="markquiz.php" method="post" id="quiz" novalidate="novalidate">
	<!-- Text input for name and student code -->
	<fieldset>
		<legend><h2>Student Details</h2></legend>

		<p><label class="lable" for="fname">Name and Surname:</label></p><br>
		<input type="text" id="fname" name="fname" placeholder="e.g. John Smith" required = "required"><br>

		<p><label class="lable" for="StudentID">Student Number:</label></p><br>
		<input type="text" name= "StudentID" id="StudentID" placeholder="Enter Valid Student ID" required="required"/>

		<p><label class="lable" for="Date">Date</label></p>
		<input type="date" name= "Date" id="Date" size="10" required="required"/>

	</fieldset>

	<!--Text input for test-->
	<fieldset>
	<legend><h2>Questions</h2></legend>
	<p><label class="lable" for="comments">In your opinion will streaming services overcome broadcast television?</label></p><br>
	<textarea id="comments" name="comments" rows="4" cols="40" placeholder="Answer here..."></textarea>

	<!-- Radio button input -->
	<p><label class="lable">Which company helped develop streaming media?</label><br></p>
	<input type="radio" id="q2" name="radioq" value="q2" required = "required">
	<label for="q2">IBM</label><br>
	<input type="radio" id=q3 name="radioq" value="q3" >
	<label for="q3">XEROX</label><br>
	<input type="radio" id=q4 name="radioq" value="q4">
	<label for="q4">MICROSOFT</label><br>
	<input type="radio" id="q5" name="radioq" value="q5">
	<label for="q5">STARWORKS</label><br>

	<!-- Checkbox input -->
	<p><label class="lable">What are the major benefits of streaming services?</label><br></p>
	<input type="checkbox" id="check1" name="check1" value="1">
	<label class="container" for="check1">Able to watch content whenever and where ever</label><br>
	<input type="checkbox" id="check2" name="check1" value="Answer2">
	<label for="check2">Better video quality</label><br>
	<input type="checkbox" id="check3" name="check1" value="Answer3">
	<label for="check3">TV Shows usually have complete seasons at launch, in comparison to free-to-air which in which the consumer has to wait for episodes</label><br>
	<input type="checkbox" id="check4" name="check2" value="4">
	<label for="check4">Wide variety for consumers</label><br>
	

	<!-- Select input -->
	<p><label class="lable" for="question">Which one of these is not streaming service?</label><br></p>
	<select name="drop_down" id="question" required="required">
		<option value="">Please Select</option>
		<option value="Tubi">Tubi</option>
		<option value="BTV">BTV</option>
		<option value="Fetch">Fetch</option>
		<option value="Hayu">Hayu</option>
	</select><br>

	<!-- Range input -->
	<!-- 5, R. R. (2021, March 1). HTML5 input type range show range value. Stack Overflow. Retrieved April 2, 2022, from https://stackoverflow.com/questions/10004723/html5-input-type-range-show-range-value -->
	<div class=slidecontainer>
	<p><label class="lable" for="year">When was the first successful live stream?</label></p>
	<p><a href = "https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_rangeslider"><sup>Slider CSS</sup></a></p>
	<input type="range" value="1993" min="1980" max="2010" oninput="this.nextElementSibling.value = this.value" name="year" id="year" class="slider">
	<output>2000</output><br>
	</div>

</fieldset>
	<!-- Submit and Reset button -->
	<p>
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</p>

</form>
</div>
<?php
	require('footer.inc');
?>
</body>
</html>
