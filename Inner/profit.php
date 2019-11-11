<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Ingredients Management page</title>
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
  border-bottom:#c7265b 3px solid;
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
  color:#c7265b;
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
  background-color:#c7265b;
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
  background-color: #c7265b;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #c7265b;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #c7265b;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #c7265b;
}



  </style>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Ingredients</span>Management</h1>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Shiftes</h1>
          <!--ul id="services">
            <li>
              <h3>Employee Management</h3>
              <p>A great employee is like a four leaves clover. Hard to find and  lucky to have</p>
              <p>We are what we repeatedly do. Excellence then , is not an act , but a habbit</p>
 						  <p><a href="em.php" class = "link">Go to page</a></p>
            </li>
            <li>
              <h3>Ingredients Management</h3>
              <p>It is simple. Great ingredients make great food</p>
              <p>The secret ingredient is always the most simple</p>
						  <p><a href="Ingredients.php" class = "link">Go to page</a></p>
            </li>
            <li>
              <h3>Profit Management</h3>
              <p>Profit isn't a purpose , it's a result.</p>
              <p>To have purpose means the things we do are of real value to others</p>
						  <p><a href="profit.php" class = "link">Go to page</a></p>
            </li>
          </ul-->
                <table class="content-table">
        <thead>
            <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Points</th>
            <th>Team</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>Domenic</td>
            <td>88,110</td>
            <td>dcode</td>
            </tr>
            <tr>
            <td>2</td>
            <td>Sally</td>
            <td>72,400</td>
            <td>Students</td>
            </tr>
            <tr>
            <td>3</td>
            <td>Nick</td>
            <td>52,300</td>
            <td>dcode</td>
            </tr>
        </tbody>
        </table>

        </article>
      </div>
    </section>

    <footer>
      <p>In investing, what is comfortable is rarely profitable</p>
    </footer>
  </body>
</html>
