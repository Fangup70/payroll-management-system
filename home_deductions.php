<?php
  include("auth.php"); 
  include("add_employee.php");
?>

<?php

 $conn = mysqli_connect('localhost', 'root', '','payroll');
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

    $deduction        = $philhealth + $bir + $gsis + $love + $loans;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <title></title>

    <script>
      <!--
        var ScrollMsg= "Payroll Management System - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
      
    </script>

    
    <link href="assets/css/justified-nav.css" rel="stylesheet">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="assets/css/search.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.min.css">

  </head>
  <body>

    <div class="container">
      <div class="masthead">
        <h3>
          <b><a href="index.php">Payroll Management System</a></b>
            <a data-toggle="modal" href="#colins" class="pull-right"><b>Admin</b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            <li>
              <a href="home_employee.php">Employee</a>
            </li>
            <li class="active">
              <a data-toggle="modal" href="#deductions">Deduction/s</a>
            </li>
            <li>
              <a href="home_salary.php">Income</a>
            </li>
          </ul>
        </nav>
      </div><br><br>

              <form class="form-horizontal" action="#" name="form">
                <div class="form-group">
                  <label class="col-sm-5 control-label">MEDICAL :</label>
                  <div class="col-sm-4">
                    <?php echo $philhealth; ?>.00
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">PF :</label>
                  <div class="col-sm-4">
                    <?php echo $bir; ?>.00
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">INCOME TAX  :</label>
                  <div class="col-sm-4">
                    <?php echo $gsis; ?>.00
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">PROFESSION TAX  :</label>
                  <div class="col-sm-4">
                    <?php echo $love; ?>.00
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">LOANS :</label>
                  <div class="col-sm-4">
                    <?php echo $loans; ?>.00
                  </div>
                </div><br><br>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Total Deductions :</label>
                  <div class="col-sm-4">
                    <?php echo $deduction; ?>.00
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label"><button type="button" data-toggle="modal" data-target="#deductions" class="btn btn-danger">Update</button></label>
                </div>
              </form>

      <div class="modal fade" id="deductions" role="dialog">
        <div class="modal-dialog">

      
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center"><b>Deduction</b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">

              <form class="form-horizontal" action="add_deductions.php" name="form" method="post">
                <div class="form-group">
                  <label class="col-sm-4 control-label">MEDICAL</label>
                  <div class="col-sm-8">
                    <input type="text" name="MEDICAL" class="form-control" required="required" value="<?php echo $philhealth; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">PF</label>
                  <div class="col-sm-8">
                    <input type="text" name="PF" class="form-control" value="<?php echo $bir; ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">INCOME TAX</label>
                  <div class="col-sm-8">
                    <input type="text" name="INCOME_TAX" class="form-control" value="<?php echo $gsis; ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">PROFESSION TAX</label>
                  <div class="col-sm-8">
                    <input type="text" name="PROFESSION_TAX" class="form-control" value="<?php echo $love; ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Loans</label>
                  <div class="col-sm-8">
                    <input type="text" name="LOANS" class="form-control" value="<?php echo $loans; ?>" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label"></label>
                  <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

    
      <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">

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

   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/search.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>
    <script>
      {
        $(document).ready(function()
        {
          $('#myTable').DataTable();
        });
      }
    </script>

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
