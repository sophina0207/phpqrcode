<?php
/**
* @user : wangying
* @date : 2018年5月30日
* @desc : 
**/
require_once 'Qr.php';
$qr = new Qr();
$url = 'http://www.baidu.com';
$qr->createQr($url);