<?php
$text = @$_GET["text"];
include('head.php');
?>
<img class="mdui-img-rounded mdui-img-fluid mdui-center mdui-m-t-5" src="http://qr.liantu.com/api.php?text=<?php echo $text;?>"/>
   <div class="mdui-textfield  mdui-color-theme">
   	<form action="qr.php" method="get">
    <textarea class="mdui-textfield-input " rows="4" placeholder="ssr://" id="text" name="text" ><?php echo $text; ?></textarea>
    </div>
    <a class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-m-t-5" onclick="window.history.go(-1)">返回</a>
    <a class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-m-t-5" onClick="copy()" id="copy">复制</a>
    <input class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-m-t-5" type="submit" value="生成">
    </form>
<script>
$("#copy").on('click',function(){
    var e=document.getElementById("text");//对象是content
        e.select(); //选择对象
        document.execCommand("Copy"); //执行浏览器复制命令
        alert("复制成功");
    });
</script>
<?php
include('foot.php');
?>