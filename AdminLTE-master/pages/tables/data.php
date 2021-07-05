<?php 
include'configure.php';
 ?>

<?php
if(isset($_POST['submit'])){
  $special= $_POST['description'];
  $name=$_POST['completion'];
  $address= $_POST['time'];
  $contact= $_POST['work_by'];
  $email= $_POST['item'];
  $department=$_POST['department'];
  $pass= $_POST['unit'];
  $status=$_POST['status'];

  $query = "INSERT INTO `members`(description, completion_time, time_consumed ,work_by, item_used, department, unit_no, status) VALUES ('$special', '$name', '$address' , '$contact' , '$email' , '$department', '$pass', '$status')";
  $query_run = mysqli_query($con,$query);

  if($query_run){
    echo '<script type="text/javascript"> alert("Data Saved") </script>';
    header('Location: https://industry-panel.herokuapp.com/AdminLTE-master/pages/tables/data.php');
  }
  else{
    echo '<script type="text/javascript"> alert("Data not Saved") </script>';

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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../tables/data.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Electrical Department</p>
                                    </a>
                                </li>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Electrical Department</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Complaint Management System</h3>
                                        <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Add Complain
                                        </button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Work descrption</th>
                                                    <th>Completion %</th>
                                                    <th>Time consumed</th>
                                                    <th>Work done by</th>
                                                    <th>Item used</th>
                                                    <th>Department</th>
                                                    <th>Unit #</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $query = "SELECT * FROM members";
                                                    $resulte = mysqli_query($con,$query);

                                                    while ($row=mysqli_fetch_assoc($resulte)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['description']; ?></td>
                                                    <td><?php echo $row['completion_time']; ?></td>
                                                    <td><?php echo $row['time_consumed']; ?></td>
                                                    <td><?php echo $row['work_by']; ?></td>
                                                    <td><?php echo $row['item_used']; ?></td>
                                                    <td><?php echo $row['department']; ?></td>
                                                    <td><?php echo $row['unit_no']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>

                                                    <td> <a href='edit.php?rn=<?php echo $row['id'];?> & rn1=<?php echo $row['description'];?> & rn2=<?php echo $row['completion_time'];?>  
                                                     & rn3=<?php echo $row['time_consumed'];?>  & rn4=<?php echo $row['work_by'];?>  & rn5=<?php echo $row['item_used'];?>  & rn6=<?php echo $row['department'];?>'
                                                    class="btn btn-primary float-right">
                                                            Edit
                                                          </a></td>
                                                    <td><a href='delete.php?rn=<?php echo $row['id'];?>'
                                                            class="btn btn-danger float-right">Delete</a></td>
                                                    </td>
                                                    <?php   
                                                         }
                                                    ?>

                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="Post">
                                                            <div class="box-body">
                                                                <label for="validationDefault01" class="form-label">
                                                                    Work Description</label>
                                                                <input type="text" class="form-control"
                                                                    id="validationDefault01" name="description"
                                                                    required />
                                                                <label for="validationDefault01"
                                                                    class="form-label">Completion %</label>
                                                                <input type="number" class="form-control"
                                                                    name="completion" id="validationDefault01"
                                                                    name="description" required />
                                                                <label for="validationDefault01" class="form-label">
                                                                    Time consumed</label>
                                                                <input type="text" class="form-control" name="time"
                                                                    id="validationDefault01" name="description"
                                                                    required />
                                                                <label for="validationDefault01" class="form-label">Work
                                                                    done by</label>
                                                                <input type="text" class="form-control" name="work_by"
                                                                    id="validationDefault01" name="description"
                                                                    required />
                                                                <label for="validationDefault01" class="form-label">
                                                                    item used</label>
                                                                <input type="text" class="form-control" name="item"
                                                                    id="validationDefault01" name="description"
                                                                    required />
                                                                <label for="validationDefault01"
                                                                    class="form-label">Department</label>
                                                                <input type="text" class="form-control"
                                                                    name="department" id="validationDefault01"
                                                                    name="department" required />
                                                                <label for="validationDefault01" class="form-label">Unit
                                                                    #</label>
                                                                <select type="text" value="" name="unit" class="mt-3"
                                                                    style="width:100px"><br>
                                                                    <option value="k2">K2</option>
                                                                    <option value="k5">K5</option>
                                                                    <option value="k6">K6</option>
                                                                    <option value="k10">K10</option>
                                                                </select><br>
                                                                <label for="validationDefault01"
                                                                    class="form-label">Status</label>
                                                                <select type="text" value="" name="status" class="mt-3"
                                                                    style="width:100px"><br>
                                                                    <option value="open">Open</option>
                                                                    <option value="closed">Closed</option>
                                                                </select><br>
                                                                <input type="submit" value="Submit" name="submit"
                                                                    class="btn btn-primary mt-3">
                                                            </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="">AGI Denim</a>.</strong> All rights
            reserved...
        </footer>

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
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>
                                                     
