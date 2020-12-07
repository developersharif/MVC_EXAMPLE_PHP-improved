<?php
class Home extends Controller
{
    public function index()
    {
        $model = $this->model("HomeModel");
        $data["cat"] = $model->products();
        $this->view("index", $data);
    }
}