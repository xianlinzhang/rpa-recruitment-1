<?php
// 这个是实例化MyGreeter\Client,并根据要求输出greeting message
require_once dirname(__FILE__).'/vendor/autoload.php';

$objClinet = new \MyGreeter\Client();
$greetingmessage = $objClinet->getGreeting();
var_dump($greetingmessage);

// $objTest = new \MyGreeter\Test();
// $objTest->setup();
// $objTest->testInstance();
// $objTest->testgetGreeting();
