<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<head>
 <meta charset=UTF-8" />
 
 <title>PHP Quiz</title>
 
 <link href = "styles/style.css" rel="stylesheet">
</head>
 
<body>
 
 <div id="page-wrap">
 
 <h1>Multiple Choice Results</h1>
 
        <?php
			require_once ("settings.php");
			$conn = @mysqli_connect($host,
				$user,
				$pwd,
				$sql_db
			);
			if (!$conn) {
				echo "<p>Database connection failure</p>";
			} else {
				date_default_timezone_set("Australia/Melbourne");

				$fname = $_POST['fname'];
				$studentid = $_POST['StudentID'];
				$date = date('Y/m/d H:i:s');
				$attempt = 0;

				$answer1 = $_POST['radioq'];
				$answer2 = $_POST['checkq'];
				$answer3 = $_POST['drop_down'];
				$answer4 = $_POST['year'];
				

				$totalCorrect = 0;
				
				if ($answer1 == "Answer4") { $totalCorrect++; }
				if ($answer2 == "Answer1" && "Answer4") { $totalCorrect++; }
				if ($answer3 == "BTV") { $totalCorrect++; }
				if ($answer4 == "1993") { $totalCorrect++; }


				$query = "insert into $sql_table (Date & Time, First Name & Last Name, Student ID, No. Attempt, Score) values ('$date', '$fname', '$studentid', '$attempt', '$totalCorrect')";	
			
			
				echo "<div id='results'>$totalCorrect / 4 correct</div>";
			}
        ?>
					
					<?php
		if (isset ($_POST["fname"])){
			$fname = $_POST["fname"];
			$fname = sanitise_input($fname);
		if (isset ($_POST["StudentID"]));
			$StudentID = $_POST["StudentID"];
			$StudentID = sanitise_input($StudentID);
		if (isset ($_POST["Date"]));
			$Date = $_POST["Date"];
			$Date = sanitise_input($Date);
		}
		else {
			header ("location: register.html"); 
		}
			
			function sanitise_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			
				$errMsg = " ";
			if ($fname==" ") {
				$errMsg .= "<p>You must enter an age.</p>";
			}
			else if (!preg_match("/^[a-zA-Z ][0,30]+$/D", $fname)) {
				$errMsg .= "<p>Only 30 max Alpha letters and hyphens allowed in your last name.</p>";
			}
			if ($errMsg != " "){
				echo "<p>$errMsg</p>";
			}
			else {
				
			
			$errMsg = " ";
			if ($StudentID==" ") {
				$errMsg .= "<p>You must enter an age.</p>";
			}
			else if (!preg_match("/^[7,10]*$", $StudentID)) {
				$errMsg .= "<p>only 7 or 10 digits allowed</p>";
			}
			if ($errMsg != " "){
				echo "<p>$errMsg</p>";
			}
			else {
					echo "<table width="200" border="1">\n";
					echo "<tbody>\n
					<tr>\n
					<th scope="Field">&nbsp;</th>\n
					<th scope="Format Requirement">&nbsp;</th>\n
					</tr>\n
					<tr>\n
					<td>Student ID</td>\n
					<td>$StudentID</td>\n
					</tr>\n
					<tr>\n
					<td>First & Last Name</td>\n
					<td>$fname</td>\n
					</tr>\n
					</tbody>\n
					</table>\n";

			}
			}
			
?>

 
 </div>
 
</body>
 
</html>