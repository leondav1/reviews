<?php
if(isset($_GET['api'])){
	$api_key = strip_tags(trim(htmlspecialchars($_GET['api'])));
}
$config = array(
	//'api_key' => 'Enter Your API key',
	'uagent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12',
	'place-id-finder' => 'https://developers.google.com/places/place-id'
);
//$api_key = 'Enter Your API key';

?>