<?php

class User extends Controller
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $this->view("user", "login");
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data = [
                "errorLogin" => ''
            ];
            $verify = $this->model("UserModel")->getUserData($username);
            if (!$verify) {
                $data['errorLogin'] = "Tài khoản không chính xác";
                $this->view("user", "login", $data);
            } else {
                if (!password_verify($password, $verify['password'])) {
                    $data['errorLogin'] = "Mật khẩu không chính xác";
                    $this->view("user", "login", $data);
                } else {
                    $this->createSessionUser($verify);
                    if ($_SESSION['permission'] == 1) {
                        header("location: " . URLROOT . "/Home/managerIndex");
                    } else {
                        $this->view("home", "homepage");
                    }
                }
            }
        }
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->view("user", "register");
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $username = $_POST['username'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            $email = $_POST['email'];

            $data = [
                'errorName' => '',
                'errorPhone' => '',
                'errorAddress' => '',
                'errorUsername' => '',
                'errorPass1' => '',
                'errorPass2' => '',
                'errorEmail' => ''
            ];

            $user = $this->model("UserModel")->getUserData($username);

            $validate_name = "/[a-zA-z ]/";
            $validate_phone = "/^([0-9]){10,}$/";
            $validate_username = "/[a-zA-z0-9_]/";
            $validate_password = "/^[a-zA-z0-9]{6,16}$/";

            if (empty($name)) {
                $data['errorName'] = "Tên không được để trống";
            } elseif (!preg_match($validate_name, $name)) {
                $data['errorName'] = "Tên chỉ gồm chữ và khoảng trắng";
            }

            if (empty($phone)) {
                $data['errorPhone'] = "Số điện thoại không được để trống";
            } elseif (!preg_match($validate_phone, $phone)) {
                $data['errorPhone'] = "Số điện thoại gồm 10 số";
            }

            if (empty($address)) {
                $data['errorAddress'] = "Địa chỉ không được để trống";
            }

            if (empty($username)) {
                $data['errorUsername'] = "Tên đăng nhập không được để trống";
            } elseif ($user == true && $user['account'] == $username) {
                $data['errorUsername'] = "Tên đăng nhập đã tồn tại";
            } elseif (!preg_match($validate_username, $username)) {
                $data['errorUsername'] = "Tên đăng nhập chỉ chứa chữ, số và gạch dưới";
            }

            if (empty($password1)) {
                $data['errorPass1'] = "Mật khẩu không được để trống";
            } elseif (!preg_match($validate_password, $password1)) {
                $data['errorPass1'] = "Mật khẩu từ 6 đến 16 ký tự và chỉ chứa chữ và số";
            }

            if (empty($password2) || $password2 !== $password1) {
                $data['errorPass2'] = "Xác nhận mật khẩu không chính xác";
            }

            if (empty($email)) {
                $data['errorEmail'] = "Email không được để trống";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data['errorEmail'] = "Định dạng email không chính xác";
            }
            $this->view("user", "register", $data);
            if (empty($data['errorName']) && empty($data['errorPhone']) && empty($data['errorAddress']) && empty($data['errorUsername']) && empty($data['errorPass1']) && empty($data['errorPass2']) && empty($data['errorEmail'])) {
                $password = password_hash($password1, PASSWORD_DEFAULT);
                $user = [
                    'name' => $name,
                    'phone_number' => $phone,
                    'address' => $address,
                    'account' => $username,
                    'password' => $password,
                    'email' => $email
                ];
                $this->model("UserModel")->addUser($user);
                $this->view("user", "login");
            }
        }
    }

    public function createSessionUser($user)
    {
        $_SESSION['username'] = $user['account'];
        $_SESSION['permission'] = $user['permission'];
    }

    public function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['permission']);
        header('location:' . URLROOT);
    }

}

?>