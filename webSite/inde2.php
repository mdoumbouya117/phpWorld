<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<form method="GET" name="weatherForm" action="inde2.php">
City: <input type="text" id="city" name="city"/> <br>
Country: <input type="text" id="city" name="country"/> <br>
<input type="submit" name="submit" value="submit"/>
	
</form>
<?php
if (isset($_GET)) {

	$user_city = (isset($_GET['city'])) ? $_GET['city'] : ""	;
	$user_country = (isset($_GET['country'])) ? $_GET['country'] : "";

	$api_url="http://api.openweathermap.org/data/2.5/weather?q={".$user_city."},{".$user_country;
	$weather_data = file_get_contents($api_url);
	$json = json_decode($weather_data, TRUE);
	$user_temp = $json['main']['temp'];
	$user_himidity = $json['main']['humidity'];;
	$user_wind_direction = $json['wind']['deg'];
	$user_wind = $json['wind']['speed'];

	echo "<strong> city: </strong> ".$user_city."<br>";
	echo "<strong> country: </strong>".$user_country."<br>";
	echo "<strong> humidity: </strong>".$user_humidity."<br>";
	echo "<strong> country: </strong>".$user_country."<br>";
	echo "<strong> wind speed: </strong>".$user_wind."<br>";

};	?>
<?php
if (isset($_GET['submit'])) {
	$data = "data.json";
	$json_string = json_encode($_GET, JSON_PRETTY_PRINT);
	file_put_contents($data, json_string, FILE_APPEND);
	
};
?>

</body>
</html>