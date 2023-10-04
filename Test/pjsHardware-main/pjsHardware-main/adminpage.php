

<!-- Jake -->



<!DOCTYPE html>
<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
<style>
:root {
   --size: 1.4;
}
  * {
			margin: 0;
			padding: 0;
		}

		.navigation {
			display: flex;
			align-items: left;
			justify-content: left;
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


		.btn {
			padding: 8px 20px;
			margin: 7px 0;
			border: 2px solid white;
			border-radius: 8px;
			background: none;
			color: white;
			cursor: pointer;
		}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
</head>
<body>
    
  <nav class="navigation background">
		<ul class="nav-list">
			<div class="logo">
				<img src= "logopjs.PNG">
			</div>
			<li><a>LOGGED IN AS ADMIN</a></li>
			<li><a href="logout.php">Log Out</a></li>
      <form id="report" action="report.php" method="post">
      <li><input type="submit" value="View Inventory" class = "btn"></input></li>
	</form>
      <form id="report" action="product_count.php" method="post">
      <li><input type="submit" value="Product Count" class = "btn"></input></li>
	</form>
		</ul>
	</nav>

<script>
  $('body').terminal(function(command, term) {
    var cmd = $.terminal.parse_command(command);

    term.push({
// function to Insert products into the database 
// command = Insert Product_ID Product_Name Product_Description Product_Price Departent_Name

		Insert: function ($ID, $name, $desc, $price, $dept) 
		{
		var ID = $ID;
		var name = $name;
		var desc = $desc;
		var price = $price;
		var dept = $dept;

		try { 

			$.ajax({
            	type: 'POST',
            	url: 'InsertProduct.php',
            	data: { ID:ID, name:name, desc:desc, price:price, dept:dept},
            	success: function(result) {
                	$('#sonuc').html(result);
            	},
           		error: function() {
                	alert('ERROR');
            	}
        	});

			alert("Sucess")
		}

		catch(err) { 
		alert(err.message);
		}
	  },

// function to edit the products price
// command = EditP newprice  Product_ID

		EditP: function ($price, $ProdID) 
		{
		var price = $price;
		var ProdID = $ProdID;

		try { 

			$.ajax({
            	type: 'POST',
            	url: 'EditPriceAdmin.php',
            	data: { price:price, ProdID:ProdID},
            	success: function(result) {
                	$('#sonuc').html(result);
            	},
           		error: function() {
                	alert('ERROR');
            	}
        	});

			alert("Sucess")
		}

		catch(err) { 
		alert(err.message);
		}
	  },

// function to edit the products description
// command = EditD newdescription Product_ID

	EditD: function ($desc, $ProdID) 
		{
		var desc = $desc;
		var ProdID = $ProdID;

		try { 

			$.ajax({
            	type: 'POST',
            	url: 'EditDescAdmin.php',
            	data: { desc:desc, ProdID:ProdID},
            	success: function(result) {
                	$('#sonuc').html(result);
            	},
           		error: function() {
                	alert('ERROR');
            	}
        	});

			alert("Sucess")
		}

		catch(err) { 
		alert(err.message);
		}
	  },

// function to delete product
// command = DeleteProduct Product_ID

	DeleteProduct: function ($items) 
		{
		var items = $items;

		try { 

			$.ajax({
            	type: 'POST',
            	url: 'DeleteObjectAdmin.php',
            	data: { items:items },
            	success: function(result) {
                	$('#sonuc').html(result);
            	},
           		error: function() {
                	alert('ERROR');
            	}
        	});

			alert("Sucess")
		}
		catch(err) { 
		alert(err.message);
		}
	  },


// function to delete customer
// command = DeleteCustomer Product_ID

	DeleteCustomer: function ($val) 
		{
		var val = $val;

		try { 

			$.ajax({
            	type: 'POST',
            	url: 'DeleteCustomer.php',
            	data: { val:val },
            	success: function(result) {
                	$('#sonuc').html(result);
            	},
           		error: function() {
                	alert('ERROR');
            	}
        	});

			alert("Sucess")
		}
		catch(err) { 
		alert(err.message);
		}
	  }

	});
});

</script>
</body>
</html>