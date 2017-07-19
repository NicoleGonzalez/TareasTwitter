<?php
	require_once('TwitterAPIExchange.php');
	$settings = array(
        'oauth_access_token' => "14259175-JJeh3mWHOxfU064wRt3BEk5MLBzxkXvePoY8VYdbB",
        'oauth_access_token_secret' => "wSkEjxGXFLzPy03Y4F9ZMzvxFZwZ5sQeitnNn4DVluV8E",
        'consumer_key' => "CdLTKEkN3OIfZ6lUbnZXKtFms",
        'consumer_secret' => "oam9YhWFSSYPJZBnMKxgp51a1nGWA14wZEwqzQXOTvZsaNFOPS"
        );
	$url = "https://api.twitter.com/1.1/followers/ids.json";
	$requestMethod = "GET";
    $getfield = "?screen_name=ycancino&count=5000";
    $twitter = new TwitterAPIExchange($settings);
    $string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);
    $string2=$string['ids'];
    //var_dump($string2);
    foreach ($string2 as $items)
    {
        echo "Ids : " . $items."\n";
        
    }
	
?>