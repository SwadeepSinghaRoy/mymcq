<?php
if(isset($_POST['userEmail'],$_POST['userPassword'])){
    require_once '../CONNECTIONS/config.php';
    try{
        $email=$_POST['userEmail'];
        // print_r($email);
        $password=$_POST['userPassword'];
        // print_r($password);
        $stmt=$pdo->prepare('select * from users where email=?');
        $stmt->execute([$email]);
        $user=$stmt->fetch(PDO::FETCH_ASSOC);
        // print_r($user);
        $responseArray=[];
        if($user && $password===$user['user_password']){
            $responseArray['success']=true;
            $responseArray['message']="Data Found";
            $responseArray['data']=$user;
        }else{
            $responseArray['success']=false;
            $responseArray['message']="Data Not Found";
        }
        echo json_encode($responseArray);
    }catch(PDOException $e){
        echo 'Error Checking:<br>'.$e->getmessage();
    }
}else{
    echo "Data Not Found";
}
?>