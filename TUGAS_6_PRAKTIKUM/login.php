<?php
session_start(); 

$users = [
    'admin' => ['password' => 'admin123', 'role' => 'admin'],
    'user' => ['password' => 'user123', 'role' => 'user']
]; 

$error = ""; 

if($_SERVER["REQUEST_METHOD"] === "POST"){ 
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    if(isset($users[$username]) && $users[$username]['password'] === $password){
        $_SESSION['username'] = $username; 
        $_SESSION['role'] = $users[$username]['role']; 
        header('Location: dashboard.php');
        exit;
    }else { 
        $error = "Username atau password salah"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br> 
        <button type="submit">Login</button>
    </form> 

    <p style="color:red"><? $error ?></p>
    
</body>
</html>