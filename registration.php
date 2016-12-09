<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="./css/theme.css" rel="stylesheet"> 	
	<link rel="stylesheet" type="text/css" href="./css/register.css">
</head>
<body>
<form>
	<input class="field form-control" type="email" name="email" placeholder="Email-id"><br>
	<input class="field form-control" type="password" name="password" placeholder="Password"><br>
	<input class="field form-control" type="password" name="confpassword" placeholder="Confirm Password"><br>
	<!-- <div class="dropdown theme-dropdown clearfix">
         <a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a> 
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li class="active"><a href="#">Computer Engineering</a></li>
          <li><a href="#">Civil Engineering</a></li>
          <li><a href="#">Mechanical Engineering</a></li>
        </ul>
      </div> -->
	<div class="dropdown">
	  	<button onclick="myFunction()" class="dropbtn">Dropdown</button>
	  	<div id="myDropdown" class="dropdown-content">
	    <a href="#">Computer Engineering</a>
	    <a href="#">Mechanical Engineering</a>
	    <a href="#">Civil Engineering</a>
	    <a href="#"> Other</a>
	  	</div>
	</div>
	<?php 
	if(value== others){ ?>
	<input type="text" name="Branch" placeholder="Please Specify your branch">
	<?php
	}
	?>
</form>

</body>
<script>
	function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</html>