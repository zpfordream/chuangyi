<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends BaseController {
    public function index(){

        $cateid = I('cate_id');
        $article = M('Article');
        $count      = $article ->where('ar_cateid='.$cateid) -> count();
        $Page       = new \Think\Page($count,2);
        $show       = $Page->show();// 分页显示输出

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $article -> where('ar_cateid='.$cateid)->order('ar_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
}