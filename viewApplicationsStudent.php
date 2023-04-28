<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>View Applications</title>
    </head>
    <body>
        Please Enter a StudentID to view all Applications by that Student:
        <form action="viewApplicationsStudent.php" method="post">
            <label for="">Please Enter a StudentID: </label>
            <input type="text" name="studentID"><br><br>
            <input name="submit" type="submit" >
        </form>
        <a href="http://www.csce.uark.edu/~cjwarstl/WarstlerC_Database_Project/homePage.html">Home Page</a>

    </body>
</html>

<?php
    if (isset($_POST['submit'])) 
    {
        // replace ' ' with '\ ' in the strings so they are treated as single command line args
        $studentID = escapeshellarg($_POST[studentID]);

        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar viewApplicationsStudent ' . $studentID;

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }    
?>