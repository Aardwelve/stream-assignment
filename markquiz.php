<!DOCTYPE html>
<html>
 
<head>
 <meta charset=UTF-8" />
 
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
            
	$answer1 = $_POST['radioq'];
    $answer2 = $_POST['check1'];
    $answer3 = $_POST['drop_down'];
    $answer4 = $_POST['year'];

    $totalCorrect = 0;

	if ($answer1 == "Answer4") { $totalCorrect++; }
    if ($answer2 == "Answer1" && "Answer4") { $totalCorrect++; }
    if ($answer3 == "BTV") { $totalCorrect++; }
    if ($answer4 == "1993") { $totalCorrect++; }

    #echo "<div id='results'>$totalCorrect / 4 correct</div>";
            
?>


<?php
	 if  (isset ($_POST["fname"]))  {
        $fname = $_POST["fname"];
    }

    if  (isset ($_POST["StudentID"]))  {
        $StudentID = $_POST["StudentID"];
    }

    if  (isset ($_POST["Date"]))  {
        $Date = $_POST["Date"];
    }

    if  (isset ($_POST["comments"]))  {
        $comments = $_POST["comments"];
    }

    if	(isset ($_POST["radioq"]))	{
		$radioq	=$_POST["radioq"];
	}

	$checkq = "";
    if (isset ($_POST["check1"]))   $checkq = $checkq. "Able to watch content whenever and where ever";
    if (isset ($_POST["check2"]))   $checkq = $checkq. "Better video quality";
    if (isset ($_POST["check3"]))   $checkq = $checkq. "TV Shows usually have complete seasons at launch, in comparison to free-to-air which in which the consumer has to wait for episodes";
    if (isset ($_POST["check4"]))   $checkq = $checkq. "Wide variety for consumers";

    if  (isset ($_POST["year"]))	{
          $year = $_POST["year"];
	}

    $fname = sanitise_input($fname);
    $StudentID = sanitise_input($StudentID);
    $Date = sanitise_input($Date);
    $comments = sanitise_input($comments);
    $radioq = sanitise_input($radioq);
    $year = sanitise_input($year);

  $errMsg = "";
   if  ($fname=="")  {
        $errMsg .= "You must enter your first/last name.<br />";
  }
  else if (!preg_match("/^[a-z ,.'-]+$/i",$fname)) {
        $errMsg .= "Only alpha letters allowed in your first/last name.<br />";
  }

  if (is_numeric($StudentID) == false) {
    $errMsg .= "Your Student ID must be a number.<br />";
  }
  else if ($StudentID < 0000000 or $StudentID > 9999999999) {
    $errMsg .= "You must enter between 7-10 numbers.<br />";
  }


  if  ($errMsg !== ""){
        echo  "<p>$errMsg</p>";
  }




    echo "<table border='1'>
		<tr>
			<th>Name and Surname</th>
			<td>$fname</td>
		</tr>
		<tr>
			<th>Student ID</th>
			<td>$StudentID</td>
		</tr>
		<tr>
			<th>Score</th>
			<td>$totalCorrect/4</td>
		<tr>
			<th>Attempts</th>
			<td></td>
        </table>
        </p>";

?>

 
</body>
 
</html>
