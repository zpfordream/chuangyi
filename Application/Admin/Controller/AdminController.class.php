<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends BaseController {

    public function index(){

        $admin = D('Common/Admin'); // 实例化对象
        $count      = $admin ->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数2
        $show       = $Page->show();// 分页显示输出

//        $sql = "select xxxx from TABLE JOIN TABLE b on a.xx= b.xx ";

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $admin ->field()->order('ad_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
//        pri($list);
        $this->display('list'); // 输出模板

    }

    public function add(){
        if(IS_POST){
//            pri($_POST);

            //1.获取变量
            $data['ad_name'] = trim(I('ad_name'));
            $data['ad_password'] = trim(I('ad_password'));
            $data['re_password'] = trim(I('re_password'));

            //2. 验证变量
            $Admin = D('Common/Admin');

            //3.存入库中
            if($Admin->create($data)){
                if($Admin->add()){
                    $this->success('新的用户添加成功',U('index'),3);
                }else{
                    $this->error('新的用户添加失败');
                }
            }else{
                $this->error($Admin->getError());
            }

        }else{

            $this->display('add');
        }

    }

    public function edit(){
        if(IS_POST){

            //1.获取变量
            $data['ad_name'] = trim(I('ad_name'));
            $data['ad_password'] = trim(I('ad_password'));
            $data['re_password'] = trim(I('re_password'));
            $data['ad_id'] =  I('ad_id') + 0;


            //2. 验证变量
            $Admin = D('Common/Admin');

            //3.存入库中
            if($Admin->create($data)){
                $res = $Admin->save();
                if( $res !== false ){
                    $this->success('用户修改成功',U('index'),3);
                }else{
                    $this->error('用户修改失败');
                }
            }else{
                $this->error($Admin->getError());
            }

        }else{
            $id = I('ad_id') + 0 ;

            $admin = D('Common/Admin');
            $adminesa = $admin->find($id);
            $this->assign('adminesa',$adminesa);
            $this->display('edit');
        }

    }

    public function  delete(){

        $id = I('ad_id') + 0 ;
        $admin =  D('Common/Admin');

        if($admin -> delete($id)){
            $this->success('用户删除成功',U('index'),3);
        }else{
            $this->error('用户删除失败');
        }

    }

    public  function  Adelete(){
        pri($_POST);

        $ids = I('ad_id') ;
        if($ids){
            $del_ids = implode(',',$ids);

            $admin  =  D('Common/Admin');
            if($admin->delete($del_ids)){
                $this->success('用户删除成功',U('index'),3);
            }else{
                $this->error('用户删除失败');
            }
        }
    }
}