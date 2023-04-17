<!DOCTYPE html>
<head>
<?php

$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "register";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit;
    }

    if ($password != $confirm_password) {
        echo "Passwords do not match";
        exit;
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO register (name, email, contact, address, password) VALUES ('$name', '$email', '$contact', '$address', '$password_hash')";
    mysqli_query($conn, $sql);
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
    
<form action="register.php" method="POST">
<h2> Register Form </h2>

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="contact">Contact No. :</label><br>
    <input type="tel" id="contact" name="contact" required>
    <br><br>
    <label for="address">Home Address:</label><br>
    <textarea id="address" name="address" required></textarea>
    <br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required>
    <br><br>
    <label for="confirm_password">Confirm Password:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <br><br>
    <input type="submit" value="Register">
</form>


</body>

</html>