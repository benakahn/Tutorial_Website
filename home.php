<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel = "icon" href = "images/e.jpg" type = "image/x-icon"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
body{
         margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;

}
		.topnav {
  overflow: hidden;
  background-color: #111;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}
   
    .topnav a:hover {
  background-color: #ddd;
  color: black;
}
a.right{
    float: right;
}
.topnav a.active {
  background-color: #03b6fc;
  color: white;
}

.topnav .icon {
  display: none;
}

.rm a{
	
	text-decoration: none;
}
.rm a:visited{
	color: black;
} 
.rm a:hover{
	color: black;
}
.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     background-color:  white;
     margin: 2%;
    }
.title{
 
  text-align: center;
  padding: 10px;
  
 }
 h1{
  font-size: 20px;
 }
 .main{

 margin: 2%;
}
.des{
  padding: 0px;
  text-align: center;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius:2px;
}
button{
  margin-top: 20px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: #ddd;
  color: black;
  transition: .5s;
  cursor: pointer;
}
@media only screen and (min-width: 300px) {
  .text {font-size: 11px}
  a.right{
    float: left;
  }
	h1{ font-size : 11px;}

}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
	</style>
</head>
<body>
<header>
	<div class="topnav" id="myTopnav">
  <a href="#" class="active">Profile</a>
 
  <a href="index.php" class="right">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <br>
</div>
<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</header>

<h2 style="color:black;"><?php
$name = $_REQUEST['name'];
echo "Welcome ".$name." ! ! !";
?></h2>

<hr>
<h2 style="margin-left: 80px;">What to Learn????</h2>
<div class="card">
<div class="title">
 <h1>
Tutorials</h1>
</div>
<div class="des">
<button>
	<div class="rm"><a href="course.html">Read More...</a></div></button>
</div>
</div>
<br>
<h2 style="margin-left: 100px;">Excerise</h2>
<!--div class="card">
	
<div class="title">
 <h1>
Quizs</h1>
</div>
<div class="des">
<button>
	<div class="rm"><a href="quiz.html">Read More...</a></div></button>
</div>
</div-->

<div class="card">
  
<div class="title">
 <h1>
Excerise</h1>
</div>
<div class="des">
<button>
  <div class="rm"><a href="execrise.html">Read More...</a></div></button>
</div>
</div>

 <!-- <?php
     // *$conn = mysqli_connect("localhost","root","");
      //$db = mysqli_select_db($conn,'education');
   //   $name = $_REQUEST['name'];
    
    ///  $sql = "SELECT s.email from subscribe s where  not s.email in(SELECT l.email from logreg l where l.name='$name')";
     // $sql1="SELECT s.email from subscribe s left join logreg l on s.email=l.email";
    //  if (mysqli_query($conn, $sql)){
    //  echo "<script>alert('aaaa')</script>";
  //  }else{
   //  echo "<script>alert('bbbb')</script>";
  //  }
  ?>-->

</body>
</html>
