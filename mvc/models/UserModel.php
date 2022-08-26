<?php
class UserModel extends DB
{
    public function insertUser($name, $email, $password, $tel, $address)
    {
        $sql = "INSERT INTO users (fullname, email, password, tel, address) values('$name','$email','$password','$tel','$address')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    public function getone_User($email)
    {
        $sql = "SELECT * FROM users where email='$email'";
        return  $this->pdo_query_one($sql);
    }


    // function addUser($name, $img, $price, $describes, $create, $cate)
    // {
    //     $sql = "INSERT INTO users(name, img, price, describes, created_at,idCate) values('$name', '$img', '$price', '$describes', '$create','$cate')";
    //     return $this->pdo_execute_lastInsertID($sql);
    // }

    // function addImageProduct($idPro, $path_img, $created_at)
    // {

    //     $sql = "INSERT INTO image_product (product_id,path_img,created_at) VALUES ('$idPro','$path_img','$created_at')";

    //     return $this->pdo_execute($sql);
    // }
    function editUser($id, $name, $img, $price, $describes, $date, $cate)
    {
        if (!empty($img)) {

            $sql = "UPDATE users SET name='$name', img='$img', price='$price' , describes='$describes', idCate='$cate', updated_at='$date'    WHERE id='$id' ";
        } else {
            $sql = "UPDATE users SET name='$name', price='$price' , describes='$describes',idCate='$cate',updated_at='$date' Where id='$id' ";
        }

        return $this->pdo_execute($sql);
    }
    // function editImgDetail($idPro, $path_img, $date)
    // {
    //     if (isset($path_img)) {
    //         $sql = "UPDATE image_product SET path_img='$path_img', updated_at='$date' Where product_id='$idPro' ";
    //         return $this->pdo_execute($sql);
    //     }
    // }
    function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
    function deleteImgUser($id)
    {
        $sql = "DELETE FROM image_product WHERE product_id='$id'";
        return  $this->pdo_execute($sql);
    }
    function getImgDetail($id)
    {
        $sql = "SELECT * FROM image_product WHERE product_id='$id'";
        return $this->pdo_query($sql);
    }
    function getUser($kyw, $cate = 0)
    {
        $sql = "SELECT * FROM users WHERE 1";
        if ($kyw != "") {
            $sql .= " AND name like '%" . $kyw . "%'";
        }
        if ($cate != 0) {
            $sql .= " AND idCate  = '$cate'";
        }
        $sql .= " order by id desc";
        return $this->pdo_query($sql);
    }
}
