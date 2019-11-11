<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Adding Employee Page</title>
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
  border-bottom:#b885e6 3px solid;
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
  color:#b885e6;
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
  background-color:#b885e6;
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
  background-color: #b885e6;
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
  border-bottom: 2px solid #b885e6;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #b885e6;
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
  border-color:#b885e6;
  box-shadow: 0 0 8px 0 #b885e6;
}
 
 ::placeholder{
  color: #b885e6;
 }

 button{
   display: inline;
  background-color: #b885e6;
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
          <h1><span class="highlight">Employee</span>Adding</h1>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <article id="main-col">
        <button onclick = "window.location.href = '../Inner/homepage.php'">Home Page</button>
        <button onclick = "window.location.href = '../Inner/em.php'">Employee Management</button>
        <button onclick = "window.location.href = '../logout.php'">Log out</button>

          <h1 class="page-title">Adding Form</h1>
            <form action = "emAddExe.php" method = "post">
              <h3 class="page-title">ID</h3>
              <input type = "text" name = "id" placeholder = "Input Employee ID">
              <h3 class="page-title">Name</h3>
              <input type = "text" name = "name" placeholder = "Input Employee Name">
              <h3 class="page-title">Gender</h3>
              <input type = "text" name = "gender" placeholder = "Input Employee Gender (Male/Female)">
              <h3 class="page-title">Speciality</h3>
              <input type = "text" name = "speciality" placeholder = "Input Employee Speciality(Chef/Cook Assistant/Bartender/Bakery/Steward/Table Runner)">
              <h3 class="page-title">Shift</h3>
              <input type = "text" name = "Shift" placeholder = "Input Employee Shift(Morning/Evening)">
              <h3 class="page-title">Number</h3>
              <input type = "text" name = "Number" placeholder = "Input Employee Contact Number">
              <h3 class="page-title">Salary</h3>
              <input type = "text" name = "Salary" placeholder = "Input Employee Salary">
              <button>Submit</button>
            </form>
        </article>
      </div>
    </section>

    <footer>
      <p>A new employee , a fresh start</p>
    </footer>
  </body>
</html>
