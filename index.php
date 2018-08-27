<?php include('head.php');?>
<!--内容列表-->
<div class="mdui-container">
	
 <div class="mdui-card mdui-img-fluid mdui-center mdui-m-t-2 mdui-shadow-1  mdui-hoverable ">

  <!-- 卡片头部，包含头像、标题、副标题 -->
  <div class="mdui-card-header mdui-ripple mdui-color-theme-accent">
    <img class="mdui-card-header-avatar" src="assets/src/img/China.png"/>
    <div class="mdui-card-header-title">Chinese government</div>
    <div class="mdui-card-header-subtitle">温馨提示</div>
  </div>
     <div class="mdui-card-menu">
      <div class="mdui-btn mdui-btn-icon mdui-text-color-white"><i class="mdui-icon material-icons">vertical_align_top</i></div>
    </div> 
   <div class="mdui-card-primary  mdui-color-theme-accent">
    <div class="mdui-typo-caption-opacity color-text-indigo-accent">尊敬的用户你好，温馨提示您，根据中华人民共和国《互联网信息服务管理办法》第十五条及相关政策规定，您不被允许通过技术手段获取境外非法信息，使用节点的风险由您自行承担，本社区分享SSR/SS/S5/V2ray的节点均来自互联网，本站不提供任何节点。</div>
    <div class="mdui-typo-body-2 color-text-indigo-accent">本网站ssr更新的顺序为倒叙,即最后一条是最新的数据.</div>
    <div class="mdui-typo-body-2 color-text-indigo-accent">投稿邮箱:zxxwljs@gmail.com <br>交流QQ群:824830194<br><a href="http://duanxin.ml/bbs" target="_blank">投稿地址</a></div>
   </div>
  <!-- 卡片的内容 -->
 </div>
 
 <div class="mdui-card mdui-img-fluid mdui-center mdui-m-t-2 mdui-shadow-1  mdui-hoverable ">

  <!-- 卡片头部，包含头像、标题、副标题 -->
  <div class="mdui-card-header mdui-ripple mdui-color-theme-accent">
    <img class="mdui-card-header-avatar" src="assets/src/img/shock.png"/>
    <div class="mdui-card-header-title">Admin</div>
    <div class="mdui-card-header-subtitle">公告</div>
  </div>
     <div class="mdui-card-menu">
      <div class="mdui-btn mdui-btn-icon mdui-text-color-white"><i class="mdui-icon material-icons">vertical_align_top</i></div>
    </div> 
   <div class="mdui-card-primary  mdui-color-theme-accent">
    <div class="mdui-typo-body-2 color-text-indigo-accent">网站做了稍微调整,如有问题或者建议请联系站长<a class="mdui-btn" href="about.php">Talk with me.</a></div>
     <div class="mdui-typo-body-2 color-text-indigo-accent">TODO网站开发进度</div>
     <div class="mdui-typo-body-2 color-text-indigo-accent">更新了论坛投稿功能</div>
     <div class="mdui-progress"><div class="mdui-progress-determinate mdui-color-pink" style="width: 50%;"></div></div>
   </div>
  <!-- 卡片的内容 -->
 </div>
</div>

<div id="list"></div>
</div>
<!--内容列表-->
<script>
$(function(){

	function load_content(){
		$.post('content.php',{'rand':Math.random()},function(data){
			$('#list').html(data);
		});
	}
	
	load_content();
	
	setInterval(load_content,60000);
	
});
</script>
<?php include('foot.php');?>