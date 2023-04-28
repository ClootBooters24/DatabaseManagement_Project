<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Add Student</title>
    </head>
    <body>
        <form action="addStudent.php" method="post">
            Student ID: <input type="text" name="studentID"><br><br>
            Student Name: <input type="text" name="studentName"><br><br>
            Student Major: <input type="text" name="major"><br><br>
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
        $studentName = escapeshellarg($_POST[studentName]);
        $major = escapeshellarg($_POST[major]);

        $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar addStudent ' . $studentID . ' ' . $studentName . ' ' . $major;

        // remove dangerous characters from command to protect web server
        $escaped_command = escapeshellcmd($command);
        echo "<p>command: $command <p>";
        // run jdbc_insert_item.exe
        system($escaped_command);           
    }    
?>
