<?php
namespace Admin\Controller;
use Think\Controller;

class ConfController extends BaseController {

    public function index(){

        $conf = D('Common/Conf'); // 实例化对象
        $list = $conf ->field()->order('cf_id desc')->select();
        $this->assign('list',$list);// 赋值数据集
//        pri($list);
        $this->display('list'); // 输出模板

    }

    public function add(){
        if(IS_POST){
//            pri($_POST);

            //1.获取变量
            $data['cf_name'] = trim(I('cf_name'));
            $data['cf_ename'] = trim(I('cf_ename'));
            $data['cf_type'] = trim(I('cf_type'));
            $data['cf_value'] = trim(I('cf_value'));
            $data['cf_values'] = trim(I('cf_values'));

            //2. 验证变量
            $conf = D('Common/Conf');

            //3.存入库中
            if($conf->create($data)){
                if($conf->add()){
                    $this->success('新的配置添加成功',U('index'),3);
                }else{
                    $this->error('新的配置添加失败');
                }
            }else{
                $this->error($conf->getError());
            }

        }else{

            $this->display('add');
        }

    }

    public function edit(){
        if(IS_POST){

            //1.获取变量
            $data['cf_name'] = trim(I('cf_name'));
            $data['cf_ename'] = trim(I('cf_ename'));
            $data['cf_type'] = trim(I('cf_type'));
            $data['cf_value'] = trim(I('cf_value'));
            $data['cf_values'] = trim(I('cf_values'));

            $data['cf_id'] =  I('cf_id');

            //2. 验证变量
            $conf = D('Common/Conf');

            //3.存入库中
            if($conf->create($data)){
                $res = $conf->save();
                if( $res !== false ){
                    $this->success('配置修改成功',U('index'),3);
                }else{
                    $this->error('配置修改失败');
                }
            }else{
                $this->error($conf->getError());
            }

        }else{
            $id = I('cf_id') + 0 ;

            $conf = D('Common/Conf');
            $confesa = $conf->find($id);
            $this->assign('confesa',$confesa);
            $this->display('edit');
        }

    }

    public function  delete(){

        $id = I('cf_id') + 0 ;
        $conf  =  D('Common/Conf');

        if($conf -> delete($id)){
            $this->success('配置删除成功',U('index'),3);
        }else{
            $this->error('配置删除失败');
        }

    }

    public  function  Adelete(){
//        pri($_POST);

        $ids = I('id');
        if($ids){
            $del_ids = implode(',',$ids);

            $conf  =  D('Common/Conf');
            if($conf->delete($del_ids)){
                $this->success('配置删除成功',U('index'),3);
            }else{
                $this->error('配置删除失败');
            }
        }
    }

    public function conflst(){

        if(IS_POST){
            pri($_POST);

        }else{
            $conf = D('Common/Conf');
            $confes = $conf->select();
            $this->assign('confes',$confes);
            $this->display();
        }
    }

}