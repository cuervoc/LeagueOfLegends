<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$api_key = 'RGAPI-e45bf63a-f663-4ca2-8e1b-0f3103772db7';
$summoner_name = 'msfcuervoc';
$region = 'americas'; // Cambia esto a la región adecuada

$url = "https://$region.api.riotgames.com/lol/summoner/v4/summoners/by-name/$summoner_name?api_key=$api_key";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

echo "<pre>";
print_r($data);
echo "</pre>";
?>

</body>
</html>