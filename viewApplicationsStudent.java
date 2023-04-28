import java.sql.*;

public class viewApplicationsStudent {
    public static void main(String[] args) throws SQLException {
        String Username = "cjwarstl"; // Change to your own username
        String mysqlPassword = "ai4Ri3Eu"; // Change to your own mysql Password
  
        // Connect to the database
        jdbc_db myDB = new jdbc_db();
        myDB.connect(Username, mysqlPassword);
        myDB.initDatabase();
  
        StringBuilder builder = new StringBuilder();
        String studentID;

        // Read command line arguments
        studentID = args[0];

        // Insert the new student
        String query1 = "SELECT * FROM Applications INNER JOIN Students ON Students.studentID = Applications.StudentID INNER JOIN Jobs ON Jobs.jobID = Applications.jobID WHERE Students.studentID = '" + studentID + "';";

        // For debugging purposes: Show the database
        builder.append("<br><br><br> Table Applications where studentID = " + studentID + ": " + myDB.query(query1));
        System.out.println(builder.toString());
  
        myDB.disConnect();
     }
  
}
