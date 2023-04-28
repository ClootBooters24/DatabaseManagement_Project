import java.sql.*;

public class viewApplicationsMajor {
    public static void main(String[] args) throws SQLException {
        String Username = "cjwarstl"; // Change to your own username
        String mysqlPassword = "ai4Ri3Eu"; // Change to your own mysql Password
  
        // Connect to the database
        jdbc_db myDB = new jdbc_db();
        myDB.connect(Username, mysqlPassword);
        myDB.initDatabase();
  
        StringBuilder builder = new StringBuilder();
        String major;

        // Read command line arguments
        major = args[0];

        // Insert the new student
        String query1 = "SELECT * FROM Applications INNER JOIN Jobs ON Jobs.jobID = Applications.jobID INNER JOIN Students ON Students.studentID = Applications.studentID WHERE Students.major = '" + major + "';";

        // For debugging purposes: Show the database
        builder.append("<br><br><br> Table Applications where major = " + major + ": " + myDB.query(query1));
        System.out.println(builder.toString());
  
        myDB.disConnect();
     }
  
}
