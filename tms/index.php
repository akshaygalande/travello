<html>
<head>
<title>Treavello</title>
<link rel="stylesheet" type="text/css" href="styles/styles.css"/>



</head>

<body>
<?php
include"header.php";
?>

<div class="slideshow">
  <img class="mySlides" src="images/slideshow1.jpg" style="width:100%" height="500px;">
  <img class="mySlides" src="images/slideshow2.jpg" style="width:100%"  height="500px;">
  <img class="mySlides" src="images/slideshow3.jpg" style="width:100%"  height="500px;">
 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

<div class="content">
<div class="right" >
<center><h2>Explore Products..</h2></center>
</div>
<div class="left">
<div class="inleft">
<center><h2>Sign In</h2>
<form action="" method="POST">
<input class="textbox" type="text" name="email" placeholder="Enter Email-Id"/>
<br>
<input class="textbox" type="password" name="pass" placeholder="password"/>
<br>
<input class="button" type="submit" value="LogIn" />
<Button class="button" onClick="signup()">Sign Up</button>
</form>
</div>
</div>
</div>
<?php
include"footer.php";
?>
</body>
</html>