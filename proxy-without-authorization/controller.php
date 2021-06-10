<?php
include("./proxy.php");

//setup the Proxy with the right credentials
$mySwapiProxy = new Proxy('https://swapi.dev/api');
//get the data
$result = $mySwapiProxy->getData('people/1');
//print the data to the frontend.
print_r($result);