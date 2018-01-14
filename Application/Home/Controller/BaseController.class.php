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




        //进入页面后，传入参数可能是cateid，也可能在文章详情页，但是也需要cate_id，只能通过ar_id先取
        if(I('cate_id')){
            $cateid=I('cate_id');
        }elseif(I('ar_id')){
            $ar_id = I('ar_id') + 0 ;
            $article = D('Common/Article');
            $articlesa = $article ->where('ar_id = '.$ar_id) ->find();
            $cateid= $articlesa['ar_cateid'];

            //这里已经实例化了，直接实例化文章，传到文章详情页了
            $this->assign('article',$articlesa);
        }


        //列表页，当前页，内容页的当前位置
        if($cateid){

            //通过调用model，得到面包屑的父类列表
            $result = $category ->getParent($cateid);
            //  var_dump($result);
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
                //左边导航，子导航页面，左边上面是top导航，下面是子导航
                $topid = $catetop['cate_id'];
                $cateson = $category ->where('parentid = '.$topid) ->select();
                $this -> assign( 'cateson',$cateson );


            }else{
                //说明是1级导航
                $catetop = $cateself;
                $this->assign('catetop',$catetop);
                //左边导航，子导航页面，左边上面是top导航，下面是子导航
                $topid = $catetop['cate_id'];
                $cateson = $category ->where('parentid = '.$topid) ->select();
                $this -> assign( 'cateson',$cateson );
            }

        }


        //首页高亮默认不显示，在index里设置为true
        $this->assign('index',false);





    }
}