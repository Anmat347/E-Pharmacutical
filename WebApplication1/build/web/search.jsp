<%-- 
    Document   : search
    Created on : 24 Oct, 2020, 6:39:01 PM
    Author     : Atruba
--%>

<%@page import="java.sql.*"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="com.mysql.jdbc.Statement"%>
<%@page import="com.mysql.jdbc.Connection"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <table border="1">
            <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            </tr>
            <%
           try{
            String JDBC_DRIVER = "com.mysql.jdbc.Driver";
            String DB_URL = "jdbc:mysql://localhost:3306/pharma";
            String USER = "root";
            String PASS = ""; 
            Class.forName("com.mysql.jdbc.Driver");

            Connection myconn= null;
//            Statement mystat=null;
            ResultSet myrs= null;
     
            java.sql.Connection con =
                    DriverManager.getConnection(
                               DB_URL,USER,PASS );
            java.sql.Statement st = con.createStatement();
            myrs = st.executeQuery("select * from loggedUser order by id desc limit 1");
            
            while(myrs.next()){
             
                System.out.println(myrs.getString("email"));
              
            }
        }
      finally{
         System.out.println("Not Found");   
      }
                %>
        </table>
    </body>
</html>
