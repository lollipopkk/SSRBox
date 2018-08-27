<?php
date_default_timezone_set('Asia/Shanghai');
$json=@file_get_contents('admin/content.json');
if($json){
	$data=json_decode($json,TRUE);
}
else{
	$data=array();
	echo '<div class="mdui-typo-title mdui-center mdui-text-center">无数据</div>';
}
foreach($data as $r){
?>

<?php //echo date('Y-m-d H:i:s',$r['addtime']);?>
<?php //echo $r['content']; ?>
<div class="mdui-container">

    	
<div class="mdui-card mdui-img-fluid mdui-center mdui-m-t-2 mdui-shadow-1  mdui-hoverable ">

  <!-- 卡片头部，包含头像、标题、副标题 -->
  <div class="mdui-card-header mdui-ripple mdui-color-theme-accent">
    <img class="mdui-card-header-avatar" src="assets/src/img/shock.png"/>
    <div class="mdui-card-header-title">Admin</div>
    <div class="mdui-card-header-subtitle"><?php echo date('Y-m-d H:i:s',$r['addtime']); ?></div>
  </div>
  
    <div class="mdui-card-menu">
      <a  href="qr.php?text=<?php echo $r['content']; ?>" class="mdui-btn mdui-btn-icon mdui-text-color-white"><i class="mdui-icon ion-plus-circled"><i class="fas fa-qrcode"></i></i></a>
    </div>  
  
  <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
 <!-- <div class="mdui-card-media">
    <!--<img src="http://qr.liantu.com/api.php?text=<?php echo $r['content'];?>"/>-->
    <!--http://qr.liantu.com/api.php?text=-->
    <!-- 卡片中可以包含一个或多个菜单按钮 -->
 <!--</div>-->
  <!-- 卡片的标题和副标题 -->
 
   <div class="mdui-card-primary  mdui-color-theme-accent">
    <div class="mdui-card-primary-title color-text-indigo-accent"><?php echo $r['title']; ?></div>
    <div class="mdui-textfield  mdui-color-theme">
    <textarea class="mdui-textfield-input " rows="4" placeholder="ssr://" ><?php echo $r['content']; ?></textarea>
    </div>
   </div>
  <!-- 卡片的内容 -->
  </div>
  </div>
<?php 
}
?>