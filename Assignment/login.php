<!DOCTYPE html>
<head>
<?php
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "register";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


session_start();

if (isset($_SESSION["user_id"])) {
    header("Location: home.php");
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    $sql = "SELECT * FROM register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    
    if ($user && password_verify($password, $user['password'])) {
         echo "Success";
    } else {
        echo "Invalid email or password";
    }
}
?>


<style>
    h2 {
        margin-left: 15px;
    }
    form {
        font: 1em sans-serif;
        background-color : #81d4eb;
        margin : 10px;
        width : 50% ;
        color : #6b6d6e;
        padding : 20px;
        border-radius : 20px;
    }
    label {
        display: left;
        margin : 30px;
    }

    input , textarea {
        left : 100px ;
        height : 20px;
        width : 90% ;
        margin-left : 30px;
        background-color : #c8e6dd;
        border-radius : 5px;
    }
</style>
</head>

<body>
    
<form action="login.php" method="POST">
    <h2>Login Page</h2>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Login">
</form>


</body>

</html>