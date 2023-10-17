<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'fatec' && $password === 'portaria') {
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Login ou senha inválidos";    
    }
}
// Unset todas as variáveis
$_SESSION = array();
 
// Destruir a sessão.
session_destroy();
 
// Redireciona para página de login
header("location: index.php");
exit;
?>