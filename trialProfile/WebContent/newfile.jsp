<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Connection"%>
<%
String id = request.getParameter("userid");
String driver = "com.mysql.jdbc.Driver";
String connectionUrl = "jdbc:mysql://localhost:3306/";
String database = "pharma";
String userid = "root";
String password = "";
try {
Class.forName(driver);
} catch (ClassNotFoundException e) {
e.printStackTrace();
}
Connection connection = null;
Statement statement = null;
ResultSet resultSet = null;
%>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="myprop.css">
<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
</head>
<body>

<div class="limiter">
		<div class="container-login100" style="background-image: url('https://images.unsplash.com/photo-1512069772995-ec65ed45afd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');">

		<div class="navbar">
			<img src="C:\xampp\htdocs\MiniProj_DB\images\l.png" class="logo">
			<h2>PHARMACEUTICAL</h2>
			<nav>
				<ul id="menuList">
					<li><a href="http://localhost/MiniProj_DB/home.php">Home</a></li>
					<li><a href="http://localhost/MiniProj_DB/carousel.php">About</a></li>
					<li><a href="http://localhost/MiniProj_DB/medsearch.php">Order</a></li>
					<li><a href="http://localhost/MiniProj_DB/logout.php">Logout</a></li>
					<li><a href="http://localhost:8081/trialProfile/newfile.jsp">Profile</a></li>
				</ul>
			
			</nav>
			<img src="C:\xampp\htdocs\MiniProj_DB\images\menu.png" class="menu-icon" onclick="togglemenu()">
		</div>

<div class="wrap-login100">
<h1 align= 'center'>Profile</h1>
<br><br><br>
<%
try{
connection = DriverManager.getConnection(connectionUrl+database, userid, password);
statement=connection.createStatement();
String sql ="  select * from userprofile where Email in ( select email from loggedUser order by id) order by User_id desc limit 1;";
ResultSet rs = statement.executeQuery(sql);
while(rs.next()){
%>
<center>
<h4>First Name :</h4><i><%=rs.getString("L_Name") %></i><br>
-------------------------------------------------------------------<br>
<h4>Last Name	:</h4><i><%=rs.getString("F_Name") %></i><br>
-------------------------------------------------------------------<br>
<h4>Email :</h4><i><%=rs.getString("Email") %></i><br>
-------------------------------------------------------------------<br>
<h4>User_Id :</h4><i><%=rs.getString("User_id") %></i><br>
-------------------------------------------------------------------<br>
<h4>Address :</h4><i><%=rs.getString("User_Addressr") %></i><br>
-------------------------------------------------------------------<br>
<br></center>
<h3 align = 'center'>Status : Currently Logged In <br></h4>

<%
}
connection.close();
} catch (Exception e) {
e.printStackTrace();
}
%>

</div>
</div>
</div>
</body>
</html>