<?php

class ProductModel
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new Database();
    }

    public function getAllProducts($page)
    {
        $sql = "SELECT * FROM `products` LIMIT ?,?";
        $this->connect->query($sql);
        $this->connect->bind(1, 12 * ($page - 1));
        $this->connect->bind(2, 12);
        $this->connect->execute();
        return $this->connect->resultSet();
    }

    public function getProduct($column, $value)
    {
        $sql = "SELECT * FROM `products` WHERE `$column` = $value";
        $this->connect->query($sql);
        $this->connect->execute();
        return $this->connect->single();
    }

    public function addProducts($product)
    {
        $sql = "INSERT INTO `products` (`product_code`,`product_name`, `category`, `vendor`, `description`, `image`, `amount`, `size`, `price`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->connect->query($sql);
        $this->connect->bind(1, $product['product_code']);
        $this->connect->bind(2, $product['product_name']);
        $this->connect->bind(3, $product['category']);
        $this->connect->bind(4, $product['vendor']);
        $this->connect->bind(5, $product['description']);
        $this->connect->bind(6, $product['image']);
        $this->connect->bind(7, $product['amount']);
        $this->connect->bind(8, $product['size']);
        $this->connect->bind(9, $product['price']);
        return $this->connect->execute();
    }

    public function deleteProducts($id)
    {
        $sql = "DELETE FROM `products` WHERE id = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $id);
        return $this->connect->execute();
    }

    public function updateProduct($id, $product)
    {
        $sql = "UPDATE `products` SET `product_code` = ?, `product_name` = ?, `category` = ?, `vendor` = ?, `description` = ?, `image` = ?, `amount` = ?, `size` = ?, `price` = ? WHERE `id` = ?";
        $this->connect->query($sql);
        $this->connect->bind(1, $product['product_code']);
        $this->connect->bind(2, $product['product_name']);
        $this->connect->bind(3, $product['category']);
        $this->connect->bind(4, $product['vendor']);
        $this->connect->bind(5, $product['description']);
        $this->connect->bind(6, $product['image']);
        $this->connect->bind(7, $product['amount']);
        $this->connect->bind(8, $product['size']);
        $this->connect->bind(9, $product['price']);
        $this->connect->bind(10, $id);
        return $this->connect->execute();
    }

    public function getQuantityProducts()
    {
        $sql = "SELECT COUNT(`product_code`) AS `quantity`, SUM(`amount`) AS `amount` FROM `products`";
        $this->connect->query($sql);
        $this->connect->execute();
        return $this->connect->single();
    }

    public function searchProducts($option, $search)
    {
        $sql = "SELECT * FROM `products` WHERE $option LIKE '%$search%'";
        $this->connect->query($sql);
        $this->connect->execute();
        return $this->connect->resultSet();
    }
}

?>