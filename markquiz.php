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
            
            $answer1 = $_POST['radioq'];
            $answer2 = $_POST['checkq'];
            $answer3 = $_POST['drop_down'];
            $answer4 = $_POST['year'];
            
        
            $totalCorrect = 0;
            
            if ($answer1 == "Answer4") { $totalCorrect++; }
            if ($answer2 == "Answer1" && "Answer4") { $totalCorrect++; }
            if ($answer3 == "BTV") { $totalCorrect++; }
            if ($answer4 == "1993") { $totalCorrect++; }
           
            
            echo "<div id='results'>$totalCorrect / 4 correct</div>";
            
        ?>
 
 </div>
 
</body>
 
</html>