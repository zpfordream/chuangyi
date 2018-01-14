<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/1
 * Time: 22:12
 */

namespace Common\Model;
use Think\Model;

class AdminModel extends Model {

    protected $_validate = array(
        array('ad_name','require','用户名不能为空',0,'regex',3), //在新增和修改的时候，都必须验证name 必须存在
        array('ad_name','','用户名已经存在！',0,'unique',3), // 在新增的时候验证name字段是否唯一
        array('ad_name','3,12','用户名长度为3-12位字符！',0,'length',3), // 在新增的时候验证name字段是否唯一
        array('ad_password','require','密码不能为空',0,'regex',3), //在新增和修改的时候，都必须验证name 必须存在
        array('ad_password','3,20','密码长度为3-12位字符',0,'length',3), //在新增和修改的时候，都必须验证name 必须存在
        array('re_password','ad_password','两次输入的密码不一致',0,'confirm',3),

    );

    protected $_auto = array (
        array('ad_password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理

    );

    public function login(){

    }


}