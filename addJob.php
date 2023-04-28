<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Add Job</title>
    </head>
    <body>
        <form action="addJob.php" method="post">
            Job ID: <input type="text" name="jobID"><br><br>
            Company Name: <input type="text" name="companyName"><br><br>
            Job Title: <input type="text" name="jobTitle"><br><br>
            Salary: <input type="text" name="salary"><br><br>
            Desired Major: <input type="text" name="desiredMajor"><br><br>
            <input name="submit" type="submit" >
        </form>
        <br><br><br><a href="http://www.csce.uark.edu/~cjwarstl/WarstlerC_Database_Project/homePage.html">Home Page</a>
    </body>
</html>

<?php
    if (isset($_POST['submit'])) 
    {
        // replace ' ' with '\ ' in the strings so they are treated as single command line args
        $jobID = escapeshellarg($_POST[jobID]);  
        $companyName = escapeshellarg($_POST[companyName]);            
        $jobTitle = escapeshellarg($_POST[jobTitle]);            
        $salary = escapeshellarg($_POST[salary]);                      
        $desiredMajor = escapeshellarg($_POST[desiredMajor]);

        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar addJob ' . $jobID . ' ' . $companyName . ' ' . $jobTitle . ' ' . $salary . ' ' . $desiredMajor;

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }    
?>