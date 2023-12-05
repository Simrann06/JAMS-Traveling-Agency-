
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
            padding: 0 0px;
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
            max-width: 1500px;
            margin: auto;
            text-align: center;
            padding-top: 25px;
        }

        img.spot {
            width: 600px;  
            height: 350px; 
            object-fit: cover; 
            border: 5px solid #f4a742;
            margin-bottom: 50px;
        }
        
        .contact-us {
            background-color: #1a1a1a;
            padding: 20px 0;
            margin-top: 50px;
            text-align: center;
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

        .title-container {
            flex: 15;
            text-align: center;
            position: relative; right: 25px;
        }

        .Homepage {
            background-image: url("HalloweenBackground1.jpg");
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

        .tagline, .about, .cta {
            padding: 20px 0;
            font-size: 35px;
        }

        .tagline h2 {
            font-size: 50px; 
        }

        .tagline p {
            font-size: 25px;
        }

        .destination-grid, .reviews-grid {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }

        figure {
            text-align: center;
        }

        figcaption {
            font-size: 35px;
            margin-top: 10px;
            color: #f4a742;
        }

        blockquote {
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 20px;
            border-radius: 10px;
        }

        cite {
            display: block;
            margin-top: 10px;
            font-style: italic;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f4a742;
            color: #2e2e2e;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #e49635;
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

    <nav>
        <a href="HomePage2.php">Home</a>
        <a href="packages.html">Packages</a>
        <a href="cart.html">Shopping Cart</a>
        <a href="http://127.0.0.1:7860">ChatBot Helper</a>
    </nav>

    <section class="Homepage"> 

   <div class="container tagline">
    <h2>Embark on the Most Haunting Adventures!</h2>
    <p>Discover the world's spookiest destinations with JAMS.</p>
</div>

<div class="container about">
    <h3>About JAMS Travel Agency</h3>
    <p>We specialize in curating the most thrilling and spine-chilling travel experiences. With us, every journey becomes a haunting tale to tell!</p>
</div>

<div class="container featured-destinations">
    <h3>Featured Spooky Destinations</h3>
    <div class="destination-grid">
        <figure>
            <img src="STAugestine.jpg" alt="Spooky Destination 1" class="spot">
            <figcaption>St. Augustine - The Haunted City</figcaption>
        </figure>
        <figure>
            <img src="Paris (Custom).jfif" alt="Spooky Destination 2" class="spot">
            <figcaption>Paris - Ghosts of the Catacombs</figcaption>
        </figure>
    </div>
</div>

<div class="container customer-reviews">
    <h3>What Our Travelers Say</h3>
    <div class="reviews-grid">
        <blockquote>
            "Our trip to St. Augustine with JAMS was a surreal experience! The haunted attractions were genuinely spine-tingling. 
            As for the hotel, it seamlessly combined historic charm with modern comforts. The candlelit ghost tour was an absolute 
            highlight, and the guide's tales were hauntingly memorable. I'd give this package a solid 5 stars!"
            <cite>- Lucy M.</cite>
        </blockquote>
        <blockquote>
            "Paris through the lens of JAMS is unlike anything I'd imagined. The Catacombs tour was deeply eerie, and our guide seemed
             to know every dark tale of the city. The hotel we stayed at was a perfect blend of luxury and old-world mystery, making our nights 
             as intriguing as our days. The attention to detail and the overall experience merits a resounding 5 stars!"
            <cite>- Mark S.</cite>
        </blockquote>
    </div>
</div>

<div class="container cta">
    <h3>Ready for a spine-chilling adventure?</h3>
    <a href="packages.html" class="cta-button">Explore More Packages Here!</a>
</div>

<div class="contact-us">
    <div class="contact-info">
        <h2>Contact Us</h2>
        <p>Email: example@email.com</p>
        <p>Phone: (123) 456-7890</p>
        <p>Address: IDK SOME RANDO ADDRESS</p>
        <p>&copy; 2023 JAMS Travel Agency</p>
    </div>
</div>
</nav>
</section>
</body>

</html>