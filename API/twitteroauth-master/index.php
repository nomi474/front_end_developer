<?php

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$consumerkey = "TMspgVFaD7Tlhr9Z9EvSsOkZ7";

$consumersecret = "yFD9BD2Kqel4eDud87MmdzePusJacjgMVHND3FjhtH2N06oapk";

$accesstoken = "3271263338-osGMbizGnhb1BOaRCJcoXiCKXAGKt9dFzOPNfvP";

$accesstokensecret = "FB5d22KcXmx86MA8mH0bCUtXUEQHwJ4QwsPRF5qTSgcjZ";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$content = $connection->get("account/verify_credentials");

print_r($content);

?>