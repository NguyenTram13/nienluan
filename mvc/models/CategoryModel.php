<?php
class CategoryModel extends DB
{
    function getCate(){
        $sql= "SELECT * FROM category ";
        return $this->pdo_query($sql);
   }

   function addCate($name, $create){
    $sql ="INSERT INTO category(name, created_at) values('$name', '$create')";
    if ($this->pdo_execute($sql)) {
        return true;
    }
    return false;
   }
}