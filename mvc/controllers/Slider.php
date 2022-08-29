<?php


class Slider extends Controller
{

    function __construct()
    {
        $this->slider = $this->model('SliderModel');
    }
    function list()
    {
        $kyw = "";
        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        $slider = $this->slider->getSlider($kyw);
        return $this->view(
            'admin',
            [
                'page' => 'slider/list',
                'slider' => $slider,


            ]
        );
    }

    function add()
    {
        if (isset($_POST['caption']) && $_POST['caption'] != "") {
            $caption = $_POST['caption'];
            $title = $_POST['title'];
            $date = date('Y-m-d H:i:s');

            $img = $_FILES['img']['name'];
            $target_file = _UPLOAD . '/slider/' .  basename($_FILES['img']['name']);
            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            } else {
            }
            $idSlider = $this->slider->addSlider($caption, $img, $title, $date);

            if ($idSlider) {
                $thongbao = "Thêm slider thành công";
            } else {
                $thongbao = "Thêm slider thất bại";
            }


            return $this->view(
                'admin',
                [
                    'page' => 'slider/add',

                    'thongbao' => $thongbao,


                ]
            );
        } else {


            return $this->view(
                'admin',
                [
                    'page' => 'slider/add',
                    // 'Cates' => $listCate,

                ]
            );
        }
    }

    function edit($id)
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $date = date('Y-m-d H:i:s');

            $name = $_POST['name'];
            $edit = $this->slider->editSlider($id, $name, $date);
            if ($edit) {
                $thongbao = "Sửa nhóm người dùng thành công";
            } else {
                $thongbao = "Sửa nhóm người dùng thất bại";
            }
            $oneGrps = $this->slider->getone_Slider($id);
            return $this->view(
                'admin',
                [
                    'page' => 'slider/edit',

                    'thongbao' => $thongbao,
                    'slider' => $oneGrps,

                ]
            );
        } else {
            $oneGrps = $this->slider->getone_Slider($id);


            return $this->view(
                'admin',
                [
                    'page' => 'slider/edit',
                    'slider' => $oneGrps,

                ]
            );
        }
    }
    function delete($id)
    {

        $del = $this->slider->deleteSlider($id);
        if ($del) {
            $_SESSION['msg'] = "Xóa slider thành công!";
            header("Location: " . _WEB_ROOT . "/slider/list");
        } else {
            $_SESSION['msg'] = "Xóa slider thất bại!";
            header("Location: " . _WEB_ROOT . "/slider/list");
        }
    }
}
