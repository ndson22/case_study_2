<?php

class Product extends Controller
{
    protected $productModel;
    protected $cartModel;
    protected $userModel;
    protected $orderModel;

    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
        $this->cartModel = $this->model("CartModel");
        $this->userModel = $this->model("UserModel");
        $this->orderModel = $this->model("OrderModel");
    }

    public function ListProducts($page)
    {
        if (isset($_SESSION['username'])) {
            $list = $this->productModel->getAllProducts($page);
            $quantity = $this->productModel->getQuantityProducts();
            $this->view("user", "ListOfProducts", ["products" => $list, "product_quantity" => $quantity, "page" => $page]);
        } else {
            $this->view("user", "login");
        }
    }

    public function detail($id)
    {
        $product = $this->productModel->getProduct("id", $id);
        $product['size'] = explode(",", trim($product['size']));
        $this->view("user", "ProductDetail", $product);
    }

    public function addToCard()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'];
            $amount = $_POST['quantity'];
            $size = $_POST['size'];
            $product = $this->productModel->getProduct("id", $id);
            $user = $this->userModel->getUserData($_SESSION['username']);
            $cart = $this->cartModel->getUserCart($user);
            if (!$cart) {
                $this->cartModel->addToCart($user);
                $cart = $this->cartModel->getUserCart($user);
            }
            $cart_detail = [
                'cart_id' => $cart['id'],
                'product_id' => $product['id'],
                'size' => $size,
                'quantity' => $amount,
                'unit_price' => $product['price']
            ];
            $this->cartModel->addToCartDetail($cart_detail);
            $_SESSION['success'] = "Add to cart success!";
            header("location: " . URLROOT . "/product/detail/" . $id);
        }
    }

    public function showCart()
    {
        $user = $this->userModel->getUserData($_SESSION['username']);
        $cart = $this->cartModel->getUserCart($user);
        $data = [];
        if ($cart != false) {
            $userCart = $this->cartModel->getCart($cart['id']);
            foreach ($userCart as $key => $value) {
                $userCart[$key] = explode(",", $value);
            }
            $numberProduct = count($userCart['product_name']);
            $attribute = ["product_id", "product_name", "size", "quantity", "unit_price"];
            for ($i = 0; $i<$numberProduct; $i++) {
                foreach ($attribute as $value) {
                    $data[$i][$value] = $userCart[$value][$i];
                    $data[$i]['total'] = $userCart['quantity'][$i] * $userCart['unit_price'][$i];
                    $data[$i]['cart_id'] = $userCart['cart_id'][0];
                }
            }
            $this->view("user", "card", $data);
        } else {
            $this->view("user", "card");
        }
    }

    public function deleteCartProduct($cart_id, $product_id)
    {
        $this->cartModel->deleteCartDetail($cart_id, $product_id);
        $data = $this->cartModel->getCartDetail($cart_id);
        if (!isset($data)) {
            $this->cartModel->deleteCart($cart_id);
        }
        header("location: " . URLROOT . "/product/showCart");
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $findingProducts = $_POST['search'];
            $data = [];
            $searchProductCode = $this->productModel->searchProducts("product_code", $findingProducts);
            $searchProductName = $this->productModel->searchProducts("product_name", $findingProducts);
            $searchProductCategory = $this->productModel->searchProducts("category", $findingProducts);
            $searchProductVendor = $this->productModel->searchProducts("vendor", $findingProducts);
            if (isset($searchProductCode)) {
                $data = $searchProductCode;
            } elseif (isset($searchProductName)) {
                $data = $searchProductName;
            } elseif (isset($searchProductCategory)) {
                $data = $searchProductCategory;
            } elseif (isset($searchProductVendor)) {
                $data = $searchProductVendor;
            }
            $this->view("user", "SearchProducts", $data);
        }
    }

    public function pay()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $user = $this->userModel->getUserData($_SESSION['username']);
            $cart = $this->cartModel->getUserCart($user);
            $data = [];
            if (isset($cart)) {
                $userCart = $this->cartModel->getCart($cart['id']);
                foreach ($userCart as $key => $value) {
                    $userCart[$key] = explode(",", $value);
                }
                $numberProduct = count($userCart['product_name']);
                $attribute = ["product_id", "product_name", "size", "quantity", "unit_price"];
                for ($i = 0; $i<$numberProduct; $i++) {
                    foreach ($attribute as $value) {
                        $data[$i][$value] = $userCart[$value][$i];
                        $data[$i]['total'] = $userCart['quantity'][$i] * $userCart['unit_price'][$i];
                        $data[$i]['cart_id'] = $userCart['cart_id'][0];
                    }
                }
                $this->view("user", "payment", array_merge($user, $data));
            }
        } else {
            $user = $this->userModel->getUserData($_SESSION['username']);
            $order_date = date("Y/m/d");
            $ship_date = date('Y-m-d', strtotime($order_date . '+ 3 days'));
            $ship_address = $_POST['address'];
            $order = [
                "user_id" => $user['id'],
                "order_date" => $order_date,
                "ship_date" => $ship_date,
                "ship_address" => $ship_address
            ];
            // add new order
            $this->orderModel->addOrder($order);
            // get recent order_number
            $order_number = $this->orderModel->getLastOrderNumber();
            //get cart id
            $user_cart = $this->cartModel->getUserCart($user);
            //get cart detail
            $cart_detail = $this->cartModel->getCartDetail($user_cart['id']);
            // add order detail
            for ($i = 0; $i < count($cart_detail); $i++) {
                $order_detail = [
                    "order_number" => $order_number['number'],
                    "product_id" => $cart_detail[$i]['product_id'],
                    "quantity" => $cart_detail[$i]['quantity'],
                    "unit_price" => $cart_detail[$i]['unit_price'],
                    "size" => $cart_detail[$i]['size']
                ];
                $this->orderModel->addOrderDetail($order_detail);
                // delete cart detail
                $this->cartModel->deleteCartDetail($user_cart['id'], $order_detail['product_id']);
            }
            //delete cart
            $this->cartModel->deleteCart($user_cart['id']);
            $this->view("user", "OrderComplete");
        }
    }
}

?>