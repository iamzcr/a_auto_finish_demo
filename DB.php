<?php
/**
 * Created by PhpStorm.
 * User: mixmedia
 * Date: 15-2-3
 * Time: 下午6:35
 */
class DB{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private  $conn;

    public  function __construct($host,$username,$password,$dbname){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->conn = mysql_connect($host,$username,$password);
        if(!$this->conn){
            return;
        }else{
            mysql_select_db($this->dbname,$this->conn);
            mysql_query("set names utf8");
        }

    }
}
new DB("localhost","root","","test");