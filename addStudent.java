import java.sql.*;

public class addStudent {
    public static void main(String[] args) throws SQLException {
        String Username = "cjwarstl"; // Change to your own username
        String mysqlPassword = "ai4Ri3Eu"; // Change to your own mysql Password
  
        // Connect to the database
        jdbc_db myDB = new jdbc_db();
        myDB.connect(Username, mysqlPassword);
        myDB.initDatabase();
  
        // For debugging purposes: Show the database before the insert
        StringBuilder builder = new StringBuilder();
        String query1 = "SELECT * from Students";
        builder.append("<br> Table Students before:" + myDB.query(query1) + "<br>");
  
        // Parse input string to get restauranrestaurant Name and Address
        String studentID;
        String studentName;
        String major;
  
        // Read command line arguments
        // args[0] is the first parameter
        studentID = args[0];
        studentName = args[1];
        major = args[2];
  
        // Insert the new student
        String input = studentID + ",'" + studentName + "','" + major + "'";
        myDB.insert("Students", input); // insert new restaurant
  
        // For debugging purposes: Show the database after the insert
        builder.append("<br><br><br> Table Students after:" + myDB.query(query1));
        System.out.println(builder.toString());
  
        myDB.disConnect();
     }
  
}
