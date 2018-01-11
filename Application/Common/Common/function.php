<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/11
 * Time: 22:06
 */


function getsub($pid){

    $category = D('Common/Category');
    $where['parentid'] = $pid ;
    $cates = $category->where($where)->select();

    return $cates;
}