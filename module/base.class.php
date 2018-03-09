<?php
require_once (dirname(__FILE__).'/../conf/conn.php');

class BaseModule{

	private static $_instance;
	//数据库链接，系统数据库的链接配置
	private $_basicDBLink = "";
	//cache链接
	private $_memLink = "";

	private function __construct(){
		//链接DB
		$this->_basicDBLink = $this->__dbConnect($GLOBALS['db_config']);

		//cache配置
		// $this->_memLink = new Memcache;
		// $this->_memLink->connect($GLOBALS['mem_config']['host'], $GLOBALS['mem_config']['port']);
	}

	private function __clone()  {

	}

	public static function getInstance(){
		 if(! (self::$_instance instanceof self) ) {
			 self::$_instance = new self();
		 }
		 return self::$_instance;
	 }

	//合并命令行之间的多个空格为一个
	public static function __merge_spaces($string){
		return preg_replace("/\s(?=\s)/","\\1",trim($string));
	}

	public function execSQL($sql){
		//TODO 判断SQL语句以什么字段开头，然后决定选择执行什么函数
		return self::execQuerySQL($sql);
	}

	private function execQuerySQL($sql){
			 $dbResult = mysql_query($sql,$this->_basicDBLink);
			 return $dbResult;
	}

	private function execInsertSQL($sql){
			 //TODO 执行插入数据到数据库的sql
	}

	private function execDeleteSQL($sql){
			 //TODO 执行从数据库删除数据的sql
	}

	private function __dbConnect($db_config){
		$link ="";
		if(in_array("port", array_keys($db_config)) && $db_config['port'] !=""){
			$link = mysql_connect($db_config['host'].":".$db_config['port'], $db_config['user'], $db_config['passwd']);
		}else{
			$link = mysql_connect($db_config['host'], $db_config['user'], $db_config['passwd']);
		}
		mysql_select_db($db_config['dbname'], $link);
		mysql_query("set names utf8");
		return $link;
	}
}
?>
