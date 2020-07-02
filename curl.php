<?php
session_start();
include 'includes/config.php';

if(isset($_GET['id'])){
	$place_id = strip_tags(trim(htmlspecialchars($_GET['id'])));//Удаляем теги из строки, пробелы, преобразуем спец символы в HTML
	//var_dump($place_id);
	//$api_key = $config['api_key'];
	$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$place_id&key=$api_key";
	$ch = curl_init(); //Инициализируем сеанс cURL
	$cookiefile = 'tmp/cookie.txt';
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Чтобы данные, полученные при запросе сохранялись в переменную
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	curl_setopt($ch, CURLOPT_USERAGENT, $config['uagent']);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiefile);
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	$answer = curl_exec ($ch); //Выполняем запрос cURL
	curl_close($ch); //Завершаем сеанс cURL

	$data = json_decode($answer, true); //Декодируем json в php
    $name = ($data['result']['name']);
    $address = ($data['result']['formatted_address']);
    $rating = ($data['result']['rating']);
    $reviews = ($data['result']['reviews']);
    $website = ($data['result']['website']);
}
?>
