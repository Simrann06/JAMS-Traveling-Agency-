
<!-- Phillip -->


<!DOCTYPE html>


<html>
<head>
<title>CPU's</title>

<style>

* {
			margin: 0;
			padding: 0;
		}

		.navigation {
			display: flex;
			align-items: center;
			justify-content: center;
			position: sticky;
			top: 1;
			cursor: pointer;
		}

		.background {
			background: #000;
			background-blend-mode: darken;
			background-size: cover;
		}

		.nav-list {
			width: 70%;
			display: flex;
			align-items: center;
			padding: 0px 0px 35px;
		}

		.logo {
			display: flex;
			justify-content: center;
			align-items: center;

		}

		.logo img {
			width: 180px;
			border-radius: 50px;
		}

		.nav-list li {
			list-style: none;
			padding: 25px 35px;
		}

		.nav-list li a {
			text-decoration: none;
			color: white;
		}

		.nav-list li a:hover {
			color: grey;
		}

		.searchButton {
			width: 30%;
			text-align: right;
			padding: 0px 10px 35px;
		}

		#search {
			padding: 5px;
			font-size: 17px;
			border: 2px solid rgb(128, 128, 128);
			border-radius: 9px;
			padding: 0px 0px 5px;
		}

h {
	font-weight: normal;
	font-size: 40px;
  color: black;
  text-decoration: underline 3px;
}
body {
	height: 100%;
	background-color: #ffffff;
	color: #85859c;
	font-family: tahoma, arial, sans-serif;
	font-size: 15px;
	text-align: center;
}

a {
	color: #85859c;
	text-decoration: underline;
}

a:hover {
	color: #69699c;
}

span {
	display: none;
}

img {
	border: none;
}

p {
	margin: 10px 0px 5px;
	text-align: justify;
	line-height: 14px;
}

.clearthis {
	margin : 0px;
	height : 1px;
	clear : both;
	float : none;
	font-size : 1px;
	line-height : 0px;
	overflow : hidden;
}

#container {
	margin: 0px auto;
	width: 780px;
	border-color: #9e9ec3;
	border-width: 0px 1px 1px;
	border-style: solid;
}

input {
	padding-left: 2px;
	background-color: #fff;
	color: #85859c;
	font-family: tahoma, arial, sans-serif;
	font-size: 11px;
}


/* Page Header */


/* Main Content Area */

#main_content {
	margin-right: 2px;
	width: 644px;
	text-align: center;
	float: right;
}

#main_content .h_divider {
	margin-bottom: 2px;
	height: 1px;
	background-color: #c2c2cd;
	overflow: hidden;
}


/* New Item Description */

#new_item {
	margin: 0px auto 2px;
	padding: 5px 10px;
	width: 600px;
	text-align: justify;
}

#new_item_header {
	margin-top: 10px;
	float: left;
	width: 348px;
}

#new_item_header h1 {
	color: #434367;
	font-size: 18px;
	font-weight: normal;
}

#new_item_header h2 {
	color: #434367;
	font-size: 14px;
	font-weight: bold;
	font-family: arial, tahoma, sans-serif;

}

#new_item_image {
	width: 245px;
	float: right;
	overflow: hidden;
	text-align: right;
}

#new_item_text {
	float: left;
	clear: left;
	width: 348px;
}

#new_item_link {
	float: left;
	clear: left;
	width: 348px;
	font-weight: bold;
	text-align: right;
}

#new_item_link a {
	text-decoration: none;
}


/* Sub Items Descriptions */

.sub_items {
	margin-bottom: 2px;
	margin-top: 5px;
	width: 644px;
	background: url('images/item_sub_background.gif') repeat-y 0px 0px;
	text-align: justify;
}

.sub_left {
	padding-left: 5px;
	width: 300px;
	float: left;
}

.sub_right {
	padding-right: 15px;
	width: 315px;
	float: right;
}

.sub_items_header {
	padding-left: 20px;
	padding-top: 10px;
	float: left;
	width: 110px;
}

.sub_items_header h1 {
	color: #434367;
	font-size: 14px;
	font-weight: bold;
	font-family: arial, tahoma, sans-serif;
}

.sub_items_header h2 {
	color: #434367;
	font-size: 12px;
	font-weight: normal;
	font-family: arial, tahoma, sans-serif;
}

.sub_items_image {
	margin-top: 15px;
	float: right;
	text-align: right;
}

.sub_items_text {
	padding-left: 20px;
	float: left;
	clear: left;
	width: 110px;
}

.sub_items_cartinfo {
	padding-top: 12px;
	padding-left: 20px;
	color: #820721;
	font-family: arial, tahoma, sans-serif;
	float: none;
	clear: both;
}

.sub_items_cartinfo h2 {
	font-size: 14px;
	font-weight: bold;
}

.sub_items_cartinfo .price {
	float: left;
	text-align: left;
}

.sub_items_cartinfo .addtocart {
	margin-top: 2px;
	float: right;
	width: 100px;
	height: 12px;
	text-align: left;
	background: url('images/button_addtocart.gif') no-repeat 0% 0%;
}


/* Page Footer */


/* FOOTER */

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

body{
  font-family: 'Montserrat', sans-serif;
}

.main-footer {
  padding: 70px 0;
  display: flex;
  justify-content: space-evenly;
  background-color: black;
}

.main-footer ul {
  list-style: none;
}

.main-footer h1 {
  font-size: 22px;
  line-height: 117%;
  color: #ffffff;
  margin-bottom: 10px;
  font-weight: 500;
}

.main-footer h2 {
  color: #ffffff;
  font-weight: 500;
}

.main-footer ul li a {
  color: #ffffffcc;
  text-decoration:none;
}

footer {
  background-color: black;
  border-top: 1px solid black;
  font-size: 17px;
  padding: 15px 5px;
  color: #ffffff;
  text-align: center;
}

footer a {
  text-decoration: none;
  color: #ffffff;
}

.logoinfo p {
  color: #ffffff;
  font-size: 17px;
  margin-top: 5px;
}

.contact-details {
  margin-top: 20px;
}

.contact-details li {
  list-style: none;
  margin: 10px 0;
}

.contact-details li a {
  text-decoration:none;
  color: #f1f1f1;
}

.contact-details .fa {
  color: #f1f1f1;
  margin-right: 10px;
}

.com ul li{
  padding:5px 0;
}

@media only screen and (max-width: 749px) {
  .main-footer {
    padding:20px;
    display:grid;
    grid-template-columns: 1fr 1fr;
  }
    .info{
      padding:20px 0;
  }
}
</style>
</head>
<body>

	<nav class="navigation background">
		<ul class="nav-list">
			<div class="logo">
				<img src= "logopjs.PNG">
			</div>
			<li><a href="http://jsphardware.store/homePage.html">Home</a></li>
            <li><a href="http://jsphardware.store/productpage_main.html">Products</a></li>
			<li><a href="http://jsphardware.store/checkout.html">Cart / Check Out</a></li>
		</ul>
		<div class="searchButton">
			<input type="text" name="search" id="search">
			<button class="btn btn-sm">Search</button>
		</div>
	</nav>

<h>Accessories</h>

<div id="container">
  <!-- Start of Main Content Area -->
  <div id="main_content">
<?php

$val = $_POST['val'];

$servername = "localhost";
$username = "jsphardw_admin";
$password = "pz-;Ry,ePd%W";
$dbname = "jsphardw_idkwhattoputhere";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql =("SELECT * FROM Product WHERE Department_Name = 'Accessories'");

$result = $conn->query($sql);
if ($result->num_rows > 0) {

$i = 0;
while($row = $result->fetch_assoc())
{
    echo "<table border='1'>";

    echo "<tr>";
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";

    echo "</table><br />";
}
} 
else {
      echo "Error";
}
$conn->close();

?>
  </div>
  <!-- End of Main Content Area -->
  
  <div class="clearthis">&nbsp;</div>
  <!-- Start of Page Footer -->
  <div id="page_footer">
    <div id="product_brands">
    </div>
    <div class="clearthis">&nbsp;</div>
  </div>
  <!-- End of Page Footer -->
</div>
</section>

	<section id="footer">
  <div class="main-footer">
    <div class="logoinfo" data-aos="fade-up">
      <h2>PJS Hardare</h2>
      <div class="contact-details">
        <h1>Contact Us</h1>
        <li>
          <div class="fa fa-phone"></div><a href="tel:864-999-9999">864-999-9999</a></li>
        <li>
          <div class="fa fa-envelope"></div><a href="mailto:support@pjshardware.com">support@pjshardware.com</a></li>
        </li>
    </div>
  </div>
  <div class="com " data-aos="fade-up">
    <h1>About</h1>
    <ul>
		<li><a href="http://jsphardware.store/product_page1.html">Products</a></li>

		<li><a href="http://jsphardware.store/checkout.html">Cart / Check Out</a></li>
    </ul>
  </div>
  </div>
<footer>© PJS Hardware Supply Co 2022 All Rights Reserved</footer>
</section>
</body>
</html>