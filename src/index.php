<?php
require_once 'vendor/autoload.php';

use App\HelloWorld;

$helloWorld = new HelloWorld();
echo $helloWorld->say();