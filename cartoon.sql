--创建数据库
create database cartoon;
--创建后台的用户表
create table admin(
    id int(10) unsigned not null auto_increment primary key comment '主键',
    name varchar(255) not null unique comment '用户名',
    password char(32) not null comment '密码',
    sex tinyint(1) default 1 comment '0:表示女,1:表示男',
    phone char(11) comment '手机号码',
    addtime varchar(20) comment '添加时间'
)engine=MyIsam default charset=utf8;


//前台用户表
create table user(
    id int(10) unsigned not null auto_increment primary key comment '主键',
    username varchar(255) not null unique comment '用户名',
    pass char(32) not null comment '密码',
    sex tinyint(1) default 0 comment '0:表示男,1:表示女',
    phone char(11) comment '手机号码',
    email varchar(50) not null comment '邮箱',
    addtime varchar(20) comment '注册时间'
)engine=MyIsam default charset=utf8;

//点击率
CREATE TABLE `ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key COMMENT '主键id',
  `contentid` int(11) NOT NULL COMMENT '与漫画ID关联',
  `hits` varchar(100) DEFAULT NULL COMMENT '点击率',
  `date` varchar(400) DEFAULT NULL COMMENT '时间'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


//点击率
CREATE TABLE `danmu` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key COMMENT '主键id',
  `u_id` int(11) NOT NULL COMMENT '与用户ID关联',
  `content` varchar(100) DEFAULT NULL COMMENT '弹幕内容',
  `date` varchar(400) DEFAULT NULL COMMENT '时间'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;