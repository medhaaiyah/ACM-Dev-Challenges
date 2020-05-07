<?php

//This is another way to call an API using a php script

//URL of the call

$ch = curl_init('https://harshasrikara.api.stdlib.com/acm-dev@dev/challenge/?value=medha'); 

// execute the api call

$result = curl_exec($ch);

