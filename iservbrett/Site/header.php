<!DOCTYPE html>
<html lang="de">
  <head>
    <link rel="stylesheet" href="../CSS/nav_alt.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBS Kleinanzeigen</title>
	
	<style>
	
	
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
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

.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
	
	
	
	
	
	
	</style>
  </head>  
  <body>

<div class="topnav" id="myTopnav">
<a href="../image">  <img src="Logo_4c  Juge wir ahen es geschaft SVG JOONGE.svg" width="10%" align="right"  alt="Logo"></a>

    <div class="dropdown">
    <button class="dropbtn">Menü 

		
      <i class="fa fa-caret-down"></i>

    <div class="dropdown-content">
      <a href="#">Login</a>
      <a href="#">Neue Anzeigen</a>
      <a href="#">Meine Anzeigen</a>
	  <a href="#">Kategorie</a>
      <a href="#">Mein Profil</a>
    </div>
	

						
  </div>

</div>
  <div>
  
  	<a href="#">  <img src="Logo_ohne_4c.png" width="5%" align= "right"  alt="Logo"></a>
	</div>

<div style="padding-left:16px">

</div>
  
  <h1> </h1>
  
  
  
  
  
  
  
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

  </body>
</html>