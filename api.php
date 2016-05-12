<?php
/**
 * Created by PhpStorm.
 * User: mixmedia
 * Date: 16-5-12
 * Time: 下午2:34
 */
require_once "./DB.php";
if($_GET){
    $name = $_GET['name'];
    $sql = "select name from user where name like '$name%'";
    $user_data = mysql_query($sql);
    $user = array();
    while($row = mysql_fetch_array($user_data)){
        $user[] = $row['name'];
    }
    echo json_encode($user);
    exit;
}

?>
