<?php

class CartModel
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new Database();
    }

    public function getAllCart()
    {
        $sql = "SELECT `id`,`user_id`, GROUP_CONCAT(`product_code`), GROUP_CONCAT(`product_name`),GROUP_CONCAT(`product_id`), GROUP_CONCAT(`quantity`), GROUP_CONCAT(`unit_price`) FROM `UserCart` GROUP BY `id`";
        $this->connect->query($sql);
        $this->connect->execute();
        return $this->connect->resultSet();
    }

    public function getCart($cart_id)
    {
        $sql = "SELECT `cart_id`,`user_id`, GROUP_CONCAT(`product_code`) AS product_code, GROUP_CONCAT(`product_name`) AS product_name,GROUP_CONCAT(`product_id`) AS product_id, GROUP_CONCAT(`size`) AS size,GROUP_CONCAT(`quantity`) AS quantity, GROUP_CONCAT(`unit_price`) AS unit_price FROM `UserCart` WHERE `cart_id` = ? GROUP BY `cart_id`";
        $this->connect->query($sql);
        $this->connect->bind(1, $cart_id);
        $this->connect->execute();
        return $this->connect->single();
    }

    public function getCartDetail($cart_id)
    {
        $sql = "SELECT * FROM `cart_detail` WHERE `cart_id` = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $cart_id);
        $this->connect->execute();
        return $this->connect->resultSet();
    }

    public function addToCart($cart)
    {
        $sql = "INSERT INTO `cart` SET `user_id` = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $cart['id']);
        return $this->connect->execute();
    }

    public function addToCartDetail($cart_detail)
    {
        $sql = "INSERT INTO `cart_detail` SET `cart_id` = ?, `size` = ?, `product_id` = ?, `quantity` = ?, `unit_price` = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $cart_detail['cart_id']);
        $this->connect->bind(2, $cart_detail['size']);
        $this->connect->bind(3, $cart_detail['product_id']);
        $this->connect->bind(4, $cart_detail['quantity']);
        $this->connect->bind(5, $cart_detail['unit_price']);
        return $this->connect->execute();
    }

    public function deleteCartDetail($cart_id, $product_id)
    {
        $sql = "DELETE FROM `cart_detail` WHERE `cart_id` = ? AND `product_id` = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $cart_id);
        $this->connect->bind(2, $product_id);
        return $this->connect->execute();
    }

    public function deleteCart($cart_id)
    {
        $sql = "DELETE FROM `cart` WHERE `id` = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $cart_id);
        return $this->connect->execute();
    }

    public function getUserCart($user)
    {
        $sql = "SELECT * FROM `cart` WHERE `user_id` = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $user['id']);
        $this->connect->execute();
        return $this->connect->single();
    }
}