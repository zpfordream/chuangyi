<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller {

    public function index(){

        $Article = D('Common/Article'); // 实例化对象
        $count      = $Article ->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数2
        $show       = $Page->show();// 分页显示输出

//        $sql = "select xxxx from TABLE JOIN TABLE b on a.xx= b.xx ";

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Article ->field()->join('ar_category ON ar_article.ar_cateid = ar_category.cate_id')->order('ar_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
//        pri($list);
        $this->display('list'); // 输出模板

    }

    public function add(){
        if(IS_POST){
//            pri($_POST);

            //1.获取变量
            $data['ar_title'] = trim(I('ar_title'));
            $data['ar_author'] = trim(I('ar_author'));
            $data['ar_rem'] = I('ar_rem') + 0;
            $data['ar_content'] = trim(I('ar_content'));
            $data['ar_cateid'] = I('ar_cateid') + 0;
            $data['ar_time'] = time();

            if($_FILES['ar_pic']['tmp_name']) {

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './'; // 设置附件上传根目录
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录

                // 上传单个文件
                $info = $upload->uploadOne($_FILES['ar_pic']);

                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['ar_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            //2. 验证变量
            $article = D('Common/Article');

            //3.存入库中
            if($article->create($data)){
                if($article->add()){
                    $this->success('新的文章添加成功',U('index'),3);
                }else{
                    $this->error('新的文章提交失败');
                }
            }else{
                $this->error($article->getError());
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
            $data['ar_id'] = I('ar_id') + 0;
            $data['ar_title'] = trim(I('ar_title'));
            $data['ar_author'] = trim(I('ar_author'));
            $data['ar_rem'] = I('ar_rem') + 0;
            $data['ar_content'] = trim(I('ar_content'));
            $data['ar_cateid'] = I('ar_cateid') + 0;

            if($_FILES['ar_pic']['tmp_name']) {

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './'; // 设置附件上传根目录
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录

                // 上传单个文件
                $info = $upload->uploadOne($_FILES['ar_pic']);

                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['ar_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            //2. 验证变量
            $article = D('Common/Article');

            //3.存入库中
            if($article->create($data)){
                $res = $article->save();
                if( $res !== false ){
                    $this->success('文章修改成功',U('index'),3);
                }else{
                    $this->error('文章修改失败');
                }
            }else{
                $this->error($article->getError());
            }

        }else{
            $id = I('ar_id') + 0 ;

            $article = D('Common/Article');
            $articlesa = $article->find($id);

            $category = D('Common/Category');
            $categoryes  = $category->categoryTree() ;

            $this->assign('articlesa',$articlesa);
            $this->assign('categoryes',$categoryes);
            $this->display('edit');
        }

    }

    public function  delete(){

        $id = I('ar_id') + 0 ;
        $article  =  D('Common/Article');

        if($article -> delete($id)){
            $this->success('文章删除成功',U('index'),3);
        }else{
            $this->error('文章删除失败');
        }

    }

    public  function  Adelete(){
//        pri($_POST);

        $ids = I('id');
        if($ids){
            $del_ids = implode(',',$ids);

            $article  =  D('Common/Article');
            if($article->delete($del_ids)){
                $this->success('文章删除成功',U('index'),3);
            }else{
                $this->error('文章删除失败');
            }
        }
    }
}