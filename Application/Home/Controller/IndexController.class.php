<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/11
 * Time: 22:26
 */
namespace Home\Controller;
use Think\Controller;


class IndexController extends BaseController {
    public function index(){

        $index = D('Common/Article');
        $ar_news = $index ->getnews();
        $ar_rems = $index -> getrems();
        $this->assign('ar_news',$ar_news);
        $this->assign('ar_rems',$ar_rems);

        //首页高亮
        $this->assign('index',true);
        $this->display();
    }
}