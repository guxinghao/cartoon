<?php
return array(
	//'配置项'=>'配置值'
    /* 模版定界符设置 */
    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'cartoon',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号

    //修改URL模式
    'URL_MODEL'             =>  1,
   // 'URL_CASE_INSENSITIVE' => false,
    //绑定参数
    //'URL_PARAMS_BIND' => true,
    //'URL_PARAMS_BIND_TYPE' => 1,

    //设置后缀名
    //'URL_HTML_SUFFIX'=>'html|xml|shtml',
    //拒绝访问后缀
    //'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', 
    //跳转
    //默认错误跳转对应的模板文件
    //'TMPL_ACTION_ERROR' => 'Public/dispatch_jump',
    //默认成功跳转对应的模板文件
    //'TMPL_ACTION_SUCCESS' => 'Public/dispatch_jump',
    'SHOW_PAGE_TRACE' =>true,
);