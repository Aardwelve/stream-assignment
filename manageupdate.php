<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
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
						$sql_table="attempts";
						$Student_ID = trim ($_POST["studentid"]);
						htmlspecialchars($_POST["studentid"]);			
						$Score = trim ($_POST["update"]);
						htmlspecialchars($_POST["update"]);
						$attemptno = trim ($_POST["attempt"]);
						htmlspecialchars($_POST["attempt"]);
						$query = "UPDATE $sql_table SET Score= '$Score' WHERE Student_ID= '$Student_ID' AND No_Attempt= '$attemptno' ";
						$result = mysqli_query($conn, $query);
						if(!$result) {
						echo "<p class=\"wrong\"> something is wrong with ", $query, "</p>";
						}else {
						echo "<p class=\"ok\"> Successfully changed the score to $Score</p>";
						}
						$query = "select Student_ID, No_Attempt, Score FROM $sql_table where Student_ID LIKE $Student_ID";
						$result = mysqli_query($conn, $query);
						if (!$result) {
						echo "<p> No Student ID Exists </p>";
							} else {
								echo "<table border=\'1\'>\n";
								echo "<tr>\n"
								."<th scope=\'col\'>Student_ID</th>\n "
								."<th scope=\'col\'>No_Attempt</th>\n "	
								."<th scope=\'col\'>Score</th>\n "
								."</tr>\n ";
			
								while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>\n";
								echo "<td>",$row["Student_ID"],"</td>\n ";
								echo "<td>",$row["No_Attempt"],"</td>\n ";
								echo "<td>",$row["Score"],"</td>\n ";
								echo "</tr>\n ";
								}
								echo "</table>\n "; 
								mysqli_free_result($result);
								}

								mysqli_close($conn);
							}
				
	
	
		?>
</body>
</html>







						