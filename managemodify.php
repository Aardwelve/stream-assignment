<!DOCTYPE html>
<html>
	<head>
 	<meta charset="UTF-8" />
	<title>PHP Quiz</title>
	<link href = "styles/style.css" rel="stylesheet">
	</head>
	<body>
        <div id="page-wrap">
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
                    $Student_ID = trim ($_POST["studentid"]);
					htmlspecialchars($_POST["studentid"]);
					$sql_table="attempts";
					$query = "DELETE FROM $sql_table WHERE Student_ID LIKE $Student_ID";
					$result = mysqli_query($conn, $query);
					if (!$result) {
					echo "<p> Student ID Has Successfully been Deleted </p>";
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
    </div>
</body>
</html>