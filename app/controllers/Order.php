<?php

class Order extends Controller
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = $this->model("OrderModel");
    }

//    public function pay()
//    {
//        if ($_SERVER['REQUEST_METHOD'] == "GET") {
//            $this->view("user","payment");
//        } else {
//            $this->orderModel->addOrder();
//        }
//    }
}