

<!-- Jake -->



<?php

	$ID = rand(100000, 999999);
	$items = $_POST['items'];
	$array = explode(',', $items);
	$orderSize = sizeof($array);

	function ProductTable($ID)
	{
		// sanitize input and create needed variables 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$addr = $_POST['addr'];
		$city = $_POST['city'];
		$zip = $_POST['zip'];
		$state = $_POST['state'];
		$card_name = $_POST['card_name'];
		$card_num = $_POST['card_num'];
		$Exp_month = $_POST['Exp_month'];
		$Exp_year = $_POST['Exp_year'];
		$cvv = $_POST['cvv'];


		// Initialize connections
		$servername = "localhost";
		$username = "jsphardw_admin";
		$password = "pz-;Ry,ePd%W";
		$dbname = "jsphardw_idkwhattoputhere";

		// connection for Product 
		$conn = new mysqli($servername, $username, $password, $dbname);

		$conn->autocommit(FALSE);

		// Create customer statement
		$Stmt1 = $conn->prepare("INSERT INTO Customer (Customer_ID , Customer_Name , Customer_Email, 
				Customer_Phone,Customer_Address, Customer_City, Customer_Zip, Customer_State, Card_Name, Credit_Card_Number, Exp_Month, Exp_Year, CVV) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

		$Stmt1->bind_param("isssssisssiii", $ID, $name, $email, $phone, $addr, $city, $zip, $state, $card_name, $card_num, $Exp_month, $Exp_year, $cvv);

		$Stmt1->execute();

		$conn->autocommit(true);

		$conn->close();

	}


	function OrderTable($ID,$orderSize,$items)
	{

		$date = date('m/d/Y');

		$OrderID = rand(10000000, 99999999);


		// Initialize connections
		$servername = "localhost";
		$username = "jsphardw_admin";
		$password = "pz-;Ry,ePd%W";
		$dbname = "jsphardw_idkwhattoputhere";

		$conn = new mysqli($servername, $username, $password, $dbname);

		$conn->autocommit(FALSE);

		$Stmt2 = $conn->prepare("INSERT INTO Orders (Order_ID , Order_Date, Order_Qty, Items_Purchased, Order_Account) VALUES (?,?,?,?,?)");
		$Stmt2->bind_param("isisi", $OrderID, $date, $orderSize, $items, $ID);

		$Stmt2->execute();

		$conn->autocommit(true);

		$conn->close();

	}



ProductTable($ID);
OrderTable($ID,$orderSize,$items);
include 'DeleteObjectAdmin.php';

echo "<script>alert('Your Order Has Been Submitted');</script>";

?>




<!DOCTYPE html>
<html>
<head>
<title>Thank You For Your Order!</title>

<style>

* {
			margin: 0;
			padding: 0;
		}
        .entire {
            justify-content: center;
            align-items: center;
        }
        h1 {
            justify-content: center;
            align-items: center;
            padding: 100px 100px 100px;
        }
		.btnblack {
			padding: 8px 20px;
			margin: 7px 0;
			border: 2px solid black;
			border-radius: 8px;
			background: none;
			color: black;
			cursor: pointer;
            align-items: center;
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
    padding: 0px 0px 500px ;
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
    color: black;
}

#main_content .h_divider {
	margin-bottom: 20px;
	height: 500px;
	background-color: #c2c2cd;
	overflow: hidden;
}

</style>
</head>
<body>
	<nav class="navigation background">
		<ul class="nav-list">
			<div class="logo">
				<img src= "logopjs.PNG">
			</div>
		</ul>
		<div class="searchButton">
			<input type="text" name="search" id="search">
			<button class="btn btn-sm">Search</button>
		</div>
	</nav>
<div id="container">
  <!-- Start of Main Content Area -->
  <div id="main_content">
    <h1>Thank You For Your Order!</h1>
    <a href="http://jsphardware.store/homePage.html" class ="btnblack">Return To Home Page </a>
  </div>
  <!-- End of Main Content Area -->
  
  <!-- Start of Page Footer -->
</div>
</section>
</body>
</html>