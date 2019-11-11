<?
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    session_destroy();
    echo '<script language="javascript">';
    echo 'window.location.href="index.php";';
    echo '</script>';
?>