import java.sql.*;

public class addApplication {
    public static void main(String[] args) throws SQLException {
        String Username = "cjwarstl"; // Change to your own username
        String mysqlPassword = "ai4Ri3Eu"; // Change to your own mysql Password
  
        // Connect to the database
        jdbc_db myDB = new jdbc_db();
        myDB.connect(Username, mysqlPassword);
        myDB.initDatabase();

        // For debugging purposes: Show the database before the insert
        StringBuilder builder = new StringBuilder();
        String query1 = "SELECT * from Applications";
        builder.append("<br> Table Applications before:" + myDB.query(query1) + "<br>");
  
        // Parse input string to get restauranrestaurant Name and Address
        String studentID;
        String jobID;
  
        // Read command line arguments
        // args[0] is the first parameter
        studentID = args[0];
        jobID = args[1];
  
        // Insert the new student
        String input = studentID + ",'" + jobID + "'";
        myDB.insert("Applications", input); // insert new restaurant
  
        // For debugging purposes: Show the database after the insert
        builder.append("<br><br><br> Table Applications after:" + myDB.query(query1));
        System.out.println(builder.toString());
  
        myDB.disConnect();
     }
  
}