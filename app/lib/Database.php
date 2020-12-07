<?php
class Database
{
    protected $host = DB_HOST;
    protected $usr = DB_USER;
    protected $pass = DB_PASS;
    protected $dbname = DB_NAME;
    protected $db;
    public function __construct()
    {
        $con = new mysqli($this->host, $this->usr, $this->pass, $this->dbname);
        $this->db = $con;
    }

    protected function select($query)
    {
        $dbquery = mysqli_query($this->db, $query);
        if ($dbquery) {
            return $dbquery;
        } else {
            return die("<b>Error Query.</b>");
        }
    }
}