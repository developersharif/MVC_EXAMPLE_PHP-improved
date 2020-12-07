<?php
class Core
{
    protected $curentController = "home"; //default- home controller.
    protected $curentMethod = "index"; //default- index Method.
    protected $param = [];
    public function __construct()
    {
        $url = $this->getUlr();
        if (isset($url)) {
            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                $this->curentController = ucwords($url[0]);
                unset($url[0]);
                //controller load
                require_once '../app/controllers/' . $this->curentController . '.php';
                $this->curentController = new $this->curentController;
                //method load
                if (isset($url[1])) {
                    if (method_exists($this->curentController, $url[1])) {
                        $this->curentMethod = $url[1];
                        unset($url[1]);
                        $this->param = $url ? array_values($url) : [];
                        call_user_func_array([$this->curentController, $this->curentMethod], $this->param);
                    }
                }
            }
        } else {
            //default controller load.
            require_once '../app/controllers/' . $this->curentController . '.php';
            $this->curentController = new $this->curentController;
            call_user_func_array([$this->curentController, $this->curentMethod], $this->param);
        }
    }


    public function getUlr()
    {
        if (isset($_GET["url"])) {
            $url = $_GET["url"];
            $url = rtrim($url, "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}