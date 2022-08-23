<?php


class Category extends Controller{

    function __construct(){
        $this->category = $this->model('CategoryModel');
    }
    function list(){
        $cate=$this->category->getCate();
        return $this->view('admin',
        [
        'page'=>'category/list',
        'cates'=>$cate,

        
        ]
    );
    }

    function add(){
        if(isset($_POST['name']) && $_POST['name']!="" ){
            $name= $_POST['name'];
           $date= date('Y-m-d H:i:s');
           $this->category->addCate($name, $date);
           $thongbao= "Thêm danh mục thành công";
           return $this->view('admin',
            [
            'page'=>'category/add',
            
            'thongbao'=>$thongbao
            
            ]);
        }
        else{
            $thongbao= "Thêm danh mục thất bại";
            return $this->view('admin',
             [
             'page'=>'category/add',
             
             'thongbao'=>$thongbao
             
             ]);
        }
    }
}