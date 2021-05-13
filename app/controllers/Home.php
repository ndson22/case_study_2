<?php
class Home extends Controller
{
    public function index()
    {
        $this->view('home', 'homepage');
    }

    public function managerIndex()
    {
        $products_data = $this->model("ProductModel")->getQuantityProducts();
        $user_data = $this->model("UserModel")->getQuantityUser();
        $this->view("home", "managerHomePage", array_merge($products_data, $user_data));
    }
}
