<?php
include (dirname(__FILE__).'/main.do.php');
$body = file_get_contents ( 'php://input' );//http body信息
$ShakeBaCGIObj = new ShakeBaCGI($body);
$result= $ShakeBaCGIObj->startApp();
$callback = isset($_GET['callback']) ? trim($_GET['callback']) : ''; //jsonp回调参数，必需
if($callback){
	echo $callback . '(' . $result .')';  //返回格式，必需
}else{
	echo $result;
}

?>
