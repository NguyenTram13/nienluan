<?php
class CategoryModel extends DB
{
    function getCate($kyw)
    {
        if ($kyw != "") {
            $sql = "SELECT * FROM category WHERE name like '%" . $kyw . "%' order by id desc";
        } else {

            $sql = "SELECT * FROM category order by id desc";
        }
        return $this->pdo_query($sql);
    }
    function getone_Cate($id)
    {
        $sql = "SELECT * FROM category where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addCate($name, $create)
    {
        $sql = "INSERT INTO category(name, created_at) values('$name', '$create')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    function editCate($id, $name, $date)
    {
        $sql = "UPDATE category SET name='$name', updated_at='$date' Where id='$id' ";

        return $this->pdo_execute($sql);
    }
    function deleteCate($id)
    {
        $sql = "DELETE FROM category WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
}
