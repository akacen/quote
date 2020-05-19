<?php
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client([
  'base_uri' => 'https://api.quotable.io/',
]);
$response = $client->get('random');
$quote = json_decode($response->getBody(), TRUE);
print 
"<h3 style='color:blue;text-align:center;font-size:30px;padding:50px;'>".$quote['content']."</h3><br><p style='text-align:right;font-size:20px;padding-right:30px;'>".$quote['author']."</p>";
?>
