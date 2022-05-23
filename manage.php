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
                include('header.inc');
                include('menu.inc');
            ?>
            <fieldset>
		        <legend><h2>Search Attempts</h2></legend>
                <form method="post" action="managequery.php">
                    <label for="studentid">Student ID: </label><br>
                    <input type="text" id="studentid" name="studentid" placeholder="Enter Student ID (Leave Student ID & Name empty to display all attempts)"><br>
                    <label for="studentname">Student Name: </label><br>
                    <input type="text" id="studentname" name="studentname" placeholder="Enter Student Name (Leave Student ID & Name empty to display all attempts)"><br>
                    <label for="attempt1score">Attempt 1 Score: </label><br>
                    <input type="text" id="attempt1score" name="attempt1score"><br>
                    <label for="attempt2score">Attempt 2 Score: </label><br>
                    <input type="text" id="attempt2score" name="attempt2score"><br>
                    <br>
                    <button>Search:</button>
                </form>
            </fieldset>
            <fieldset>
		        <legend><h2>Modify Attempts</h2></legend>
                <form method="post" action="managemodify.php">
                    <label for="studentid">Student ID: </label><br>
                    <input type="text" id="studentid" name="studentid" placeholder="Enter Student ID"><br>
                    <div id="modify-btns">
                        <br>
                        <button id="updatescore-btn">Update Score</button>
                        <button id="deleteattempts-btn">Delete All Attempts</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </body>
</html>