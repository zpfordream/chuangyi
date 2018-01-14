<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {

    public function index(){

        if(IS_POST){

            $data['ad_name'] = $_POST['ad_name'];
            $data['ad_password'] = $_POST['ad_password'];
            $data['verify'] = $_POST['verify'];

            $admin = D('Common/Login');

            if( $admin ->check( $data ) ){

                if(){

                }

            }else{
                $this->error($admin->getError());
            }

        }else{
            $this->display('login');
        }

    }

}