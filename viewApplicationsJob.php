<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>View Applications</title>
    </head>
    <body>
        Please enter a jobID to view all applications for that Position:
        <form action="viewApplicationsJob.php" method="post">
            <label for="">Please Enter a jobID: </label>
            <input type="text" name="jobID"><br><br>
            <input name="submit" type="submit" >
        </form>
        <a href="http://www.csce.uark.edu/~cjwarstl/WarstlerC_Database_Project/homePage.html">Home Page</a>

    </body>
</html>

<?php
    if (isset($_POST['submit'])) 
    {
        // replace ' ' with '\ ' in the strings so they are treated as single command line args
        $jobID = escapeshellarg($_POST[jobID]);

        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar viewApplicationsJob ' . $jobID;

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }    
?>