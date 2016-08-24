<?php
/**
 *授权获取用户信息。包括头像、昵称
 */

error_reporting(E_ALL & ~E_NOTICE);

include './oauth2.php';
$code=$_GET['code'];//code 微信接口参数(必须)
$state=$_GET['state'];//state微信接口参数(不需传参则不用)；若传参可考虑规则： 'act'.'arg1'.'add'.'arg2'

$APPID='wxf82bef2de4d2e080';
$SECRET='11d90cfa1c2de9a7a31fb26a6563f422';
$REDIRECT_URL='http://www.xiaosq.com/php/testuserinfo.php';//当前页面地址

$oauth2=new oauth2();
$oauth2->init($APPID, $SECRET,$REDIRECT_URL);
if(empty($code)){		
	$oauth2->get_code_by_authorize($state);//获取code，会重定向到当前页。若需传参，使用$state变量传参。
}
$data=$oauth2->get_userinfo_by_authorize();

echo '</br>welcome test!';
//echo '</br>nickname: '.$data['nickname'];
//echo '</br>headimgurl: '.$data['headimgurl'];
?>

This is Nickname: <?php echo $data['nickname'];?>  <br/>
<img src="<?php echo $data['headimgurl'];?>"/>  <br/>


用户openId: <?php echo $data['openid'];?> <br/>
性别：（1表示男，2表示女） <?php echo $data['sex'];?> <br/>
省份	<?php  echo $data['province'];?>  <br/>
城市	<?php echo $data['city'];?>  <br/>