<?php
/**
 * 网站配置的基本信息
 * @author 子勰 code@bihe0832.com
 */
 error_reporting(true);
 //报告运行时错误
 // error_reporting(E_ERROR);
 //报告所有错误
 // error_reporting(E_ALL);
require_once dirname(__FILE__).'/../tools/tools.php';
define("SITE_NAME", "每天几分钟 了解互联网");
define("APP_VERSION_CODE", 10);
define("APP_VERSION_NAME", "1.1.0");
define("APP_DOWNLOAD_URL", "https://github.com/bihe0832/readhub-android/blob/master/demo/readhub_release_newer.apk?raw=true");
define("SITE_VERSION","V1.0.180309001");
define("COPY_RIGHT", "COPYRIGHT &copy; ZIXIE ".SITE_VERSION." ALL RIGHTS RESERVED");
define("COPY_RIGHT_SHORT", "COPYRIGHT &copy; ZIXIE ".SITE_VERSION);
define("SOURCE_LINK", "http://readhub.bihe0832.com");

