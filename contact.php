<html>
	<head>
		<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta keywords= "Music, POP, tawa college, EOTC" />
    <title>EOTC Week Info</title>
    <link rel="stylesheet" href="css/stylesheet.css" />
		<title>PHP Form Design</title>
		<link rel="stylesheet" href="css/stylesheet.css">
	</head>
<body>
	<div id = "main">
		
		
		<div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="index.html">Home</a>
			<a href="page2.html">POP Icons</a>
			<a href="contact.php">Contact</a>
        </div>
    </div>
		    <header>
        <img src="images/disco ball.png" class="header-image hamburger-logo"
            onclick="openNav()">

        

    </header>
		
		<h1>Contact</h1>
		<?php
		//Get the connection to the database in phpMyAdmin.
		require_once("phpForm_mysqli.php");
		?>
		
		<!-- Form starts here -->
		<div class="contact_container">
		  <form action="connect.php" method="post">
		  <div class="row">
			<div class="column">
			  <label for="name">Full Name</label>
			</div>
			<div class="column2">
			  <input type="text" id="name" name="name" placeholder="Your full name">
			</div>
		  </div>
		  <div class="row">
			<div class="column">
			  <label for="email">Email Address</label>
			</div>
			<div class="column2">
			  <input type="text" id="email" name="email" placeholder="Your email address">
			</div>
		  </div>
		  <div class="row">
			<div class="column">
			  <label for="phone">Contact Number</label>
			</div>
			<div class="column2">
			  <input type="text" id="phone" name="phone" placeholder="A contact number">
			</div>
		  </div>
		  <div class="row">
			<div class="column">
			  <label for="message">Subject</label>
			</div>
			<div class="column2">
			  <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
			</div>
		  </div>
		  <br>
		  <div class="row">
			<input type="submit" value="Submit">
		  </div>
		  </form>
		</div>
		
		<div id="footer">
			&copy; Copyright Alex Dowdle, Tawa College 2026
		</div>
	</div>
		
		<script type="text/javascript" src="js/backtotop.js"></script>
	
	<script src="js/JS.js"></script>
		
</body>
		
<br>
</html>
