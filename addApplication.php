<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Add Application</title>
    </head>
    <body>
        <form action="addApplication.php" method="post">
            Student ID: <input type="text" name="studentID"><br><br>
            Job ID: <input type="text" name="jobID"><br><br>
            <input name="submit" type="submit" >
        </form>
        <br><br><br><a href="http://www.csce.uark.edu/~cjwarstl/WarstlerC_Database_Project/homePage.html">Home Page</a>
    </body>
</html>

<?php
    if (isset($_POST['submit'])) 
    {
        // replace ' ' with '\ ' in the strings so they are treated as single command line args
        $studentID = escapeshellarg($_POST[studentID]);            
        $jobID = escapeshellarg($_POST[jobID]);

        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar addApplication ' . $studentID . ' ' . $jobID;

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }    
?>