<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
       
    </head>
    <body>



<!-- qwqwq -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
    <a class="navbar-brand" href="#">Data Mahasiswa</a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 

     
   </div>
 
</nav>
<!-- aaa -->



 <!--    <?php print_r($data_mahasiswa) ?> -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row" align="center">
<!--                         <div class="col-md-3">sss
                        </div> -->
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Mahasiswa</h3>
                                    <div class="right">
                                                                              
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Nim</th>
                                                <th>Alamat</th>
                                                <th>No Telp</th>
                                                <th>Tanggal Lahir</th>
                                                                                               
                                            </tr>
                                             </thead>
                                          
                                           
                                       
                                        <tbody>
                                          @foreach($data_mahasiswa as $p)
                                           
                                         <tr>
                                           <td> {{$p->nama}}</td>
                                           <td> {{$p->nim}}</td>
                                           <td> {{$p->alamat}}</td>
                                           <td> {{$p->notelp}}</td>
                                           <td> {{$p->tgl_lahir}}</td>
                                           </tr>
                                            @endforeach
                                         </tbody> 
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright</div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

    </script>


</html>
