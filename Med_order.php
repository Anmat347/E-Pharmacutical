<!DOCTYPE html>
<html lang="en">
<head>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style type="text/css">
  ul{
    background-color: black;
    cursor: pointer;
  }
  li{
    padding: 12px;
  }
</style>
</head>
<body>
  <br><br>
  <div class="container" style="width: 500px;">
    <h3 align="center">E-Phramaceutical Conduct</h3>
    <form method="post">
    <label>Enter Medicine Name</label>
    <input type="tex" name="term" id="medi" class="form-control"placeholder="Medicine Names">
    <div id="medicinelist"></div>
  </div>
  </form>
<script>
 //$(document).ready(function(){ 
   // $('medicine').keyup(function(){
     // var query = $(this).val();
      //if(query!=''){
        //$.ajax({
          //url="search.php";
          //method:"post";
          //data : {query:query},
          //success : function(data){
            //$('medicinelist').fadeIn();
            //$('medicinelist').html(data);
          //}
          //});
      //}
        //else{
          //  $('medicinelist').fadeOut();
            //$('medicinelist').html("");  
            //}
         // });
      //  $(document).on('click','li',function(){
        //  $('medicine').val($(this).text());
          //$('medicinelist').fadeOut();
       // });
 // });

$(function() {
    $("#medi").autocomplete({
        source: "search.php",
    });
});
</script>
</body>
</html>
