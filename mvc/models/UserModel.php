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
}
