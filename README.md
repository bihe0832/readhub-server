# readhub-server

## 项目简介

 该项目为个人开源项目 [readhub-android](https://github.com/bihe0832/readhub-android) 对应的web端相关的代码。具体包括：应用官网、应用下载中转页、应用更新检查cgi等内容。

## 相关项目

readhub-android：[https://github.com/bihe0832/readhub-android](https://github.com/bihe0832/readhub-android)

## 相关链接：
	
- Readhub 官网：[https://readhub.me/](https://readhub.me/)
	
- 应用官网：[http://readhub.bihe0832.com/](http://readhub.bihe0832.com/)

- 应用下载地址：[http://readhub.bihe0832.com/download/download.html](http://readhub.bihe0832.com/download/download.html)

- 相关开源项目：

	- Android：[https://github.com/bihe0832/readhub-android](https://github.com/bihe0832/readhub-android)
	
	- Server：[https://github.com/bihe0832/readhub-server](https://github.com/bihe0832/readhub-server)

## 代码目录

	.
	├── README.md
	├── cgi
	│   ├── main.do.php ：cgi处理
	│   └── readhub.php ：cgi入口
	├── conf
	│   └── basic.php ：基本配置，版本信息、网站信息等
	├── download
	│   ├── download.html ：下载中转页
	│   ├── readhub_release_newer.png ：下载二维码
	│   └── unknow.html ：特殊平台中转页
	├── index.html ：网站入口
	├── module
	│   └── base.class.php ：cgi基础类
	├── tools
	│   └── tools.php ：cgi基础类
	└── web
	    ├── conf ：基础页面
	    ├── css
	    ├── font-awesome
	    ├── images
	    ├── index.html ：网页首页
	    ├── js
	    └── topic.html ：话题中转页，扫描分享二维码后到达此页面


## 产品体验

### 下载地址

- 扫码下载

	![](https://github.com/bihe0832/readhub-android/blob/master/demo/readhub_release_newer.png?raw=true)

- 直接下载

	[https://github.com/bihe0832/readhub-android/blob/master/demo/readhub_release_newer.apk?raw=true](https://github.com/bihe0832/readhub-android/blob/master/demo/readhub_release_newer.apk?raw=true)

### 应用效果

- 首页热门话题：

	![](https://github.com/bihe0832/readhub-android/blob/master/demo/topic.jpg?raw=true)

- 话题详情

	![](https://github.com/bihe0832/readhub-android/blob/master/demo/topic_detail.jpg?raw=true)
	
- 话题详情分享效果

	![](https://github.com/bihe0832/readhub-android/blob/master/demo/share.jpeg?raw=true)

- 首页资讯：
	
	![](https://github.com/bihe0832/readhub-android/blob/master/demo/news.jpg?raw=true)


- 首页我的：
	
	![](https://github.com/bihe0832/readhub-android/blob/master/demo/me.jpg?raw=true)