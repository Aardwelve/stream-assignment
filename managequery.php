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
                $errMsg = "";
                if (!$conn) {
                    $errMsg .= "Database connection failure<br/>";
                } else {
                    $sql_table = "attempts";
                    $studentid = trim($_POST['studentid']);
                    $studentname = trim($_POST['studentname']);
                    $attempt1score = trim($_POST['attempt1score']);
                    $attempt2score = trim($_POST['attempt2score']);
                    $query = "select * from $sql_table";
                    $a1radio = $_POST['a1radio'];
                    $a2radio = $_POST['a2radio'];

                    $attempt1score = $attempt1score / 100 * 4;
                    $attempt2score = $attempt2score / 100 * 4;

                    if ($studentid != "") {
                        $query = "select * from $sql_table where Student_ID='$studentid%'";
                    }

                    if ($studentname != "") {
                        $query = "select * from $sql_table where Student_ID='$studentname%'";
                    }

                    if ($attempt1score != "") {
                        $query = "select * from $sql_table where No_Attempt=1 and Score='$attempt1score%'";
                        if ($a1radio == 'a1-less') {
                            $query = "select * from $sql_table where No_Attempt=1 and Score<'$attempt1score%'";
                        }
                        if ($a1radio == 'a1-greater') {
                            $query = "select * from $sql_table where No_Attempt=1 and Score>'$attempt1score%'";
                        }
                    }

                    if ($attempt2score != "") {
                        $query = "select * from $sql_table where No_Attempt=2 and Score='$attempt2score%'";
                        if ($a2radio == 'a2-less') {
                            $query = "select * from $sql_table where No_Attempt=2 and Score<'$attempt2score%'";
                        }
                        if ($a2radio == 'a2-greater') {
                            $query = "select * from $sql_table where No_Attempt=2 and Score>'$attempt2score%'";
                        }
                    }


                    $result = mysqli_query($conn, $query);
                    if(!$result) {
                        $errMsg .= "Something is wrong with, $query<br/>";
                    } else {
                        echo "<table border=\"1\">\n";
                        echo "<tr>\n "
                        ."<th scope=\"col\">Attempt ID</th>\n "
                        ."<th scope=\"col\">Student Name</th>\n "
                        ."<th scope=\"col\">Student ID</th>\n "
                        ."<th scope=\"col\">Attempt #</th>\n "
                        ."<th scope=\"col\">Score</th>\n "
                        ."</tr>\n ";

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>\n ";
                            echo "<td>",$row["Attempt_ID"],"</td>\n ";
                            echo "<td>",$row["FirstName_LastName"],"</td>\n ";
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