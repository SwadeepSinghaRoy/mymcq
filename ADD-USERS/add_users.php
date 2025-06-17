<?php

try {
    require_once "../CONNECTIONS/config.php";

    //Get Id's Count
    $stmt = $pdo->prepare('SELECT COUNT(id) FROM users;');
    $stmt->execute([]);
    $totalIds = $stmt->fetchColumn(0);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['user_type_id'],$_POST['name'],$_POST['email'],$_POST['password'])) {

        $id=($totalIds+1);
        $userTypeId=$_POST['user_type_id'];
        $userName=$_POST['name'];
        $useremail=$_POST['email'];
        $userPassword=$_POST['password'];

            $stmt = $pdo->prepare('INSERT INTO users(id,user_type_id,name,email,user_password)VALUES(?,?,?,?,?)');
            if($stmt->execute([$id,$userTypeId,$userName,$useremail,$userPassword])){
                echo "User $userName Regestered,";
            }        
        } else {
            echo "Please Fulfill Informations,";
        }
    }else {
        echo "This script only handles post requests.";
    }
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}