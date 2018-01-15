<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {

    public function index(){

        if(IS_POST){

            $data['ad_name'] = I('ad_name');
            $data['ad_password'] = I('ad_password');
            $data['verify'] = $_POST['verify'];

            $admin = D('Common/Admin');

            if( $admin ->create( $data , 4) ){

                if( $admin -> login($data['ad_name'],$data['ad_password']) ){
                    $this->success('登录成功',U('index/index'));
                }else{
                    $this->error('您的用户名或者密码错误');
                }

            }else{

                $this->error($admin -> getError() );
            }

        }else{
            if(session('ad_id')){
                $this->error('您已经登录该系统，请不要重复登录',U('index/index'));
            }else{
                $this->display('login');
            }
        }
    }

    public function logout(){
        session('ad_id',null);
        session('ad_name',null);
        $this->success('退出成功、前往登录页面',U('login/index'));
    }

    public function verify(){

        $Verify =     new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->entry();
    }


}