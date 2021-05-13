<?php

class OrderModel
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new Database();
    }

    public function addOrder($order)
    {
        $sql = "INSERT INTO `orders`(`user_id`, `order_date`, `ship_date`, `ship_address`) VALUES (?, ?, ?, ?)";
        $this->connect->query($sql);
        $this->connect->bind(1, $order['user_id']);
        $this->connect->bind(2, $order['order_date']);
        $this->connect->bind(3, $order['ship_date']);
        $this->connect->bind(4, $order['ship_address']);
        return $this->connect->execute();
    }

    public function addOrderDetail($order_detail)
    {
        $sql = "INSERT INTO `order_detail` (`order_number`, `product_id`, `quantity`, `unit_price`, `size`) VALUES (?, ?, ?, ?, ?)";
        $this->connect->query($sql);
        $this->connect->bind(1, $order_detail['order_number']);
        $this->connect->bind(2, $order_detail['product_id']);
        $this->connect->bind(3, $order_detail['quantity']);
        $this->connect->bind(4, $order_detail['unit_price']);
        $this->connect->bind(5, $order_detail['size']);
        return $this->connect->execute();
    }

    public function getLastOrderNumber()
    {
        $sql = "SELECT MAX(order_number) AS `number` FROM `orders`";
        $this->connect->query($sql);
        $this->connect->execute();
        return $this->connect->single();
    }

    public function getAllOrders($page)
    {
        $sql = "SELECT * FROM `customer_orders` LIMIT ?,?";
        $this->connect->query($sql);
        $this->connect->bind(1, 12 * ($page - 1));
        $this->connect->bind(2, 12);
        $this->connect->execute();
        return $this->connect->resultSet();
    }

    public function getQuantityOrders()
    {
        $sql = "SELECT COUNT(`order_number`) AS `quantity` FROM `customer_orders`";
        $this->connect->query($sql);
        $this->connect->execute();
        return $this->connect->single();
    }
}