<?php
session_start();
    if(isset($_SESSION['user'])){
    }
    else{
        header("Location:https://web.njit.edu/~bg245");
        exit;
    }
?>
<!DOCTYPE html>
<html>
   <head>
        <h1>Welcome Student</h1>
   </head>
   <body>
        <form name="takeExam" method="get" action="takeExam.php">
            <p>
                <input type="button" value="Take Exam" onclick="location.href='selectExam.php'">
            </p>
        </form>
        <form name="viewResults" method="get" action="examResults.php">
            <p>
                <input type="button" value="View Exam Results" onclick="location.href='examResults.php'">
            </p>
        </form>
        <form name="backLogin" action="index.html">
          <input type="submit" name="submit" id="submit" value="Back to login">
        </form>
   </body>
</html>
