<?php include "init.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="auther" content="." />
    <title>Registeration</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo $img; ?>favicon.jpg" type="image/jpg" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="p<?php echo $css; ?>/style.css" />
    <link rel="stylesheet" href="<?php echo $css; ?>reg.css" />
</head>



<body>
    <!-- <h2 class="h2">
        Elegance at it's peak
        <br />
        <span>Fashion you can buy, but style you possess</span>
    </h2> -->

    <div class="SignUp">
        <h2 style="font-size: 30px">SIGN UP</h2>
        <form method="get" action="Login.php">
            <input type="text" id="username" placeholder="USER NAME" required />
            <input type="password" id="pasword" placeholder="PASSWORD" required />
            <input type="password" id="re-passsword" placeholder="RE-PASSWORD" required />
            <input type="e-mail" placeholder="E-MAiL" required />
            <button id="btn-sp" onclick="valid()">SIGN UP</button>
            <br />
            <a href="Login.php" class="sign-up">Login</a>
        </form>
    </div>

    <script src="<?php echo $js ?>script.js"></script>
</body>

</html>