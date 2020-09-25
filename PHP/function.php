<?php
require_once ('database.php');
function findUserByEmail($email) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->execute(array(strtolower($email)));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
  }
  
  function findUserById($id) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute(array($id));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

function email ($email){
  $sql = "SELECT * FROM user WHERE email = '$email'";
  $result = mysqli_query($db,$sql);
  return $result;
}