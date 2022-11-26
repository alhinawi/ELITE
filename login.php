<?php 
session_start();
if (isset($_SESSION['username'])) {
    header('location:index.php');
}

include "init.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password); // sha1() is a function that encrypts the password
    
    $stmt = $con->prepare("SELECT Username, Password  FROM users WHERE username = ? AND password = ?");
    $stmt->execute(array($username, $hashedPass));
    $count = $stmt->rowCount();
    if ($count > 0) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        echo '<div id="alert" class="alert alert-danger">Wrong Username or Password</div>';
        
    }

}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="auther" content="." />
    <title>login</title>
    <!-- favicon link  -->
    <link rel="shortcut icon" href="<?php echo $img; ?>favicon.jpg" type="image/jpg" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo $css; ?>style.css" />
    <link rel="stylesheet" href="<?php echo $css; ?>login.css" />
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css" />
</head>


<body>
    <div class="wx">
      
        <div class="login">
            <h2>LOGIN</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <input type="text" id="userName" name="user" placeholder="USER NAME" required>
                <input type="password" id="password" name="pass" placeholder="PASSWORD" required>
                <button id="btnLo" onclick="login()">LOGIN</button>
                <br>
                <br>
                <a href="reg.php" class="sign-up">SIGN UP</a>
            </form>
        </div>
</body>
</html>