<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller {

    public function __construct()
    {
        parent::__construct();

        if( !session('ad_id')){
            $this->error('你还没有登录，请先登录',U('Login/index'));
        }
    }


}