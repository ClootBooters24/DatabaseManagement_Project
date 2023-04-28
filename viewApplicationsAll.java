import java.sql.*;

public class viewApplicationsAll {
    public static void main(String[] args) throws SQLException {
        String Username = "cjwarstl"; // Change to your own username
        String mysqlPassword = "ai4Ri3Eu"; // Change to your own mysql Password
  
        // Connect to the database
        jdbc_db myDB = new jdbc_db();
        myDB.connect(Username, mysqlPassword);
        myDB.initDatabase();
  
        StringBuilder builder = new StringBuilder();

        // Read command line arguments

        // Insert the new student
        String query1 = "SELECT * FROM Applications INNER JOIN Jobs on Jobs.jobID = Applications.JobID INNER JOIN Students ON Students.studentID = Applications.studentID;";

        // For debugging purposes: Show the database
        builder.append("<br><br><br> Table Applications: " + myDB.query(query1));
        System.out.println(builder.toString());
  
        myDB.disConnect();
     }
  
}
