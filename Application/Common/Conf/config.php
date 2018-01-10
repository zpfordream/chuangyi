<?php
return array(
	//'配置项'=>'配置值'

    //前台公共文件的地址
    'TMPL_PARSE_STRING'  =>array(
        '__PUBLIC__' => SITE_URL.'/Public',
        '__STYLE__' => SITE_URL.'/Public/style',
        '__IMG__' => SITE_URL.'/Public/images',
        '__UPLOAD__' => SITE_URL.'/Public/Uploads',
        '__UEDITOR__' => SITE_URL.'/Public/ueditor',
    ),

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'chuangyi',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'ar_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

    'SHOW_PAGE_TRACE' =>true,

);