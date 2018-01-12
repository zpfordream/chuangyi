<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/11
 * Time: 22:26
 */
namespace Home\Controller;
use Think\Controller;


class BaseController extends Controller {
    public function  __construct()
    {
        parent::__construct();

        //网站的栏目导航,获取所有的顶级栏目
        $category = D('Common/Category');
        $where['parentid']=0;
        $categoryes = $category->where($where) ->select();
        $this->assign('categoryes',$categoryes);




        //列表页，当前页，内容页的当前位置
        if(I('cate_id')){
            $cateid=I('cate_id');

            //通过调用model，得到面包屑的父类列表
            $result = $category ->getParent($cateid);
//        var_dump($result);
            //父类面包屑传到前台
            $this->assign('res',$result);
            //获取当前栏目，传到前台
            $cateself=$category->where("cate_id = $cateid")->find();
            $this->assign('cateself',$cateself);
        }




    }
}