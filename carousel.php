<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .bg {
  /* The image used */
  background-image: url("https://www.rnz.co.nz/assets/news_crops/85269/eight_col_medicine.jpg?1565217199");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    .centered {
  font-size:25px;
  position: absolute;
  top: 30%;
  left: 70%;
  background: cover;
  transform: translate(-50%, -50%);}
  .about-section {
  padding: 50px;
  text-align: center;
  background-repeat: repeat;
  background-size: auto;
}
.para{
  font-weight: bold;
  font-size: 20px;
  color: green;
}
.p2{
  font-size: 20 px;
  font-weight: bold;
   background: -webkit-linear-gradient(#003300, #003366);
    -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

}
h3{
  font-size: 30px;
  font-weight: bolder;
    background: -webkit-linear-gradient(#ff0066, #6666ff);
    -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
p{
 font-weight: bold;
 font-size: 30px;
  background: -webkit-linear-gradient(#ff3399, #003366);
    -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

  </style>
}
}
</head>
<?php 
// if(isset($_SESSION('email'))){
//       include('navlogout.php');
//     }
// else{
//       include('nav.php');
//     } 
include('nav.php');
?>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('https://images.unsplash.com/photo-1512069772995-ec65ed45afd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');">
      

 <!--  <div style="background-image: url(https://i.pinimg.com/474x/44/62/0a/44620a5a650fbd067c526ab9851fe50a.jpg);" class="about-section"> -->
  <h1 style="font-size:50px;">About Us </h1>
  <p class="para" >Pharmaceutical is something related to prescription drugs or pharmacies.</p>
  <p class="para" > A pharmaceutical or pharmacological preparation or product; a drug. (medicine) Of, or relating to pharmacy or pharmacists..</p>
</div>
<div style="background-image: url(https://static1.bigstockphoto.com/4/5/3/large1500/354367319.jpg);" class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/1f/Woman_1.jpg"  style="width:50%;">
         <div class="centered">TEAM MEMBER
          
        
          <h3>ATRUBA MOMIN</h3>
          <p>CEO & Co-Founder</p>
          
          <p2 class="p2" >Certified medical technologist with 5 years of experience</p>
        </div>
      </div>

      <div class="item">
        <img src="https://scontent.fbom26-1.fna.fbcdn.net/v/t1.0-9/p960x960/95216200_566174770684715_1949291651981639680_o.jpg?_nc_cat=104&_nc_sid=8024bb&_nc_ohc=tprr9Ioyk2kAX_LIMpK&_nc_ht=scontent.fbom26-1.fna&tp=6&oh=a931b09cb0b90bddf6d2b5747ead695c&oe=5FA956FE" style="width:50%;">
         <div class="centered">TEAM MEMBER
        
          <h3>MASEERAH KHAN</h3>
          <p>CTO & Co-Founder</p>
          <p2 class="p2" >Medical billing and coding manager with 10+ years of experience in different healthcare environments</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/5a594779484133.5cc45fe2adf0a.jpg" style="width:50%;">
         <div class="centered">TEAM MEMBER
        
          <h3>ANWARI KHAN</h3>
          <p>COO & Co-Founder</p>
          <p2 class="p2" >Certified Medical Assistant with 5+ years of experience</p>
          <p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
