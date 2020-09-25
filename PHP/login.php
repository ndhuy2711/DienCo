<?php
require_once('database.php');

if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != '')
{
  echo 'login thanh cong';
  echo $_POST['email'];
  echo $_POST['password'];
}
else {
  echo 'login that bai';
  echo $_POST['email'];
  echo $_POST['password'];
}
