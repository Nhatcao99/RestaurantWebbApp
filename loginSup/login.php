<?php
session_start();

$conn = mysqli_connect("localhost","root","","Restaurant");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$username  = $_POST["user"];
$password = $_POST["pass"];

if ($username == "" || $password == ""){
    echo '<script language="javascript">';
    echo 'alert("Please enter password");';
    echo 'window.location.href="../index.php";';
    echo '</script>';
}else{

$sql = "SELECT `username`, `password` FROM `User`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
        if($username == $row['username'] && $password == $row['password']){
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            echo '<script language="javascript">';
            echo 'window.location.href="../Inner/homepage.php";';
            echo '</script>';
            break;
        }else {
            echo '<script language="javascript">';
            echo 'alert("Login unsuccesfully. Wrong username or password");';
            echo 'window.location.href="../index.php";';
            echo '</script>';
        }
    }
} else {
    echo '<script language="javascript">';
            echo 'alert("Login unsuccesfully. Wrong username or password");';
            echo 'window.location.href="../index.php";';
            echo '</script>';
}

mysqli_close($conn);}
?>