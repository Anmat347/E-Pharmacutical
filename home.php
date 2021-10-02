<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>PHARMA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
    
</head>
<body>
	<div class="container">
		<div class="navbar">
			<img src="images/l.png" class="logo">
			<h2>PHARMACEUTICAL</h2>
			<nav>
				<ul id="menuList">
					<li><a href="home.php">Home</a></li>
					<li><a href="carousel.php">About</a></li>
					
					<li><a href="login.php">Login</a></li>
				</ul>
			
			</nav>
			<img src="images/menu.png" class="menu-icon" onclick="togglemenu()">
		</div>
		<div class="row">
			<div class="col-1">
				<!-- <div class="search-box">
					<img src="images/search.png">
					<input type="text"> -->
					<h2>ONLINE PHARMA<br>Simple and Easy</h2>
					<h3>Your Health Is Our Priority</h3>
					<p>Stay home stay safe. We provide the best services. 24 hour care.</p>
					<div class="content">
						<input id= "default-btn" type="file" hidden>
						<div class="btn">
							<button onclick="active()" id="custom-btn">Upload Prescription</button>
						</div>
						<div class="file-name"></div>
					</div>
				
				<!-- </div> -->
			</div>
			<div class="col-2">
				<img src="images/img1.png" class="controll">
				<div class="color-box">
				</div>


			</div>
		</div>
		<div class="social-menu">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		</div>
		<div class="copyright">
          &copy; 2020 | Created & Designed By  <a href="#"> PHARMACEUTICAL</a> All Rights Reserved.
        </div>
	</div>
	<script>
		var menuList = document.getElementById("menuList");

		menuList.style.maxHeight = "0px";
		function togglemenu() {
			if (menuList.style.maxHeight == "0px")
			 {
				menuList.style.maxHeight = "130px"
			}
			else
			{
				menuList.style.maxHeight= "0px"
			}
			// body...
		}
	</script>
	<script>
		const defaultBtn = document.querySelector("#default-btn");
		const customBtn = document.querySelector("#custom-btn");
		const fileName = document.querySelector(".file-name");
		let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_]+$/;
		
		function active() {
			defaultBtn.click();
			// body...
		}
		defaultBtn.addEventListener("change", function(){
			if(this.value){
				let nameValue = this.value.match(regExp);
				fileName.style.display = "block";
				fileName.textContent = nameValue;
			}else{
				fileName.style.display = "block";
				fileName.textContent = "NO file choosen";

			}
		});
	</script>

</body>
</html>