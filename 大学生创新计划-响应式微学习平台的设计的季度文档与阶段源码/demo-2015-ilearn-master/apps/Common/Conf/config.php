<?php
return array(
	//'配置项'=>'配置值'
		//定义前后台模块
		'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
		
		/* 数据库设置 */
		'DB_TYPE'               =>  'mysql',     // 数据库类型
		'DB_HOST'               =>  'localhost', // 服务器地址
		'DB_NAME'               =>  'imicrolearn',          // 数据库名
		'DB_USER'               =>  'root',      // 用户名
		'DB_PWD'                =>  '123456',          // 密码
		'DB_PORT'               =>  '3306',        // 端口
		'DB_PREFIX'             =>  'iml_',    // 数据库表前缀
		
		'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
		
		//默认错误跳转对应的模板文件
		'TMPL_ACTION_ERROR' => APP_PATH . 'Common/Common/rs_jump.php',
		//默认成功跳转对应的模板文件
		'TMPL_ACTION_SUCCESS' => APP_PATH . 'Common/Common/rs_jump.php',
		
		'SHOW_PAGE_TRACE' =>  'true',

		'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
		'APP_SUB_DOMAIN_RULES'    =>    array(       
										'adminhome'        => 'Admin',  // admin子域名指向Admin模块    
	
										),
);