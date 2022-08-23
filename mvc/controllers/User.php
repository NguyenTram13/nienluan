<?php
class User extends Controller
{
    private $use;
    public function __construct()
    {
        $this->user = $this->model('UserModel');
    }

    public function login()
    {
        if (isset($_POST['login']) && $_POST['login'] != ""){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $user = $this->user->getone_User($email);
            if(!empty($user)){
               if(password_verify($password,$user['password'])){
                $color = "success";
                $_SESSION['check']=1;
                $_SESSION['msg'] = 'Đăng nhập thành công. Bạn có thể mua sản phẩm ngay bây giờ!';
                header('Location: ' . _WEB_ROOT . '/home/index');
               }else{
                $thongbao='Password không đúng';
                return $this->view('client', [
                    'page' => 'login',
                    'css' => [
                        'style',
                        'login'
                    ],
                    'js' => [
                        'main',
                        'login'
                    ],
                    'thongbao'=> $thongbao
                ]);
               }
            }else{
                $thongbao='Email không đúng';
                return $this->view('client', [
                    'page' => 'login',
                    'css' => [
                        'style',
                        'login'
                    ],
                    'js' => [
                        'main',
                        'login'
                    ],
                    'thongbao'=> $thongbao
                ]);
            }
        }
        else{

            return $this->view('client', [
                'page' => 'login',
                'css' => [
                    'style',
                    'login'
                ],
                'js' => [
                    'main',
                    'login'
                ]
            ]);
        }
    }
    public function register()
    {

        if (isset($_POST['register']) && $_POST['register'] != "") {
            $thongbao = "";
            $color = "";

            $name = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cf_password = $_POST['confirm-password'];
            $tel = $_POST['sdt'];
            $address = $_POST['address'];
            if ($password == $cf_password) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $status = $this->user->insertUser($name, $email, $password, $tel, $address);
                if ($status) {
                    $color = "success";
                    
                    $thongbao = 'Đăng ký thành công. Ban có thể đăng nhập ngay bây giờ!';
                    $_SESSION['msg'] = 'Đăng ký thành công. Bạn có thể đăng nhập ngay bây giờ!';
                    header('Location: ' . _WEB_ROOT . '/user/login');
                } else {
                    $color = "danger";

                    $thongbao = 'Đăng ký thất bại';
                    return $this->view('client', [
                        'page' => 'register',
                        'css' => [
                            'register',
                            'style',

                        ],
                        'js' => [
                            'main',
                            'register'
                        ],
                        'thongbao' => $thongbao,
                        'color' => $color

                    ]);
                }
            } else {
                $thongbao = "Nhap lai mat khau sai";
                return $this->view('client', [
                    'page' => 'register',
                    'css' => [
                        'register',
                        'style',

                    ],
                    'js' => [
                        'main',
                        'register'
                    ],
                    'thongbao' => $thongbao
                ]);
            }
        } else {

            return $this->view('client', [
                'page' => 'register',
                'css' => [
                    'register',
                    'style',

                ],
                'js' => [
                    'main',
                    'register'
                ]
            ]);
        }
    }
}
