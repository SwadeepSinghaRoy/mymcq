<?php
try {
    require_once "../CONNECTIONS/config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['user_type_id'], $_POST['name'], $_POST['email'], $_POST['password'])) {

            $userTypeId = $_POST['user_type_id'];
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            // Optional: hash password
            // $userPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $stmt = $pdo->prepare('INSERT INTO users(user_type_id, name, email, user_password) VALUES (?, ?, ?, ?)');
            if ($stmt->execute([$userTypeId, $userName, $userEmail, $userPassword])) {
                echo "User $userName Registered Successfully";
            } else {
                echo "Please Fulfill Information Properly";
            }
        } else {
            echo "Please Fulfill Informations";
        }
    } else {
        echo "This script only handles POST requests.";
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
