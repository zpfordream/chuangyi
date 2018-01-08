<?php
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends Controller {

    public function index(){

        //因为是关联表，1.可以直接sql语言写 2.直接把方法写到CategoryModel中 3. 用viewModel 见ykj

        //证明后台；联调没问题
        $category   =  D('Common/Category');
        $categoryes = $category ->categoryTree();
//        pri($categoryes);

        $this->assign('categoryes' , $categoryes);
        $this->display('list');
    }

    public function add(){
        if(IS_POST){
//               var_dump($_POST);
//                var_dump($_FILES);
            //1.获取变量
            $data['cate_name'] = trim(I('cate_name'));
            $data['cate_ename'] = trim(I('cate_ename'));
            $data['cate_keywords'] = trim(I('cate_keywords'));
            $data['cate_desc'] = trim(I('cate_desc'));
            $data['cate_type'] = I('cate_type') + 0;
            $data['parentid'] = I('parentid') + 0;
            $data['cate_content'] = trim(I('cate_content'));

            if($_FILES['cate_pic']['tmp_name']) {

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './'; // 设置附件上传根目录
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录

                // 上传单个文件
                $info = $upload->uploadOne($_FILES['cate_pic']);

                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['cate_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            //2. 验证变量
            $category = D('Common/Category');


            //3.存入库中
            if($category->create($data)){
                if($category->add()){
                    $this->success('新的分类添加成功',U('index'),3);
                }else{
                    $this->error('新的分类提交失败');
                }
            }else{
                $this->error($category->getError());
            }

        }else{

            $category = D('Common/Category');
            $categoryes = $category ->categoryTree();
            $this->assign('categoryes',$categoryes);
            $this->display('add');
        }

    }

    public function edit(){
        if(IS_POST){

            //1.获取变量
            $data['cate_id'] = I('cate_id') + 0;
            $data['cate_name'] = trim(I('cate_name'));
            $data['cate_ename'] = trim(I('cate_ename'));
            $data['cate_keywords'] = trim(I('cate_keywords'));
            $data['cate_desc'] = trim(I('cate_desc'));
            $data['cate_type'] = I('cate_type') + 0;
            $data['parentid'] = I('parentid') + 0;
            $data['cate_content'] = trim(I('cate_content'));

            if($_FILES['cate_pic']['tmp_name']) {

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './'; // 设置附件上传根目录
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录

                // 上传单个文件
                $info = $upload->uploadOne($_FILES['cate_pic']);

                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['cate_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            //2. 验证变量
            $category = D('Common/Category');


            //3.存入库中
            if($category->create($data)){
                $result = $category -> save();
                if( $result !== false){
                    $this->success('新的分类添加成功',U('index'),3);
                }else{
                    $this->error('新的分类提交失败');
                }
            }else{
                $this->error($category->getError());
            }

        }else{
            $id = I('cate_id') + 0 ;

            $category = D('Common/Category');
            $categoryesa = $category->find($id);
            $categoryes  = $category->categoryTree() ;

            $this->assign('categoryesa',$categoryesa);
            $this->assign('categoryes',$categoryes);
            $this->display('edit');
        }

    }

    public function  delete(){

        $id = I('cate_id') + 0 ;
        $category  =  D('Common/Category');

        if($category -> delete($id)){
            $this->success('分类删除成功',U('index'),3);
        }else{
            $this->error('分类删除失败');
        }

    }

    public  function  Adelete(){
//        pri($_POST);

        $ids = I('id');
        if($ids){
            $del_ids = implode(',',$ids);

            $category = D('Common/Category');
            if($category->delete($del_ids)){
                $this->success('分类删除成功',U('index'),3);
            }else{
                $this->error('分类删除失败');
            }
        }
    }
}