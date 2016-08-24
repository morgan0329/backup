<?php
/**
 * 获取用户openid
 */
error_reporting(E_ALL & ~E_NOTICE);

include './oauth2.php';
$code=$_GET['code'];//code 微信接口参数(必须)
$state=$_GET['state'];//state微信接口参数(不需传参则不用)；若传参可考虑规则： 'act'.'arg1'.'add'.'arg2'


$APPID='wxf82bef2de4d2e080';
$SECRET='11d90cfa1c2de9a7a31fb26a6563f422';
$REDIRECT_URL='http://www.xiaosq.com/php/testopenid.php';//当前页面地址

$oauth2=new oauth2();
$oauth2->init($APPID, $SECRET,$REDIRECT_URL);
if(empty($code)){		
	$oauth2->get_code($state);//获取code，会重定向到当前页。若需传参，使用$state变量传参。
}
$openid=$oauth2->get_openid();//获取openid

echo '</br>welcome test!';
echo '</br>code: '.$code;
echo '</br>openid: '.$openid;
?>