<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/1
 * Time: 22:12
 */

namespace Common\Model;
use Think\Model;

class CategoryModel extends Model {

    protected $_validate = array(
        array('cate_name','require','分类名称不能为空',0,'regex',3), //在新增和修改的时候，都必须验证name 必须存在
        array('cate_name','','分类名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('cate_name','2,10','分类名称必须在2-10字内！',0,'length',3), // 当值不为空的时候判断是否在一个范围内

    );


    public function categoryTree(){
        $arr = $this->select();
        return $this->_cateDigui($arr) ;
    }

    private function _cateDigui( $arr ,$pid = 0 ,$level = 0 ){

        static  $data ;
        foreach( $arr as $k => $v){
            if($v['parentid'] == $pid ){
                $v['level'] = $level;
                $data[]     =  $v   ;
                $this->_cateDigui($arr , $v['cate_id'] , $level+1);
            }
        }
        return $data;
    }

    public function categoryChindrenId($cateid){
        $arr = $this->select();
//        var_dump($arr);
        return $this->_getChildrenId($arr , $cateid);

    }
     private function _getChildrenId($arr , $id){

         static $data ;
         foreach( $arr as $k => $v){
             if( $v['parentid'] == $id ){
                 $data[] = $v['cate_id'];
                 $this->_getChildrenId($arr ,$v['cate_id']);
             }
         }
         return $data;
     }

    //这里用的是方法的前置和后置操作，MODEL中delete方法的前置
    public function  _before_delete($options){
//        pri($options);

//  单个删除打印出来的
//  array (size=3)
//  'where' =>
//    array (size=1)
//      'cate_id' => int 67
//  'table' => string 'ar_category' (length=11)
//  'model' => string 'Category' (length=8)

//   批量删除打印的  ， 不同的地方在于where数组的cate_id 一个是变量一个是数组
//   array (size=3)
//  'where' =>
//    array (size=1)
//      'cate_id' =>
//        array (size=2)
//          0 => string 'IN' (length=2)
//          1 => string '67,68,78' (length=8)
//  'table' => string 'ar_category' (length=11)
//  'model' => string 'Category' (length=8)

        //如果是数组的话，就是批量删除
        if( is_array( $options['where']['cate_id'])) {

            $arr = explode(',', $options['where']['cate_id'][1]);
            $soncates = array();
            foreach ($arr as $k => $v) {
                $soncates2 = $this->_getChildrenId($v);
                $soncates = array_merge($soncates, $soncates2);
            }
            $soncates = array_unique($soncates);
            $soncates = implode(',', $soncates);
            if ($soncates) {
                $sql = "delete from ar_category where cate_id in ({$soncates})";
                $this->execute($sql);
            }
        }else{
            $childrenIds = $this->categoryChindrenId($options['where']['cate_id']);
            $childrenIds = implode(',',$childrenIds);
            if($childrenIds){
                $sql = "delete from ar_category where cate_id in ({$childrenIds})";
                $this->execute($sql);
            }
        }
    }


    //用在前台的面包屑，找父类的id和名称，都放在二维数组里
    public function  getParent($cateid){

        $res = array();
        while($cateid){
            $where['cate_id'] = $cateid;
            $cates = $this->where($where)->find();

            $res[]  =  array(
                'cate_id' => $cates['cate_id'],
                'cate_name' => $cates['cate_name'],
            ) ;
            $cateid = $cates['parentid'];
        }
        return  array_reverse($res);
    }
}