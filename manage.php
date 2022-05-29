<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
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
		<h2>Hello, <?php echo $_SESSION['user_name']; ?></h2>
		 <a href="logout.php">Logout</a>
            <fieldset>
		        <legend><h2>Search Attempts</h2></legend>
                <form method="post" action="managequery.php">
                    <label for="studentid">Student ID: </label><br>
                    <input type="text" id="studentid" name="studentid" placeholder="Enter Student ID (Leave Student ID & Name empty to display all attempts)"><br>
                    <label for="studentname">Student Name: </label><br>
                    <input type="text" id="studentname" name="studentname" placeholder="Enter Student Name (Leave Student ID & Name empty to display all attempts)"><br>
                    <br>
                    <div class="checkattemptscore">
                        <div>
                            <label for="attempt1score">Check attempt 1 Score: </label><br>
                            <input type="radio" id="a1-equal" name="a1radio" value="a1-equal" checked="true">
                            <label for="a1-equal">Equal</label><br>
                            <input type="radio" id="a1-less" name="a1radio" value="a1-less" >
                            <label for="a1-less">Less than</label><br>
                            <input type="radio" id="a1-greater" name="a1radio" value="a1-greater">
                            <label for="a1-greater">Greater than</label><br>
                        </div>
                        <input type="text" id="attempt1score" name="attempt1score"><br>
                        <p>%</p>
                    </div>
                    <br>
                    <div class="checkattemptscore">
                        <div>
                            <label for="attempt2score">Check attempt 2 Score: </label><br>
                            <input type="radio" id="a2-equal" name="a2radio" value="a2-equal" checked="true">
                            <label for="a2-equal">Equal</label><br>
                            <input type="radio" id="a2-less" name="a2radio" value="a2-less" >
                            <label for="a2-less">Less than</label><br>
                            <input type="radio" id="a2-greater" name="a2radio" value="a2-greater">
                            <label for="a2-greater">Greater than</label><br>
                        </div>
                        <input type="text" id="attempt2score" name="attempt2score"><br>
                        <p>%</p>
                    </div>
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
                        <button id="delete-btn">Delete</button>
						
                </form>
				 <form method="post" action="manageupdate.php">
					<br><label for="studentid">Student ID: </label><br>
                    <input type="text" id="studentid" name="studentid" placeholder="Enter Student ID"><br>
					<input type='text' id='update' name='update' placeholder='Enter New Score'><br>
					<input type='text' id='attempt' name='attempt' placeholder='Enter Attempt Number'><br>
				<button id="updatescore-btn">Update Score</button>
				</form>
            </fieldset>
        </div>
		<?php
	include('footer.inc');
?>
    </body>
</html>
<?php 

}else{

     header("Location: loginpage.php");

     exit();

}

 ?>
