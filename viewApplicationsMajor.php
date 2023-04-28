<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>View Applications</title>
    </head>
    <body>
        Please select a major to view all applications from students in that major:
        <form action="viewApplicationsMajor.php" method="post">
            <label for="">Please Enter a Major: </label>
            <input type="text" name="major"><br><br>
            <input name="submit" type="submit" >
        </form>
        <p>The accepted majors are: <br>CSCE <br>BIOL <br>ELEG <br>ISYS <br>ENEG <br>AGRI</p>
        <a href="http://www.csce.uark.edu/~cjwarstl/WarstlerC_Database_Project/homePage.html">Home Page</a>

    </body>
</html>

<?php
    if (isset($_POST['submit'])) 
    {
        // replace ' ' with '\ ' in the strings so they are treated as single command line args
        $major = escapeshellarg($_POST[major]);

        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar viewApplicationsMajor ' . $major;

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }    
?>