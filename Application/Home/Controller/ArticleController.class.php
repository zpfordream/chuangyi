<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){

        $ar_id = I('ar_id');
        $article = D('Article');
        $articlesa = $article->where('ar_id='.$ar_id)->find();

        $this->assign('article',$articlesa);
        $this->display();
    }
}