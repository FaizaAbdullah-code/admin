<?php 
include'configure.php';

$r1=$_GET['rn'];
$r2=$_GET['rn1'];
$r3=$_GET['rn2'];
$r4=$_GET['rn3'];
$r5=$_GET['rn4'];
$r6=$_GET['rn5'];
$r7=$_GET['rn6'];

 ?>
  <?php 


if(isset($_POST['submit'])){
  $id=$_POST['id'];
  $special= $_POST['description'];
  $name=$_POST['completion'];
  $address= $_POST['time'];
  $contact= $_POST['work_by'];
  $email= $_POST['item'];
  $department=$_POST['department'];
  $pass= $_POST['unit'];
  $status=$_POST['status'];
 
    
    $sql1 = "UPDATE `members` SET description='$special', completion_time='$name', time_consumed='$address', work_by='$contact', item_used='$email',
    department='$department', unit_no='$pass', status='$status' WHERE id ='$id'";
    $data=mysqli_query($con,$sql1);
    
    if($data){
      echo '<script type="text/javascript"> alert("record updated") </script>';
      header('Location: https://industry-panel.herokuapp.com/AdminLTE-master/pages/tables/data.php');
    }
    else{
        echo"<script> alert('record not updated') </script>";
        
    }
    
  }

?>
     
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="denim.png" alt="AdminLTE Logo" height="110" width="200" class="ml-3" style="opacity: .8">
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="denim.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">AGI Denim</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Electrical Department</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li> -->
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="ml-5">Edit</h1>
          </div>
       
        </div>
      </div>
    </section> -->

    <!-- Main content -->


      <section>          

        <div class="modal-body col-6 ml-5"> 
        <form action="" method="Post">
              <div class="box-body">
                <!-- <div class="form-group"> -->
                <input type="hidden" id="id" name="id" value="<?php echo "$r1" ?>">
                <label for="validationDefault01" class="form-label"> Work Description</label>
                <input type="text" class="form-control"  value="<?php echo "$r2" ?>" id="validationDefault01"name="description" required/>
                <label for="validationDefault01" class="form-label">Completion %</label>
                <input type="text" class="form-control"  value="<?php echo "$r3" ?>" name="completion" id="validationDefault01"name="description" required/>
                <label for="validationDefault01" class="form-label"> Time consumed</label>
                <input type="text" class="form-control"   value="<?php echo "$r4" ?>" name="time" id="validationDefault01"name="description" required/>
                <label for="validationDefault01" class="form-label">Work done by</label>
                <input type="text" class="form-control" value="<?php echo "$r5" ?>" name="work_by" id="validationDefault01"name="description" required/>
                <label for="validationDefault01" class="form-label"> item used</label>
                <input type="text" class="form-control" value="<?php echo "$r6" ?>" name="item" id="validationDefault01"name="description" required/>
                <label for="validationDefault01" class="form-label">Department</label>
                <input type="text" class="form-control" value="<?php echo "$r7" ?>" name="department" id="validationDefault01"name="department" required/>
                <!-- <label for="validationDefault01" class="form-label"> unit No</label>
                <input type="text" class="form-control" name="unit" id="validationDefault01"name="description" required/> -->
                <label for="validationDefault01" class="form-label">Unit #</label>
                <select type="text" value="" name="unit" class="mt-3" style="width:100px"><br>
                <option value="k2">K2</option>
                <option value="k5">K5</option>
                <option value="k6">K6</option>
                <option value="k10">K10</option>
              
                </select><br>
                <label for="validationDefault01" class="form-label">Status</label>
                <select type="text" value="" name="status" class="mt-3" style="width:100px"><br>
                <option value="open">Open</option>
                <option value="closed">Closed</option>
             
                </select><br>
                <!-- <input type="text" class="form-control"  name="status" id="validationDefault01"name="description" required/> -->
                <input type="submit" value="Submit" name="submit" class="btn btn-primary mt-3">    
               
               </div>
             </div>

            </form>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
            

 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis" ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>

</style> 

<body> -->
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> -->
  
  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="" method="Post">
              <div class="box-body">
                <div class="form-group">

                  <label for="exampleInputEmail1">Work descrption</label>
                  <input type="text" name="description" class="form-control" id="user">
                  <label for="exampleInputEmail1">Completion %</label>
                  <input type="text" name="completion" class="form-control" id="">
                  <label for="exampleInputEmail1">Time consumed</label>
                  <input type="text" name="time" class="form-control" id="">
                  <label for="exampleInputEmail1">Work done by</label>
                  <input type="text" name="work_by" class="form-control" id="">
                  <label for="exampleInputEmail1">item used</label>
                  <input type="text" name="item" class="form-control" id="">
                  <label for="exampleInputEmail1">unit No</label>
                  <input type="text" name="unit" class="form-control" id="">
                  <label for="exampleInputEmail1">Status</label>
                  <input type="text" name="status" class="form-control" id="">
                  <input type="submit" value="Submit" name="submit" class="btn btn-primary">

               </div>
             </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

<!-- </body>
</html> -->
