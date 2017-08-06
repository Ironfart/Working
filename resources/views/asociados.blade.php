<!DOCTYPE html>
<html lang="en">
<head>
  @include ('includes.head')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::asset('assets/components/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
</head>
<body>
  @include ('includes.header')
  @include ('includes.menuleft')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Asociados registrados
      </h1>
      <ol class="breadcrumb">
        <li><a href="../working"><i class="glyphicon glyphicon-home"></i>Working</a></li>
        <li><a href="asociado.php">Asociado</a></li>
        <li class="active">Datos</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Titulo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Ap paterno</th>
                    <th>Ap materno</th>
                    <th>Nombre(s)</th>
                    <th>Ocupacion</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $conn = mysqli_connect('localhost','root','','working');
                  $sql = "SELECT * FROM op_asociados";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_array($result)){
                    echo "
                    <tr>
                    <td>".$row[0]."</td>
                    <td>".$row[5]."</td>
                    <td>".$row[6]."</td>
                    <td>".$row[4]."</td>
                    <td>".$row[11]."</td>
                    <td>
                    <button type=\" button \" class = \" btn btn-primary btn-sm \" data-toggle=modal data-target=#as_info>
                    Mas...
                    </button>
                    </td>
                    </tr>";
                  }
                  ?>
                </tbody>
              </table>
              <!-- Large modal-->
              <div class="modal fade" id="as_info" tabindex="-1" role="dialog" aria-labelledby="MyLargeModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Mas...</h4
                    </div>

                    <div class="modal-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
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

  @include ('includes.scripts')
  <!-- DataTables -->
  <script src="{{URL::asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{URL::asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{URL::asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{URL::asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{URL::asset('assets/dist/js/adminlte.min.js')}}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
    });
  </script>
</body>
</html>
