<?php
require_once '../config.php';
$stmt = $pdo->prepare('select * from users where email=?');
$stmt -> execute($_POST['input-email']);
$user= $stmt->fetch(PDO::FETCH_ASSOC);

$returnarray=[];
if($user && $_POST['userpasword']=== $_POST['useremail']){
    $returnarray['id']= $user['id'];
    $returnarray['name']= $user['email'];
    $returnarray['user_name']= $user['name'];
    $returnarray['user_type_id']= $user['user_type_id'];
    $returnarray['success']= true;
}
else{
    $returnarray['success']= false;
}
echo json_encode($returnarray);