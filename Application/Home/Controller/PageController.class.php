<?php
namespace Home\Controller;
use Think\Controller;
class PageController extends BaseController {
    public function index(){

        $cate_id = I('cate_id');
        $category = D('Category');
        $categoryesa = $category->where('cate_id='.$cate_id)->find();
        $this->assign('categoryesa',$categoryesa);
        $this->display();
    }
}