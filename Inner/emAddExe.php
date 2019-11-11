<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","Restaurant");

    if($_SESSION["username"] != "" || $_SESSION["password"] != ""){
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $spec = $_POST["speciality"];
    $Shift = $_POST["Shift"];
    $number = $_POST["Number"];
    $salary = $_POST["Salary"];
    $doAdd = 1;

    if(($id == "" || $name == "" || $gender == "" || $spec == "" || $shift = ""|| $num = "" || $sal = "")){
        $doAdd = 0;
        echo '<script language="javascript">';
        echo 'alert("Please fill all the form");';
        echo 'window.location.href="../Inner/emAdd.php";';
        echo '</script>';
    }
    
    if (($gender != "Male") && ($gender != "Female")){
        $doAdd = 0;
        echo '<script language="javascript">';
        echo 'alert("Male or Female only");';
        echo 'window.location.href="../Inner/emAdd.php";';
        echo '</script>';

        echo "Error adding record: " . mysqli_error($conn);
    }
    if (($spec != "Chef") && ($spec != "Cook Assistant") && ($spec != "Bartender") && ($spec != "Bakery") && ($spec != "Steward") && ($spec != "Table Runner")){
        $doAdd = 0;
        echo '<script language="javascript">';
        echo 'alert("Only choose the available options in Speciality");';
        echo 'window.location.href="../Inner/emAdd.php";';
        echo '</script>';

        echo "Error adding record: " . mysqli_error($conn);
    }
    if (($Shift != "Morning") && ($Shift != "Evening")){
        $doAdd = 0;
        echo '<script language="javascript">';
        echo 'alert("Only choose the available options in Shift");';
        echo 'window.location.href="../Inner/emAdd.php";';
        echo '</script>';

    }

    $sqlin0 = "SELECT `EmID`, `Name`, `Gender`, `Speciality`, `Shift`, `Contact Number`, `Salary` FROM `Employees`";
    $result = mysqli_query($conn, $sqlin0);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if($id == $row["EmID"]){
                $doAdd = 0;
                echo '<script language="javascript">';
                echo 'alert("The ID already exists");';
                echo 'window.location.href="../Inner/emAdd.php";';
                echo '</script>';
            break;
            }
        }
    } 


    if($doAdd == 1){
    $sql = "INSERT INTO `Employees`(`EmID`, `Name`, `Gender`, `Speciality`, `Shift`, `Contact Number`, `Salary`) VALUES ('$id','$name','$gender','$spec','$Shift','$number','$salary');";
    if (mysqli_query($conn, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("New record have been added");';
        echo 'window.location.href="../Inner/emAdd.php";';
        echo '</script>';
        print $num;
        print $sal;
    } else {
        echo '<script language="javascript">';
        echo 'alert("Fail to add new record");';
        echo 'window.location.href="../Inner/emAdd.php";';
        echo '</script>';
        echo "Error adding record: " . mysqli_error($conn);
    }}}else{
        echo '<script language="javascript">';
        echo 'window.location.href="../logout.php";';
        echo '</script>';
    }
    
    mysqli_close($conn);
?>