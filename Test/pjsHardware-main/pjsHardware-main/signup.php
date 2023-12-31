<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAMS Travel Agency</title>
    <style>
        body {
            font-family: 'Creepster', cursive, Arial, sans-serif;
            background-color: #2e2e2e;
            color: #f4a742;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333333;
            padding: 10px;
            text-align: center;
        }

        .navigation {
			display: flex;
			align-items: center;
			justify-content: space-start;
			position: sticky;
			top: 1;
			cursor: pointer;
            padding: 0 20px;
		}

        .background {
			background: #333333;
			background-blend-mode: darken;
			background-size: cover;
		}

        nav {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            background-color: #1a1a1a;
        }

        .nav-list {
			width: 70%;
			display: flex;
			align-items: center;
			padding: 0px 0px 35px;
		}

        .logo {
            flex: 1;
		}

		.logo img {
			width: 100px;
			border-radius: 35px;
		}

        nav a {
            color: #f4a742;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
            border: 1px solid #f4a742;
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            text-align: center;
            padding-top: 30px;
        }

        img.spot {
            max-width: 100%;
            border: 5px solid #f4e542;
            margin-bottom: 20px;
        }

        h1, h2, .contact-info {
            font-family: 'Creepster', cursive;
        }

        .title-container {
            flex: 15;
            text-align: center;
            position: relative; right: 25px;
        }

        .contact-us {
            background-color: #1a1a1a;
            padding: 20px 0;
            margin-top: 50px;
        }

        h1, h2, .contact-info {
            font-family: 'Creepster', cursive;
        }

        .contact-info {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }  
        
        .Homepage {
            background-image: url("HalloweenBackground2.jpg");
            height: 100%;
            transform: scale(1);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }	

        .account {
            flex: 1;
        }

        .account img {
            width: 75px;
			border-radius: 20px;
            padding-right: 25px;
        }

        nav a:not(.account-link) {
            color: #f4a742;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
            border: 1px solid #f4a742;
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .account-link,
        .account-link:hover,
        .account-link:active {
            padding: 0;
            border: none;
            background: none;
            color: inherit;
            border-radius: 0;
            transition: none;
        }

        nav a.account-link:hover {
            background-color: transparent;
            color: inherit;
        }

    </style>
</head>

<body>

    <header>
        <nav class="navigation background">
            <div class="logo">
               <img src="JTALogo2.jpeg">
            </div>
            <div class="title-container">
                <h1>JAMS Travel Agency</h1>
                <h4>Your Spooky Travel Destination</h4>
            </div>
        </nav>
    </header>


<head>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAMS Travel Agency - Customer Signup</title>
    <style>


        .signup-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 10px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #f4e542;
            border-radius: 5px;
        }

        .signup-form button {
            background-color: #f4e542;
            color: #333333;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <section class="Homepage"> 

            <section class="signup-form">
                <h2>Customer Portal</h2>
                <form action="includes/signup.inc.php" method="post">
                    <?php
                    signup_inputs();
                    ?>
                    <button>Signup</button>
                 </form>
                 <?php
                 check_signup_errors();
                 ?>

            </section>
            <section class="signup-form">
                <h3>Login</h3>

                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button>Login</button>
                </form>
                <?php
                    check_login_errors();
                    ?>
            
        </section>

    <footer>
        <!-- Your footer content here -->
    </footer>

    <div class="contact-us">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>Email: example@email.com</p>
            <p>Phone: (123) 456-7890</p>
            <p>Address: IDK SOME RANDO ADDRESS</p>
            <p>&copy; 2023 JAMS Travel Agency</p>
        </div>
    </div>
</body>

</html>


</body>

</html>