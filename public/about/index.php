<?php
$apiKey = "4ac76d1d54dfff90b79dfb9290d85035";
$cityId = "CITY ID";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="exercise6.js">
</script>
	<head>
		<meta name="author" content="">
        <meta name="description" content="Page to filter stores based on categories">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Comptaible" content="ie=edge">
        <title>About</title>
        <link rel="stylesheet" href="about.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="icon.gif">
	<body>
		<nav>
			<a href="index.html"><img class="logo" src="../assets/logo.png"></a>
			<div class="search-container">
			    <form>
			      	<input type="text" class="search" placeholder="Search..." name="search">
			      	<button type="submit"><i class="fa fa-search" style="scale: 1.5; color: white;"></i></button>
			    </form>
		  	</div>

		  	<a href="#accounts"><button id="account"><i class="fa fa-user" style="scale: 1.5; color: white;"></i></button></a>
		  	<a href="#settings"><button id="settings"><i class="fa fa-gear" style="scale: 1.5; color: white;"></i></button></a>
		  	<a href="#cart"><button id="cart" href="#cart"><i class="fa fa-shopping-cart" style="scale: 1.5; color: white;"></i></button></a>

		  	<a id="sign_in" href="login/login.html"><button>SIGN IN</button></a>
		</nav>

		<div class="contents">
            <h1>About</h1>
			<hr>
			<p>
				We are a team of 5 students who decided to open up their own e-commerce website based
				out of Windsor, Ontario. We allow out users to both sell their own products on a store as well 
				as purchase from other user's stores. Stores can fill a specific niche or appeal to a 
				wide range of customers. If you can dream it, Stop One has it. Your Stop One shop. 
				<br>
				<br>
				~ Stop One Team (Group 8)
			</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94443.86456302472!2d-82.99464225390622!3d42.2919534981513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2ac1b54f886b%3A0xb66cd49527fcdc51!2sWindsor%2C%20ON!5e0!3m2!1sen!2sca!4v1658191726556!5m2!1sen!2sca" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
		<a href="index.html"><button class="top">Back to top</button></a>
		<div class="misc"></div>
		<script type="text/javascript" src="../script.js"></script>

        
        <div class="report-container">
            <h2><?php echo $data->name; ?> Weather Status</h2>
            <div class="time">
                <div><?php echo date("l g:i a", $currentTime); ?></div>
                <div><?php echo date("jS F, Y",$currentTime); ?></div>
                <div><?php echo ucwords($data->weather[0]->description); ?></div>
                <div>29&#8451; </div>
                <i style="margin:0px 0px;"class="fa fa-cloud" style="font-size:36px"></i>

            </div>
            <div class="weather-forecast">
                
                
                    
                    
            </div>
            <div class="time">
                <div>Humidity: 30%</div>
                <div>Wind: 40km/h</div>
            </div>
        </div>
	</body>
</head>