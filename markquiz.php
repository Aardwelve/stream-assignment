<!DOCTYPE html>
<html>
	<head>
 	<meta charset="UTF-8" />
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

				$sql_table = "attempts";

				$fname = trim($_POST['fname']);
				$studentid = trim($_POST['StudentID']);
				$date = date('Y/m/d H:i:s');
				$attempt = "SELECT * FROM attempts WHERE Student_ID = $studentid";

				$attemptcheck = mysqli_query($conn, $attempt);
				if($attemptcheck->num_rows >= 2) {
					echo "<p>Error: You have surpassed the maximum number of allowed attempts</p>";
				} else {
					$answer1 = $_POST['radioq'];
					$answer2 = $_POST['check1'];
					$answer3 = $_POST['drop_down'];
					$answer4 = $_POST['year'];
					

					$totalCorrect = 0;
					
					if ($answer1 == "Answer4") { $totalCorrect++; }
					if ($answer2 == "Answer1" && "Answer4") { $totalCorrect++; }
					if ($answer3 == "BTV") { $totalCorrect++; }
					if ($answer4 == "1993") { $totalCorrect++; }


					$query = "INSERT INTO $sql_table (Attempt_ID, Date_Time, FirstName_LastName, Student_ID, No_Attempt, Score) VALUES (NULL, '$date', '$fname', '$studentid', '$attempt', '$totalCorrect')";

					$result = mysqli_query($conn, $query);
					if(!$result) {
						echo "<p>Something is wrong with ", $query, "</p>";
					} else {
						echo "<p class=\"ok\"><div id='results'>$totalCorrect / 4 correct</div></p>";
					}
					mysqli_close($conn);
				}
			}
        ?>
 		</div>
	</body>
</html>