<?php

class Ajax extends Controller
{
    private $product;
    function __construct()
    {
        $this->product = $this->model('ProductModel');
    }
    function filterPro()
    {
        $id = $_POST["id"];
        if ($id > 0) {

            $products = $this->product->getPros("", $id);
            print_r(json_encode($products));
        } else {
            echo 'asdsasdas';
        }
    }
    function addCard()
    {
        $id = $_POST['id'];
        print_r($this->product->addProductCart($id));
    }
    function removeItem()
    {
        $id = $_POST['id'];
        print_r($this->product->removeItem($id));
    }
}
