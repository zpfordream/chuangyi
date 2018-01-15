<?php
namespace Admin\Controller;
use Think\Controller;

class LinkController extends BaseController {

    public function index(){

        $link = D('Common/link'); // 实例化对象
        $count      = $link ->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数2
        $show       = $Page->show();// 分页显示输出

//        $sql = "select xxxx from TABLE JOIN TABLE b on a.xx= b.xx ";

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $link ->field()->order('li_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
//        pri($list);
        $this->display('list'); // 输出模板

    }

    public function add(){
        if(IS_POST){
//            pri($_POST);

            //1.获取变量
            $data['li_title'] = trim(I('li_title'));
            $data['li_url'] = trim(I('li_url'));
            $data['li_des'] = trim(I('li_des'));


            if($_FILES['li_pic']['tmp_name']) {

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './'; // 设置附件上传根目录
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录

                // 上传单个文件
                $info = $upload->uploadOne($_FILES['li_pic']);

                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['li_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            //2. 验证变量
            $link = D('Common/Link');

            //3.存入库中
            if($link->create($data)){
                if($link->add()){
                    $this->success('新的链接添加成功',U('index'),3);
                }else{
                    $this->error('新的链接提交失败');
                }
            }else{
                $this->error($link->getError());
            }

        }else{

            $this->display('add');
        }

    }

    public function edit(){
        if(IS_POST){

            //1.获取变量
            $data['li_title'] = trim(I('li_title'));
            $data['li_url'] = trim(I('li_url'));
            $data['li_des'] = trim(I('li_des'));
            $data['li_id'] =  I('li_id');

            if($_FILES['li_pic']['tmp_name']) {

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './'; // 设置附件上传根目录
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录

                // 上传单个文件
                $info = $upload->uploadOne($_FILES['li_pic']);

                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['li_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            //2. 验证变量
            $Link = D('Common/Link');

            //3.存入库中
            if($Link->create($data)){
                $res = $Link->save();
                if( $res !== false ){
                    $this->success('链接修改成功',U('index'),3);
                }else{
                    $this->error('链接修改失败');
                }
            }else{
                $this->error($Link->getError());
            }

        }else{
            $id = I('li_id') + 0 ;

            $link = D('Common/Link');
            $linkesa = $link->find($id);
            $this->assign('linkesa',$linkesa);
            $this->display('edit');
        }

    }

    public function  delete(){

        $id = I('li_id') + 0 ;
        $link  =  D('Common/Link');

        if($link -> delete($id)){
            $this->success('链接删除成功',U('index'),3);
        }else{
            $this->error('链接删除失败');
        }

    }

    public  function  Adelete(){
//        pri($_POST);

        $ids = I('id');
        if($ids){
            $del_ids = implode(',',$ids);

            $link  =  D('Common/Link');
            if($link->delete($del_ids)){
                $this->success('链接删除成功',U('index'),3);
            }else{
                $this->error('链接删除失败');
            }
        }
    }
}