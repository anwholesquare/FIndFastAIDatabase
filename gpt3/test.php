<?php

require_once 'Openai.php';

$openai = New Openai();

$openai->request("text-davinci-003", "Write the topic list for competitive programming in json format", 1500);

?>