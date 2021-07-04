<?php 
include'configure.php';

?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
 
      
      <h1>
        <b> Show Specialization </b>
        <!--<small>advanced tables</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Users</li>
      </ol>
    </section>
    
    
    <!-- Edit Modal -->
    <!-- Button trigger modal -->



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    
                  <th></th>
                  <th>Specialization</th>
                  <th>Creation Date</th>
                  <th>Updation Date</th>
                  <th>Updation Date</th>
                  <th>Updation Date</th>
                  <th>Updation Date</th>



                  
                  
                   <th>Action</th>
                   <th>Action</th>
                  
                </tr>
                </thead>
                

                 <?php
                            $query = "SELECT * FROM members";
                            $resulte = mysqli_query($con,$query);

                            while ($row=mysqli_fetch_assoc($resulte)) {
                                ?>

                <tbody>
                <tr>
                  <td><?php  $row['id']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['completion_time']; ?></td>
                  
                  <td><?php echo $row['time_consumed']; ?></td>
                  <td><?php echo $row['work_by']; ?></td>
                  <td><?php echo $row['item_used']; ?></td>
                  <td><?php echo $row['unit_no']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  
                  <td><a href='updatespecial.php?rn=<?php echo $row['id'];?> & rn1=<?php echo $row['specialization'];?> & rn2=<?php echo $row['creation_date'];?> & rn3=<?php echo $row['updation_date'];?>' style="color:red;" >Edit</a></td>
                  <td><a href='deletespecial.php?rn=<?php echo $row['id'];?>' style="color:red;" >Delete</a></td>
                 
                 
                  
                  </td>
                  <?php   
                        }

                             ?>
                </tr>
               
               
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>




</body>
</html>
