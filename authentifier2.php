
<?php
session_start();

require_once 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        
        header("Location: espaceprivee.php");
        exit();
    } else {
        header('Location: authentifier.php?error=1');
    }
}

$conn = null;
?>
