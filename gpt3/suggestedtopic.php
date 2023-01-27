<?php

require_once 'Openai.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$openai = New Openai();

$q = $_GET['q'];

$openai->request("text-davinci-003", "Write the 5 topics for learning ". $q ." in a json list", 1500);

?>