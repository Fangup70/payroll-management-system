<?php
  include("auth.php"); //include auth.php file on all secure pages
  include("add_employee.php");
?>

<?php

  $conn = mysqli_connect('localhost', 'root', '', 'payroll');
  if (!$conn)
  {
    die("Database Connection Failed" . mysqli_error());
  }


  $query  = mysqli_query($conn,"SELECT * from deductions");
  while($row=mysqli_fetch_array($query))
  {
    $id           = $row['deduction_id'];
    $philhealth   = $row['MEDICAL'];
    $bir          = $row['PF'];
    $gsis         = $row['INCOME_TAX'];
    $love         = $row['PROFESSION_TAX'];
    $loans        = $row['LOANS'];

    $total        = $philhealth + $bir + $gsis + $love + $loans;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <title></title>

    <script>
      <!--
        var ScrollMsg= "Payroll Management System "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
      // -->
    </script>

    
    <link href="assets/css/justified-nav.css" rel="stylesheet">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="data:text/css;charset=utf-8," data-href="assets/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet"> -->
    <!-- <link href="assets/css/docs.min.css" rel="stylesheet"> -->
    <link href="assets/css/search.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.min.css">

  </head>
  <body>

    <div class="container">
      <div class="masthead">
        <h3>
          <b>Payroll Management System</b>
            <a data-toggle="modal" href="#colins" class="pull-right"><b><?php echo $_SESSION['username']; ?></b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="home_employee.php">Employee</a></li>
            <li><a href="home_deductions.php">Deduction/s</a></li>
            <li><a href="home_salary.php">Income</a></li>
          </ul>
        </nav>
      </div><br>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Payroll Mangement</h1>
        <p class="lead">The Payroll Management System is created through the use of HTML5, BOOTSTRAP, SQL , CSS, and PHP which is a server-side programming language.</p>
        <!--<p><a data-toggle="modal" class="btn btn-lg btn-success" href="#instructor" role="button">Submitted to:</a></p> -->
      </div>

      <!-- Site footer -->
      <!-- <footer class="footer">
        <p align="center">&copy; All Rights Reserved 2016</p>
        <p align="center">Copyright by <a target="_blank" href="http://www.must.edu.ph" data-show-count="true">Mindanao University of Science and Technology</a></p>
        <p align="center">About the <a target="_blank" href="http://www.facebook.com/colins.sabit">Developer</a></p>
      </footer> -->

      <!-- this modal is for my INSTRUCTOR -->
      <div class="modal fade" id="instructor" role="dialog">
        <div class="modal-dialog modal-sm">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center"><b>Instructor</b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="https://www.facebook.com/catipay.mustjc" target="_blank" title="My Instructor in OOP2"><big><b>Mr. Julieto P. Catipay</b></big></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- this modal is for my Colins -->
      <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center">You are logged in as <b><?php echo $_SESSION['username']; ?></b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="logout.php" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/docs.min.js"></script> -->
    <script src="assets/js/search.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>

    <!-- FOR DataTable -->
    <script>
      {
        $(document).ready(function()
        {
          $('#myTable').DataTable();
        });
      }
    </script>

    <!-- this function is for modal -->
    <script>
      $(document).ready(function()
      {
        $("#myBtn").click(function()
        {
          $("#myModal").modal();
        });
      });
    </script>

  </body>
</html>
