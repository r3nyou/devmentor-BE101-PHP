<?php
require_once 'vendor/autoload.php';

use App\HelloWorld;
use App\LanguageEnUs;
use App\LanguageZhTw;
use App\User;

// $helloWorld = new HelloWorld();
// echo $helloWorld->say();

$rick = new User(new LanguageEnUs());
$morty = new User(new LanguageZhTw());

// 註冊成功: email & sms
// [email] register success
// [sms] register success
$rick->register();

// [email] 註冊成功
// [sms] 註冊成功
$morty->register();


// 學生預約課程: email & telegram
// [email] reserve class
// [telegram] reserve class

// [email] 學生預約課程
// [telegram] 學生預約課程

// 學生取消課程: email & telegram
