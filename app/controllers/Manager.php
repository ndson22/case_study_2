<?php

class Manager extends Controller
{
    protected $productModel;
    protected $userModel;
    protected $orderModel;

    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
        $this->userModel = $this->model("UserModel");
        $this->orderModel = $this->model("OrderModel");
    }

    public function ProductsList($page)
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            //model
            $list = $this->productModel->getAllProducts($page);
            $quantity = $this->productModel->getQuantityProducts();
            //view
            $this->view("admin", "ListOfProducts", ["products" => $list, "product_quantity" => $quantity, "page" => $page]);
        }
    }

    public function addProducts()
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $product_code = $_POST['product_code'];
                $product_name = $_POST['product_name'];
                $category = $_POST['category'];
                $vendor = $_POST['vendor'];
                $description = $_POST['description'];
                $amount = $_POST['amount'];
                $size = $_POST['size'];
                $price = $_POST['price'];

                $data = [
                    'errorCode' => '',
                    'errorName' => '',
                    'errorCategory' => '',
                    'errorVendor' => '',
                    'errorImage' => '',
                    'errorAmount' => '',
                    'errorSize' => '',
                    'errorPrice' => '',
                    'success' => ''
                ];

                $checkCodeExist = $this->productModel->getProduct('product_code', $product_code);

                $validate_code = "/^[a-zA-Z0-9]*$/";
                $validate_name = "/^[a-zA-Z0-9 ]*$/";

                if (empty($product_code)) {
                    $data['errorCode'] = 'M?? s???n ph???m kh??ng ???????c ????? tr???ng';
                } elseif (!preg_match($validate_code, $product_code)) {
                    $data['errorCode'] = 'M?? s???n ph???m ch??? bao g???m ch??? v?? s???';
                } elseif ($checkCodeExist != false) {
                    $data['errorCode'] = 'M?? s???n ph???m ???? t???n t???i';
                }

                if (empty($product_name)) {
                    $data['errorName'] = 'T??n s???n ph???m kh??ng ???????c ????? tr???ng';
                } elseif (!preg_match($validate_name, $product_name)) {
                    $data['errorName'] = 'T??n s???n ph???m ch??? g???m ch???, s??? v?? kho???ng tr???ng';
                }

                if (empty($category)) {
                    $data['errorCategory'] = 'Lo???i s???n ph???m kh??ng ???????c ????? tr???ng';
                }

                if (empty($vendor)) {
                    $data['errorVendor'] = 'H??ng s???n xu???t kh??ng ???????c ????? tr???ng';
                }

                if (empty($amount)) {
                    $data['errorAmount'] = 'S??? l?????ng kh??ng ???????c ????? tr???ng';
                }

                if (empty($size)) {
                    $data['errorSize'] = 'Size kh??ng ???????c ????? tr???ng';
                }

                if (empty($price)) {
                    $data['errorPrice'] = '????n gi?? kh??ng ???????c ????? tr???ng';
                }

                $target_dir = "../upload/products/";
                $fileName = basename($_FILES['image']["name"]);
                $target_file = $target_dir . $fileName;

                if (empty($data['errorCode']) && empty($data['errorName']) && empty($data['errorName']) && empty($data['errorCategory']) && empty($data['errorVendor']) && empty($data['errorImage']) && empty($data['errorAmount']) && empty($data['errorSize']) && empty($data['errorPrice'])) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                    $product = [
                        "product_code" => $product_code,
                        "product_name" => $product_name,
                        "category" => $category,
                        "vendor" => $vendor,
                        "description" => $description,
                        "image" => $fileName,
                        "amount" => $amount,
                        "size" => $size,
                        "price" => $price
                    ];
                    $_SESSION['success'] = "Th??m s???n ph???m m???i th??nh c??ng";
                    $this->productModel->addProducts($product);
                    header("location: " . URLROOT . "/Manager/addProducts");
                } else {
                    $this->view("admin", "AddNewProduct", $data);
                }
            } else {
                $this->view("admin", "AddNewProduct");
            }
        }
    }

    public function deleteProducts($id)
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            $this->productModel->deleteProducts($id);
            header("location: " . URLROOT . "/Manager/ProductsList");
        }
    }

    public function updateProduct($id)
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $data = [
                    'errorCode' => '',
                    'errorName' => '',
                    'errorCategory' => '',
                    'errorVendor' => '',
                    'errorImage' => '',
                    'errorAmount' => '',
                    'errorSize' => '',
                    'errorPrice' => '',
                    'success' => ''
                ];
                $product_code = $_POST['product_code'];
                $product_name = $_POST['product_name'];
                $category = $_POST['category'];
                $vendor = $_POST['vendor'];
                $description = $_POST['description'];
                $image = $_POST['image'];
                $amount = $_POST['amount'];
                $size = $_POST['size'];
                $price = $_POST['price'];

                $checkCodeExist = $this->productModel->getProduct('product_code', $product_code);
                $validate_code = "/^[a-zA-Z0-9]*$/";
                $validate_name = "/^[a-zA-Z0-9 ]*$/";

                if (empty($product_code)) {
                    $data['errorCode'] = 'M?? s???n ph???m kh??ng ???????c ????? tr???ng';
                } elseif (!preg_match($validate_code, $product_code)) {
                    $data['errorCode'] = 'M?? s???n ph???m ch??? bao g???m ch??? v?? s???';
                } elseif ($checkCodeExist != false) {
                    $data['errorCode'] = 'M?? s???n ph???m ???? t???n t???i';
                }

                if (empty($product_name)) {
                    $data['errorName'] = 'T??n s???n ph???m kh??ng ???????c ????? tr???ng';
                } elseif (!preg_match($validate_name, $product_name)) {
                    $data['errorName'] = 'T??n s???n ph???m ch??? g???m ch???, s??? v?? kho???ng tr???ng';
                }

                if (empty($category)) {
                    $data['errorCategory'] = 'Lo???i s???n ph???m kh??ng ???????c ????? tr???ng';
                }

                if (empty($vendor)) {
                    $data['errorVendor'] = 'H??ng s???n xu???t kh??ng ???????c ????? tr???ng';
                }

                if (empty($amount)) {
                    $data['errorAmount'] = 'S??? l?????ng kh??ng ???????c ????? tr???ng';
                }

                if (empty($size)) {
                    $data['errorSize'] = 'Size kh??ng ???????c ????? tr???ng';
                }

                if (empty($price)) {
                    $data['errorPrice'] = '????n gi?? kh??ng ???????c ????? tr???ng';
                }

                $target_dir = "../upload/admin/";
                $fileName = basename($_FILES['image']["name"]);
                $target_file = $target_dir . $fileName;

                if (file_exists(dirname(APPROOT) . "upload/admin/$fileName")) {
                    $data['errorImage'] = '???nh ???? t???n t???i';
                } elseif(isset($_FILES["image"]["tmp_name"])) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                } else {
                    $fileName = $image;
                }

                if (empty($data['errorCode']) && empty($data['errorName']) && empty($data['errorName']) && empty($data['errorCategory']) && empty($data['errorVendor']) && empty($data['errorImage']) && empty($data['errorAmount']) && empty($data['errorSize']) && empty($data['errorPrice'])) {
                    $updateProduct = [
                        'product_code' => $product_code,
                        'product_name' => $product_name,
                        'category' => $category,
                        'vendor' => $vendor,
                        'description' => $description,
                        'image' => $fileName,
                        'amount' => $amount,
                        'size' => $size,
                        'price' => $price
                    ];
                    $this->productModel->updateProduct($id, $updateProduct);
                    $product = $this->productModel->getProduct('id', $id);
                    $data['success'] = 'C???p nh???t th??nh c??ng';
                    $this->view("admin", "UpdateProduct", array_merge($product, $data));
                } else {
                    $product = $this->productModel->getProduct('id', $id);
                    $this->view("admin", "UpdateProduct", array_merge($product, $data));
                }
            } else {
                $product = $this->productModel->getProduct('id', $id);
                $this->view("admin", "UpdateProduct", $product);
            }
        }
    }

    public function ProductDetail($id)
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            $result = $this->productModel->getProduct('id', $id);
            $this->view("admin", "ProductDetail", $result);
        }
    }

    public function searchProducts()
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $findingProducts = $_POST['search'];
                $result = [];
                $searchProductCode = $this->productModel->searchProducts("product_code", $findingProducts);
                $searchProductName = $this->productModel->searchProducts("product_name", $findingProducts);
                $searchProductCategory = $this->productModel->searchProducts("category", $findingProducts);
                $searchProductVendor = $this->productModel->searchProducts("vendor", $findingProducts);
                if (isset($searchProductCode)) {
                    $result = $searchProductCode;
                } elseif (isset($searchProductName)) {
                    $result = $searchProductName;
                } elseif (isset($searchProductCategory)) {
                    $result = $searchProductCategory;
                } elseif (isset($searchProductVendor)) {
                    $result = $searchProductVendor;
                }
                $this->view("admin", "SearchProducts", $result);
            }
        }
    }

    public function showProfile()
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            $data = $this->userModel->getUserData($_SESSION['username']);
            $this->view("admin", "profile", $data);
        }
    }

    public function UserList()
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            $list = $this->userModel->getAllUser();
            $this->view("admin", "ListOfUsers", $list);
        }
    }

    public function deleteUser($id)
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            $this->userModel->deleteUser($id);
            header("location: " . URLROOT . "/Manager/UserList");
        }
    }

    public function searchUser()
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $findingUser = $_POST['search'];
                $result = [];
                $searchUserName = $this->userModel->searchUser("name", $findingUser);
                $searchUserPhone = $this->userModel->searchUser("phone_number", $findingUser);
                $searchUserAddress = $this->userModel->searchUser("address", $findingUser);
                $searchUserAccount = $this->userModel->searchUser("account", $findingUser);
                $searchUserEmail = $this->userModel->searchUser("email", $findingUser);
                if (isset($searchUserName)) {
                    $result = $searchUserName;
                } elseif (isset($searchUserPhone)) {
                    $result = $searchUserPhone;
                } elseif (isset($searchUserAddress)) {
                    $result = $searchUserAddress;
                } elseif (isset($searchUserAccount)) {
                    $result = $searchUserAccount;
                } elseif (isset($searchUserEmail)) {
                    $result = $searchUserEmail;
                }
                $this->view("admin", "SearchUsers", $result);
            }
        }
    }

    public function OrdersList($page)
    {
        if (!isPermissible()) {
            $this->view("home", "PermissionError");
        } else {
            //model
            $list = $this->orderModel->getAllOrders($page);
            $quantity = $this->orderModel->getQuantityOrders();
            //view
            $this->view("admin", "ListOfOrders", ["orders" => $list, "order_quantity" => $quantity, "page" => $page]);
        }
    }

}

?>