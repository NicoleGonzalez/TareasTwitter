<?php
    require_once('TwitterAPIExchange.php');
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    $mysqli = new mysqli("127.0.0.1", "admin", "admin", "twitter");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $settings = array(
        'oauth_access_token' => "14259175-JJeh3mWHOxfU064wRt3BEk5MLBzxkXvePoY8VYdbB",
        'oauth_access_token_secret' => "wSkEjxGXFLzPy03Y4F9ZMzvxFZwZ5sQeitnNn4DVluV8E",
        'consumer_key' => "CdLTKEkN3OIfZ6lUbnZXKtFms",
        'consumer_secret' => "oam9YhWFSSYPJZBnMKxgp51a1nGWA14wZEwqzQXOTvZsaNFOPS"
        );
    $url = "https://api.twitter.com/1.1/trends/place.json";
    $requestMethod = "GET";
    $getfield = "?id=23424782";
    $twitter = new TwitterAPIExchange($settings);
    $string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);
    if($string["errors"][0]["message"] != "") {
            echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
    $string2=$string[0]['trends'];
    var_dump($string2);
    foreach($string2 as $items)
    {
        $mysqli->query("INSERT INTO trend(id, created_at, trend, url, contenido, query, volumen) VALUES (NULL, NULL,'".$items['name']."','".$items['url']."','".$items['promoted_content']."','".$items['query']."','".$items['tweet_volume']."')");
    } 
?>
