<?php
//设置报错级别，忽略警告，设置字符
error_reporting(E_ALL || ~ E_NOTICE);
header("Content-type:text/html; charset=utf-8");
require_once "jssdk.php";
$jssdk = new JSSDK("wxf82bef2de4d2e080", "11d90cfa1c2de9a7a31fb26a6563f422");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1"> <!-- IE时使用最新的渲染，Chrome时激活Chrome Frame-->
  <meta name="renderer" content="webkit">   <!-- 为360浏览器的优化 -->
  <meta name="description" content="恒大金服是恒大旗下理财平台">
  <!-- start 解决缓存 -->
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <!-- end 解决缓存 -->
  <meta name="format-detection" content="telephone=no"> <!-- 解决浏览器自动显示手机号问题 -->
  <title>恒大金服</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <link rel="stylesheet" href="./hd-voice.css">
</head>
<body>
      <h3>读一段话: “今晚我们一起在广州天河机场体育中心为恒大足球加油。” </h3>
	  谁的声音识别结果更接近，谁的分数就更高（满分100分）

      <!--h3 id="menu-voice">操作按钮</h3>
      <span class="desc">点击这里开始录音</span>
      <button class="btn btn_primary" id="startRecord">开始录音</button>
      <span class="desc">点击这里停止录音</span>
      <button class="btn btn_primary" id="stopRecord">停止录音</button>
      <span class="desc">点击这里识别声音并返回结果以及分数</span>
      <button class="btn btn_primary" id="translateVoice">翻译结果以及得分</button> 
      <span class="desc">播放自己刚才的声音</span>
      <button class="btn btn_primary" id="playVoice">播放语音</button-->
	  
	  
	  
      <h3 id="menu-share">分享接口</h3>
      <span class="desc">获取“分享到朋友圈”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareTimeline">分享到朋友圈</button>
      <span class="desc">获取“分享给朋友”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareAppMessage">分享给朋友</button>
      <span class="desc">获取“分享到QQ”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareQQ">分享到QQ</button>
      <span class="desc">获取“分享到腾讯微博”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareWeibo">分享到腾讯微博</button>
      <span class="desc">获取“分享到QZone”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareQZone">分享到QZone</button>

      <!--
	  <span class="desc">暂停播放接口</span>
      <button class="btn btn_primary" id="pauseVoice">pauseVoice</button>
      <span class="desc">停止播放接口</span>
      <button class="btn btn_primary" id="stopVoice">stopVoice</button>
      <span class="desc">上传语音接口</span>
      <button class="btn btn_primary" id="uploadVoice">uploadVoice</button>
      <span class="desc">下载语音接口</span>
      <button class="btn btn_primary" id="downloadVoice">downloadVoice</button> 
	  -->
	  
      <!--
	  <h3 id="menu-smart">智能接口</h3>
      <span class="desc">识别音频并返回识别结果接口</span>
      <button class="btn btn_primary" id="translateVoice">translateVoice</button> 
	  -->
<script src="./jweixin-1.0.0.js"></script>
<script>
  // <?php echo $signPackage["rawString"];?> 
  // <?php echo $signPackage["url"];?> 

  wx.config({
    debug: false, //调试阶段建议开启
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
      jsApiList: [
        'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
</script>
<script src="./zepto.min.js"></script>
<script src="./hd-voice.js"> </script>
</body>
</html>
