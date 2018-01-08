<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/1
 * Time: 22:12
 */

namespace Common\Model;
use Think\Model;

class LinkModel extends Model {

    protected $_validate = array(
        array('li_title','require','链接标题不能为空',0,'regex',3), //在新增和修改的时候，都必须验证name 必须存在
//        array('cate_name','','分类名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
//        array('cate_name','2,10','分类名称必须在2-10字内！',0,'length',3), // 当值不为空的时候判断是否在一个范围内

    );



}