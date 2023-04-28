import java.sql.*;

public class addJob {
    public static void main(String[] args) throws SQLException {
        String Username = "cjwarstl"; // Change to your own username
        String mysqlPassword = "ai4Ri3Eu"; // Change to your own mysql Password
  
        // Connect to the database
        jdbc_db myDB = new jdbc_db();
        myDB.connect(Username, mysqlPassword);
        myDB.initDatabase();
  
        // For debugging purposes: Show the database before the insert
        StringBuilder builder = new StringBuilder();
        String query1 = "SELECT * from Jobs";
        builder.append("<br> Table Jobs before:" + myDB.query(query1) + "<br>");
  
        // Parse input string to get restauranrestaurant Name and Address
        String jobID;
        String companyName;
        String jobTitle;
        String salary;
        String desiredMajor;
  
        // Read command line arguments
        // args[0] is the first parameter
        jobID = args[0];
        companyName = args[1];
        jobTitle = args[2];
        salary = args[3];
        desiredMajor = args[4];
  
        // Insert the new student
        String input = jobID + ",'" + companyName + "','" + jobTitle + "','" + salary + "','" + desiredMajor  + "'";
        myDB.insert("Jobs", input); // insert new restaurant
  
        // For debugging purposes: Show the database after the insert
        builder.append("<br><br><br> Table Jobs after:" + myDB.query(query1));
        System.out.println(builder.toString());
  
        myDB.disConnect();
     }
  
}
