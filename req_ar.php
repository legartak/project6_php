<?php

$first_name = htmlspecialchars($_REQUEST['name']);
$second_name = htmlspecialchars($_REQUEST['surname']);

echo "So your name is $first_name and surname is $second_name! Nice to meet you!";