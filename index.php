<?php

if(!empty($_GET['location'])){
	$weather_url = 'https://weatherrestapi.herokuapp.com/weather/city?city='.urldecode($_GET['location']);
	
	$weather_json = file_get_contents($weather_url);
	$weatherDetailsArray = json_decode($weather_json,true);
	
	$city = $weatherDetailsArray['city'];
	$Temp = $weatherDetailsArray['Temperature'];
	$Humidity = $weatherDetailsArray['Humidity'];
	$Temp_Min = $weatherDetailsArray['Min Temp'];
	$Temp_Max = $weatherDetailsArray['Max Temp'];
	
	
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Lab 1 CLoud</title>
</head>
<body>

<p>Enter the City name</p>

<form action="" method="get">
    <input type="text" name="location"/>
    <button type="submit">Get Weather</button>
</form>
<br/>

<?php

if(!empty($city)){
	
    echo 'City:             '.$city;
    echo "<br>";
	echo 'Temperature:  '.$Temp;
	echo "<br>";
	echo 'Humidity:      '.$Humidity;
	echo "<br>";
	echo 'Min Temperature:   '.$Temp_Min;
	echo "<br>";
	echo 'Max Temperature:    '.$Temp_Max;
}
?>

</body>
</html>
