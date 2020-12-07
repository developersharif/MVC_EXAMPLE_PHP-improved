<?php
class Controller
{
    public function model($model)
    {
        if (file_exists('../app/models/' . $model . '.php')) {
            require_once "../app/models/" . $model . ".php";
            return new $model;
        } else {
            return die("<p style='color:red'>Model:: <u><b>" . $model . "</b></u> Does Not Exists</p>");
        }
    }

    public function view($view, $data = [])
    {
        if ($data == true) {
            extract($data);
        }
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once "../app/views/" . $view . ".php";
        } else {
            die("<p style='color:red'>View::<u><b>" . $view . "</b></u> Does Not Exists</p>");
        }
    }
}