<?php

class Tools{

	//合并命令行之间的多个空格为一个
	public static function merge_spaces($string){
		return preg_replace("/\s(?=\s)/","\\1",trim($string));
	}

	//根据当天的时间（精确到秒）获取一个验证码，函数调用的地方，如果需要唯一，需要自行处理逻辑
	public static function getVerifyCode(){
		$timeStart = strtotime("today");
		$timeNow = time();
		$key = rand(1,9);
		$tempKey = $timeNow-$timeStart + 10000;
		$tempKey += $key;
		if($key%2){
			$tempKey = $key.substr($tempKey,0,2).substr($tempKey,2,3);
		}else{
			$tempKey = $key.substr($tempKey,2,3).substr($tempKey,0,2);
		}
		return $tempKey;
	}

	public static function OutputJSON($ret='', $msg=''){
		$result = array();
		$result["ecode"] = $ret;
		$result["msg"] = $msg;
		return json_encode($result);
	}

	//将数字转化为中文，字母转化为小写
	public static function formatInput($str){
		return strtolower(formatNumToWord($str));
	}

	//将数字转化为中文，字母转化为小写
	public static function formatNumToWord($str){
		$numArr = array('/0/','/1/','/2/','/3/','/4/','/5/','/6/','/7/','/8/','/9/');
		$wordArr = array("零","一","二","三","四","五","六","七","八","九");
		return preg_replace($numArr,$wordArr,$str);
	}

	public static function getRandomStringByLength($length){
		//TODO 待完成
	}
}
?>
