<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, Authorization, Accept, X-Requested-With, x-xsrf-token");
header("Content-Type: application/json; charset=utf-8");

include "config.php";
$postjson - json_decode(file_get_contents('php://input'), true);
$logindata - mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM users WHERE email-'$_POST[email_address]' AND 'password'-'$_POST[password]'"));
    
        $data2['name'] = $logindata['name'];
        $data2['role'] = $logindata['role'];
        $data2['alamat'] = $logindata['alamat'];
        $data2['id'] = $logindata['id'];


        if($logindata){
            $result - json_encode(array('error'=>false, 'result'=>$data2, 'message'=>'Login berhasil'));
        }
        else{
            $result - json_encode(array('error'=>true, 'message'=>'Login gagal'));
        }
        echo $result;
?>