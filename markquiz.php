<!DOCTYPE html>
<html>
 
<head>
 <meta charset="UTF-8" />
 
 <title>PHP Quiz</title>
 
 <link href = "styles/style.css" rel="stylesheet">
</head>
 
<body>
 

 
 <h1>Multiple Choice Results</h1>

<?php
  function sanitise_input($data)  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


 
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
		$sql_table = "attempts";
		$fname = trim($_POST['fname']);
		$studentid = trim($_POST['StudentID']);
		$date = date('Y/m/d H:i:s');
		$attempt = "SELECT * FROM attempts WHERE Student_ID = $studentid";
		$attemptcheck = mysqli_query($conn, $attempt);
		$attempts = $attemptcheck->num_rows + 1;

		if($attemptcheck->num_rows >= 2) {
			echo "<p>Error: You have surpassed the maximum number of allowed attempts</p>";
		} else {
			$answer1 = $_POST['radioq'];
			$answer2 = $_POST['check1'];
			$answer3 = $_POST['check2'];
			$answer4 = $_POST['drop_down'];
			$answer5 = $_POST['year'];
			$totalCorrect = 0;
						
			if ($answer1 == "q5") { $totalCorrect++; }
			if ($answer2 == '1')  { $totalCorrect = $totalCorrect + 0.5; }
			if ($answer3 == '4')  { $totalCorrect = $totalCorrect + 0.5; }
			if ($answer4 == "BTV") { $totalCorrect++; }
			if ($answer5 == "1993") { $totalCorrect++; }

			$query = "INSERT INTO $sql_table (Attempt_ID, Date_Time, FirstName_LastName, Student_ID, No_Attempt, Score) VALUES (NULL, '$date', '$fname', '$studentid', '$attempts', '$totalCorrect')";

			$result = mysqli_query($conn, $query);
			if(!$result) {
				echo "<p>Something is wrong with ", $query, "</p>";	

			}





    if  (isset ($_POST["comments"]))  {
        $comments = $_POST["comments"];
    }


	$fname = sanitise_input($fname);
	$studentid = sanitise_input($studentid);
	$comments = sanitise_input($comments);
  
	$errMsg = "";
  
	if (is_numeric($studentid) == false) {
	  $errMsg .= "Your Student ID must be a number<br />";
	}
	else if (!preg_match("/^\d{7,10}+$/",$studentid)) {
	  $errMsg .= "Your Student ID must be between 7 or 10 digits<br />";
	}
  
	if  ($fname=="")  {
		  $errMsg .= "You must enter your first name<br />";
	}

	else if (!preg_match("/^[a-z ,.'-]{0,30}+$/i",$fname)) {
		  $errMsg .= "Only alpha characters allowed in your first/last name<br />";
	}

	if  ($errMsg !== ""){
		  echo  "<p>$errMsg</p>";
	}
 


			else {
				echo "<p>Name: $fname</p>"
				."<p>Student ID: $studentid</p>"
				."<p>$totalCorrect / 4 correct</p>"
				."<p>Total number of attempts: $attempts</p>";
				if($attempts == 1) {
					echo "<br>";
					echo "<p>You have one more attempt remaining. Click <a href='quiz.php'>here</a> to return to the quiz and try again.</p>";
				}

			}
			mysqli_close($conn);

}
}
?>

 
</body>
</html>
