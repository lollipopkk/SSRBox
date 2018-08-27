<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>SSR Box - Admin</title>
    <!--适应设备宽度-->
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<!-- 不让百度转码 -->
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 页面描述 -->
    <meta name="description" content="SSRBox(ssr盒子) 集优质账号于一身的app"/>
    <!-- 页面关键词 -->
    <meta name="keywords" content="SSR,ssr,SSRBox,ssrbox,ssr账号,翻墙,VPN,vpn,ShadowsocksR,谷歌,google,外网,暗网,免费SSR,免费,免费账号,免费ssr账号"/>
    <!-- 网页作者 -->
    <meta name="author" content="zxwlsj@gmail.com"/>
    <!-- 搜索引擎抓取 -->
    <meta name="robots" content="index,follow"/>
  <link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.min.css">
  <script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.1/css/mdui.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"></script>
</head>
<body  class="mdui-theme-primary-pink-accent mdui-theme-accent-pink ">
<!--顶部导航栏-->
  <div class="mdui-appbar mdui-hoverable" mdui-headroom="options">
  <div class="mdui-toolbar mdui-color-theme-accent ">
    <a href="https://my.elcloud.cc/" class="mdui-typo-headline">Admin</a>
    <div class="mdui-toolbar-spacer"></div>
    <!--右边浮动 这里放图标-->
  </div>
</div>
<!--顶部导航栏-->
<div class="mdui-container">
 <ul class="mdui-list">
  <a class="mdui-list-item mdui-ripple" href="https://my.elcloud.cc/" trage="_blank">Hosts</a>
  <a class="mdui-list-item mdui-ripple" href="https://dev.getui.com/dev/#/login" trage="_blank">个推</a>
 </ul>
<div class="mdui-row">
<form action="post.php" method="post">
	<div class="mdui-textfield">
   <input class="mdui-textfield-input" type="text" placeholder="Title" name="title"/>
  </div>
	<div class="mdui-textfield">
   <input class="mdui-textfield-input" type="password" placeholder="Password" name="password"/>
  </div>
  <div class="mdui-textfield">
  <textarea class="mdui-textfield-input" rows="4" placeholder="Message" name="content"></textarea>
  </div>
  <input class="mdui-btn mdui-color-pink mdui-btn-block" type="submit" value="发布">
</form>
</div>
<br>
<?php include('content.php'); ?>
</div>

</body>
</html>