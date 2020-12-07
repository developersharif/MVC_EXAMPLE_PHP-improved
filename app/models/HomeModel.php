<?php
class HomeModel extends Database
{
    public function products()
    {
        $sql = "SELECT * FROM products";
        return $this->select($sql);
    }
}