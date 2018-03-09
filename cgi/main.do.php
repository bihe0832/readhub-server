<?php
include (dirname(__FILE__).'/../conf/basic.php');
require_once (dirname(__FILE__).'/../tools/tools.php');

class ShakeBaCGI {

	const LENGTH = 16;
	private $cmdList = array(
		'101001' => 'checkVersion',

	);

	private $httpBody;

	public function __construct($body)	{
		$this->httpBody = json_decode($body);
	}

	//系统入口
	public function startApp(){
		
        
		$cmd = intval($this->httpBody->cmd);
		//检测接口是否存在并跳转
		if (!in_array($cmd, array_keys($this->cmdList)) ) {
			$result = Tools::OutputJSON("-100001", "cmd is not exist");
		}else{
			$result = $this->{'_' . $this->cmdList[$cmd]}();
		}
		return $result;
	}

	public function _checkVersion(){

		$versionCode = intval($this->httpBody->versionCode);

		if(APP_VERSION_CODE > $versionCode){
			$result = array();
			$result["ret"] = 0;
			$result["ecode"] = 1000;
			$result["msg"] = "new package is avialbe";
			$result["packageinfo"] = array(
				'version' => APP_VERSION_NAME, 
				'url' => APP_DOWNLOAD_URL);
		}else{
			$result = array();
			$result["ret"] = 0;
			$result["ecode"] = 1001;
			$result["msg"] = "package is new";
		}

		return json_encode($result);
	}
}
?>
