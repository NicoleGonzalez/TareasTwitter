<?php
	require_once('TwitterAPIExchange.php');
    /*$mysqli = new mysqli("127.0.0.1", "admin", "admin", "twitter");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }*/
	$settings = array(
        'oauth_access_token' => "14259175-JJeh3mWHOxfU064wRt3BEk5MLBzxkXvePoY8VYdbB",
        'oauth_access_token_secret' => "wSkEjxGXFLzPy03Y4F9ZMzvxFZwZ5sQeitnNn4DVluV8E",
        'consumer_key' => "CdLTKEkN3OIfZ6lUbnZXKtFms",
        'consumer_secret' => "oam9YhWFSSYPJZBnMKxgp51a1nGWA14wZEwqzQXOTvZsaNFOPS"
        );
	$url = "https://api.twitter.com/1.1/users/show.json";
	$requestMethod = "GET";
    $getfield = "?screen_name=ycancino";
    $twitter = new TwitterAPIExchange($settings);
    $arreglo = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);
    //$new_tweet = [];
    $complete_tweet = [];
    //var_dump($arreglo);
    
    /*foreach ($arreglo as $key => $value) {

        if ((!is_array($value) || $value == null) && boolval($value))
        {
            $new_tweet[$key] = $value;
        }
    }*/
    foreach ($arreglo as $key => $value) {

        if (!is_array($value))
        {
            $complete_tweet[$key] = $value;
        }
    }

    echo "<pre>";
    print_r($complete_tweet);
    echo "---------------<br>";
    /*print_r($new_tweet);
    echo "</pre>";*/
?>