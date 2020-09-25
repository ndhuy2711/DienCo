<?php
require_once ('database.php');
require_once ('function.php');

if( isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '')
{
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if($password == $repassword && )
    {
         
    }
    else {
        echo 'nhap sai repass';
    }
    
}
else{
    echo 'đk thất bại';
}
?>
