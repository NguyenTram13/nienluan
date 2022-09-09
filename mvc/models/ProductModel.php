<?php
class ProductModel extends DB
{
    // function getPros()
    // {
    //     $sql = "SELECT * FROM products order by id desc";
    //     return $this->pdo_query($sql);
    // }
    function getone_Pros($id)
    {
        $sql = "SELECT * FROM products where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addPros($name, $img, $price, $describes, $create, $cate)
    {
        $sql = "INSERT INTO products(name, img, price, describes, created_at,idCate) values('$name', '$img', '$price', '$describes', '$create','$cate')";
        return $this->pdo_execute_lastInsertID($sql);
    }

    function addImageProduct($idPro, $path_img, $created_at)
    {

        $sql = "INSERT INTO image_product (product_id,path_img,created_at) VALUES ('$idPro','$path_img','$created_at')";

        return $this->pdo_execute($sql);
    }
    function editPros($id, $name, $img, $price, $describes, $date, $cate)
    {
        if (!empty($img)) {

            $sql = "UPDATE products SET name='$name', img='$img', price='$price' , describes='$describes', idCate='$cate', updated_at='$date'    WHERE id='$id' ";
        } else {
            $sql = "UPDATE products SET name='$name', price='$price' , describes='$describes',idCate='$cate',updated_at='$date' Where id='$id' ";
        }

        return $this->pdo_execute($sql);
    }
    function editImgDetail($idPro, $path_img, $date)
    {
        if (isset($path_img)) {
            $sql = "UPDATE image_product SET path_img='$path_img', updated_at='$date' Where product_id='$idPro' ";
            return $this->pdo_execute($sql);
        }
    }
    function deletePros($id)
    {
        $sql = "DELETE FROM products WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
    function deleteImgPros($id)
    {
        $sql = "DELETE FROM image_product WHERE product_id='$id'";
        return  $this->pdo_execute($sql);
    }
    function getImgDetail($id)
    {
        $sql = "SELECT * FROM image_product WHERE product_id='$id'";
        return $this->pdo_query($sql);
    }
    function getPros($kyw, $cate = 0)
    {
        $sql = "SELECT * FROM products WHERE 1";
        if ($kyw != "") {
            $sql .= " AND name like '%" . $kyw . "%'";
        }
        if ($cate != 0) {
            $sql .= " AND idCate  = '$cate'";
        }
        $sql .= " order by id desc";
        return

            $this->pdo_query($sql);
    }
    function getProsNew()
    {
        $sql = "SELECT * FROM products WHERE 1";

        $sql .= " order by created_at desc LIMIT 4";
        return $this->pdo_query($sql);
    }
    function getProsfeatured()
    {
        $sql = "SELECT * FROM products WHERE 1";

        $sql .= " order by views desc LIMIT 4";
        return $this->pdo_query($sql);
    }
}
