<?php
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends Controller {

    public function index(){

        //证明后台；联调没问题
        $cate   =  D('category');
        $cates = $cate ->select();
//        pri($cates);

        $this->display('list');
    }

    public function add(){

    }

    public function edit(){

    }

    public function  del(){

    }
}