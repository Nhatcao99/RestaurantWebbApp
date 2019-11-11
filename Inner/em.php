<?
session_start();
$conn = mysqli_connect("localhost","root","","Restaurant");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Employee Management page</title>
  </head>
  <style>
    body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
  background-color:#f4f4f4;
}

/* Global */
.container{
  width:80%;
  margin:auto;
  overflow:hidden;
}

ul{
  margin:0;
  padding:0;
}

.button_1{
  height:38px;
  background:#e8491d;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
}

.dark{
  padding:15px;
  background:#35424a;
  color:#ffffff;
  margin-top:10px;
  margin-bottom:10px;
}

/* Header **/
header{
  background:#35424a;
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#1d90e8 3px solid;
}

header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}

header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}

header #branding{
  float:left;
}

header #branding h1{
  margin:0;
}

header nav{
  float:right;
  margin-top:10px;
}

header .highlight, header .current a{
  color:#1d90e8;
  font-weight:bold;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}

/* Showcase */
#showcase{
  min-height:400px;
  background:url('../img/showcase.jpg') no-repeat 0 -400px;
  text-align:center;
  color:#ffffff;
}

#showcase h1{
  margin-top:100px;
  font-size:55px;
  margin-bottom:10px;
}

#showcase p{
  font-size:20px;
}

/* Newsletter */
#newsletter{
  padding:15px;
  color:#ffffff;
  background:#35424a
}

#newsletter h1{
  float:left;
}

#newsletter form {
  float:right;
  margin-top:15px;
}

#newsletter input[type="email"]{
  padding:4px;
  height:25px;
  width:250px;
}

/* Boxes */
#boxes{
  margin-top:20px;
}

#boxes .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}

#boxes .box img{
  width:90px;
}

/* Sidebar */
aside#sidebar{
  float:right;
  width:30%;
  margin-top:10px;
}

/* Main-col */
article#main-col{
  float:left;
  width:65%;
}

/* Services */
ul#services li{
  list-style: none;
  padding:20px;
  border: #cccccc solid 1px;
  margin-bottom:5px;
  background:#e6e6e6;
}

footer{
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#1d90e8;
  text-align: center;
}

/* Media Queries */
@media(max-width: 768px){
  header #branding,
  header nav,
  header nav li,
  #newsletter h1,
  #newsletter form,
  #boxes .box,
  article#main-col,
  aside#sidebar{
    float:none;
    text-align:center;
    width:100%;
  }

  header{
    padding-bottom:20px;
  }

  #showcase h1{
    margin-top:40px;
  }

}

/**This is for content table */
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #1d90e8;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}


/*input form*/
input[type = text]{
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition:.3s;
}

input[type = text]:focus{
  border-color:dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}
 
 ::placeholder{
  color: dodgerBlue;
 }

 button{
   display: inline;
  background-color: dodgerBlue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 }
  </style>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Employees</span>Management</h1>
        </div>
      </div>
    </header>
   
    <section id="main">
      <div class="container">
        <article id="main-col">
        <button onclick = "window.location.href = '../Inner/homepage.php'">Home Page</button>
        <button onclick = "window.location.href = '../Inner/emAdd.php'">Add Employee</button>
        <button onclick = "window.location.href = '../logout.php'">Log out</button>

          <h1 class="page-title">Day Shifts</h1>
                <table class="content-table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Speciality</th>
            <th>Shift</th>
            <th>Contact Number</th>
            <th>Salary</th>
            </tr>
        </thead>
        <tbody>
          <?

            if($_SESSION["username"] != "" || $_SESSION["password"] != ""){
            $sql = "SELECT `EmID`, `Name`, `Gender`, `Speciality`, `Shift`, `Contact Number`, `Salary` FROM `Employees`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while($row = $result->fetch_assoc()) {
                if($row["Shift"] == "Morning"){
                echo "<tr><td>".$row["EmID"]."</td><td>".$row["Name"]."</td><td>".
                $row["Gender"]."</td><td>".$row["Speciality"]."</td><td>".$row["Shift"]."</td><td>"
                .$row["Contact Number"]."</td><td>".$row["Salary"]."</td></tr>";
              }}
            }}else{
              echo '<script language="javascript">';
              echo 'window.location.href="../logout.php";';
              echo '</script>';
            }
          ?>
        </tbody>
        </table>
        

        <h1 class="page-title">Night Shifts</h1>
                <table class="content-table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Speciality</th>
            <th>Shift</th>
            <th>Contact Number</th>
            <th>Salary</th>
            </tr>
        </thead>
        <tbody>
          <?
            $sql = "SELECT `EmID`, `Name`, `Gender`, `Speciality`, `Shift`, `Contact Number`, `Salary` FROM `Employees`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while($row = $result->fetch_assoc()) {
                if($row["Shift"] == "Evening"){
                echo "<tr><td>".$row["EmID"]."</td><td>".$row["Name"]."</td><td>".
                $row["Gender"]."</td><td>".$row["Speciality"]."</td><td>".$row["Shift"]."</td><td>"
                .$row["Contact Number"]."</td><td>".$row["Salary"]."</td></tr>";
              }}
            }
          ?>
        </tbody>
        </table>
        </article>
      </div>
    </section>
            <form action = "emDel.php" method = "post">
            <input type = "text" name = "id" placeholder = "Input Employee ID to delete the Employee information">
            <button>Delete</button>
            </form>
    <footer>
      <p>Train people well enough so they can leave. Treat them well enough so they don't want to</p>
    </footer>
  </body>
</html>
