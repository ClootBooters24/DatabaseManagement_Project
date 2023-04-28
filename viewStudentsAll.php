<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>View Students</title>
    </head>
    <body>
        <form action="viewStudentsAll.php" method="post">
            <label for="">Click Submit to view all students: </label>
            <input name="submit" type="submit" >
        </form>
        <a href="http://www.csce.uark.edu/~cjwarstl/WarstlerC_Database_Project/homePage.html">Home Page</a>

    </body>
</html>

<?php
    if (isset($_POST['submit'])) 
    {
        // replace ' ' with '\ ' in the strings so they are treated as single command line args
        $major = escapeshellarg($_POST[major]);

        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar viewStudentsAll';

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }
?>