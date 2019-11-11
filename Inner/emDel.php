<?
session_start();
$conn = mysqli_connect("localhost","root","","Restaurant");

$id = $_POST["id"];

$sql = "DELETE FROM `Employees` WHERE EmId='$id'";

if (mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("The employee s infomation have been deleted ");';
    echo 'window.location.href="../Inner/em.php";';
    echo '</script>';
} else {
   echo '<script language="javascript">';
    echo 'alert("We cant find such employee");';
    echo 'window.location.href="../Inner/em.php";';
    echo '</script>';

}

mysqli_close($conn);

?>