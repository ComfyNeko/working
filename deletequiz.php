<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quizzie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>
<style>
@import url("https://fonts.googleapis.com/css?family=Spartan&display=swap");
* {
  margin: 0;
  padding: 0;
}
* {
  box-sizing: border-box;
}

html.open,
body.open {
  height: 100%;
  overflow: hidden;
}

html {
  padding: 40px;
  font-size: 62.5%;
}

body {
  background: url("https://sharegate.com/app/uploads/2020/05/sgdesktop-teamsmigration-release-featured-1-920x517.png");
  background-size: cover;
  font-family: "Spartan";
  padding: 20px;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  color: #fff;
  font-size: 1.6rem;
}

p {
  text-align: center;
  margin: 20px 0 60px;
}

main {
  background-color: #2c3845;
}

h1 {
  text-align: center;
  font-weight: 300;
  font-family: 'Brush Script MT', cursive;
  color: #000000
}

table {
  display: block;
}

tr,
td,
tbody,
tfoot {
  display: block;
}

thead {
  display: none;
}

tr {
  padding-bottom: 10px;
}

td {
  padding: 10px 10px 0;
  text-align: center;
}
td:before {
  content: attr(data-title);
  color: #7a91aa;
  text-transform: uppercase;
  font-size: 1.4rem;
  padding-right: 10px;
  display: block;
}

table {
  width: 100%;
}

th {
  text-align: left;
  font-weight: 700;
}

thead th {
  background-color: #202932;
  color: #fff;
  border: 1px solid #202932;
}

tfoot th {
  display: block;
  padding: 10px;
  text-align: center;
  color: #b8c4d2;
}

.button {
  line-height: 1;
  display: inline-block;
  font-size: 1.2rem;
  text-decoration: none;
  border-radius: 5px;
  color: #fff;
  padding: 8px;
  background-color: #4b908f;
}

.select {
  padding-bottom: 20px;
  border-bottom: 1px solid #28333f;
  text-align: center;
}
.select:before {
  display: none;
}

.detail {
  background-color: #bd2a4e;
  width: 100%;
  height: 100%;
  padding: 40px 0;
  position: fixed;
  top: 0;
  left: 0;
  overflow: auto;
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.detail.open {
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

.detail-container {
  margin: 0 auto;
  padding: 40px;
  max-width: 500px;
}

dl {
  margin: 0;
  padding: 0;
}

dt {
  font-size: 2.2rem;
  font-weight: 300;
}

dd {
  margin: 0 0 40px 0;
  font-size: 1.8rem;
  padding-bottom: 5px;
  border-bottom: 1px solid #ac2647;
  box-shadow: 0 1px 0 #c52c51;
}

.close {
  background: none;
  padding: 18px;
  color: #fff;
  font-weight: 300;
  border: 1px solid rgba(255, 255, 255, 0.4);
  border-radius: 4px;
  line-height: 1;
  font-size: 1.8rem;
  position: fixed;
  right: 40px;
  top: 20px;
  -moz-transition: border 0.3s linear;
  -o-transition: border 0.3s linear;
  -webkit-transition: border 0.3s linear;
  transition: border 0.3s linear;
}
.close:hover, .close:focus {
  background-color: #a82545;
  border: 1px solid #a82545;
}

@media (min-width: 460px) {
  td {
    text-align: left;
  }
  td:before {
    display: inline-block;
    text-align: right;
    width: 140px;
  }

  .select {
    padding-left: 160px;
  }
}
@media (min-width: 720px) {
  table {
    display: table;
  }

  tr {
    display: table-row;
  }

  td,
  th {
    display: table-cell;
  }

  tbody {
    display: table-row-group;
  }

  thead {
    display: table-header-group;
  }

  tfoot {
    display: table-footer-group;
  }

  td {
    border: 1px solid #28333f;
  }
  td:before {
    display: none;
  }

  td,
  th {
    padding: 10px;
  }

  tr:nth-child(2n + 2) td {
    background-color: #242e39;
  }

  tfoot th {
    display: table-cell;
  }

  .select {
    padding: 10px;
  }
}

</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="quizzie.php">Quizzie</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="quizzie.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	  <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Quiz Maker<span class="caret"></span></a>
	  <ul class="dropdown-menu">
          <li><a href="cq.php">Create Quiz</a></li>
          <li><a href="deletequiz.php">Delete Quiz</a></li>
		  <li><a href="display.php">Display Quiz</a></li>
	  </ul>
      </li>	
      <li><a href="user.php"><span class="glyphicon glyphicon glyphicon-flash"></span> Users</a></li>	  
	  <li><a href="leaderboard.php"><span class="glyphicon glyphicon-stats"></span> Leaderboard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" action="search.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      <li><a href="adminlogin.php" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<?php
	       $conn = new mysqli("localhost", "root", "", "quizdb");
		   if(($_POST)>0){
	
	         //  $quizid=mysqli_query($conn,"SELECT quizid FROM quiz ORDER BY quizid DESC LIMIT 1");
	         //  if(!$quizid){
	           //     die(mysqli_error($conn));
	            //}
	           //if(mysqli_num_rows($quizid) > 0) { 
                 // $quizidr = mysqli_fetch_assoc($quizid);
	              //echo $quizidr["quizid"].'<br>';
	              //$sql= $quizidr["quizid"];
	            //} 
			   

	?>
<h1>
  DELETE QUIZ
</h1>
<p>
</p>
<main>
  <table>
    <thead>
      <tr>
        <th>
          Quiz Title
        </th>
        <th>
          CSP
        </th>
        <th></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th colspan='3'>
          Year: 2021
        </th>
      </tr>
    </tfoot>
    <tbody>
      <tr>
	  <?php //for($i=0;$i<=$sql;$i++){ 
	 $row = mysqli_query($conn,"SELECT * FROM quiz ORDER BY quizid ASC");			
		    while($rows = $row->fetch_assoc()){
	?>
        <td data-title='Provider Name'>
         <?php echo $rows['title']?>
        </td>
        <td data-title='E-mail'>
          <?php echo $rows['csp']?>
        </td>
        <td class='select'>
          <a class='button' href="delete.php?quizid=<?php echo $rows['quizid']; ?>">
            Delete
          </a>
        </td>
      </tr>
	  <?php }} ?>
    </tbody>
  </table>
  <div class='detail'>
    <div class='detail-container'>
      <dl>
        <dt>
          QUIZ DELETED!!
        </dt>
      </dl>
	  <dl>
        <dt>
        </dt>
      </dl>
    </div>
    <div class='detail-nav'>
      <button class='close'>
        Close
      </button>
    </div>
  </div>
</main>
</body>
</html>