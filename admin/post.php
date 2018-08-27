<?php
$title=@$_POST['title'];
$content=@$_POST['content'];
$password=@$_POST['password'];
if($title==''||$content==''){
	echo "null";
	exit();
}elseif($password != '1741415746'){
	echo "error";
	exit();
}
$content=strip_tags($content);
$content=nl2br($content);
$title=strip_tags($title);
$title=nl2br($title);

$json=@file_get_contents('content.json');
if($json){
	$data=json_decode($json,TRUE);
}
else{
	$data=array();
}
$data[]=array('content'=>$content,'title'=>$title,'addtime'=>time());
$json=json_encode($data);
file_put_contents('content.json',$json);
echo 'success';
