<?php
    class UserModel {
        protected $connect;

        public function __construct() {
            $this->connect = new Database;
        }

        public function getUserData($username)
        {
            $sql = "SELECT * FROM `user` WHERE `account` = ?";
            $this->connect->query($sql);
            $this->connect->bind(1, $username);
            $this->connect->execute();
            return $this->connect->single();
        }

        public function getQuantityUser()
        {
            $sql = "SELECT COUNT(`id`) AS `quantity_user`, count(`account`) AS `quantity_account` FROM `user`";
            $this->connect->query($sql);
            $this->connect->execute();
            return $this->connect->single();
        }

        public function addUser($user)
        {
            $sql = "INSERT INTO `user` (`name`, `phone_number`, `address`, `account`, `password`, `email`) VALUES (?, ?, ?, ?, ?, ?)";
            $this->connect->query($sql);
            $this->connect->bind(1, $user['name']);
            $this->connect->bind(2, $user['phone_number']);
            $this->connect->bind(3, $user['address']);
            $this->connect->bind(4, $user['account']);
            $this->connect->bind(5, $user['password']);
            $this->connect->bind(6, $user['email']);
            return $this->connect->execute();
        }

        public function getAllUser()
        {
            $sql = "SELECT `name`, `phone_number`, `address`, `email`, `account`, `image`, `permission` FROM `user`";
            $this->connect->query($sql);
            $this->connect->execute();
            return $this->connect->resultSet();
        }

        public function deleteUser($id)
        {
            $sql = "DELETE FROM `user` WHERE id = ?";
            $this->connect->query($sql);
            $this->connect->bind(1, $id);
            return $this->connect->execute();
        }

        public function searchUser($option, $search)
        {
            $sql = "SELECT * FROM `user` WHERE $option LIKE '%$search%'";
            $this->connect->query($sql);
            $this->connect->execute();
            return $this->connect->resultSet();
        }
    }
