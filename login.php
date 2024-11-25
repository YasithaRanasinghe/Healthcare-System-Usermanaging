<?php
if(isset($_POST["submit"])) {
    $username = $_POST["uname"];
    $password = $_POST["pwd"];

    require_once 'config.php';

    if(emptyInputs($username, $password) !== false) {
        exit();
    }  

    loginUser($conn, $username, $password);
}
else {
     header('location:./login.html');
     exit();
}
?>

<!DOCTYPE html>
<head>
    <title>login|Fit Well</title>
    <link rel="stylesheet" href="./Styles.css">
</head>

<body class="bg-img">
    <div class="lcontainer">
        <h2>Login</h2>
        <br>
        <br>
        <form action="login.php" method="post">
          <input type="text" name="uname" placeholder="Username" required>
          <br>
          <br>
          <input type="password" name="pwd" placeholder="Password" required>
          <br>
          <br>
          <br>
          <button type="submit" name="submit">Login</button>
          <br>
          <p><a href="register.php">Dont have an account?</a></p>
          <br>
          <p><a href="#">Forgot Password?</a></p>
        </form>
      </div>
</body>
</html>