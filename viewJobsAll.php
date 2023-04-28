<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>View all Jobs</title>
    </head>
    <body>
        <form action="viewJobsAll.php" method="post">
            <label for="">Click Submit to view all Jobs: </label>
            <input name="submit" type="submit" >
        </form>
        <p>The accepted majors are: <br>CSCE <br>BIOL <br>ELEG <br>ISYS <br>ENEG <br>AGRI</p>
        <a href="http://www.csce.uark.edu/~cjwarstl/WarstlerC_Database_Project/homePage.html">Home Page</a>

    </body>
</html>

<?php
    if (isset($_POST['submit'])) 
    {
        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar viewJobsAll';

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }    
?>