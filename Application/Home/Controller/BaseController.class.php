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


            //列表页和单页左边导航最上面，放大字体，如果是一级导航显示自己，如果不是一级导航，显示父类一级导航
            if($cateself['parentid'] != 0  ){
                //说明不是1级导航
                $parentid = $cateself['parentid'];
                $catetop = $category->where('cate_id='.$parentid)->find();
                $this->assign('catetop',$catetop);
            }else{
                //说明是1级导航
                $catetop = $cateself;
                $this->assign('catetop',$catetop);
            }
        }

    }
}