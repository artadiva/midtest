<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tambah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
<!--                         <div class="col-md-3">sss
                        </div> -->
                        <div class="col-md-8">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tambah Data Mahasiswa</h3>
                                    <div class="right">                                 
                                </div>
                                </div>
                                <div class="panel-body">
                                    <form action="/mahasiswa/tambah_proses" method="post">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                        <label for="exampleInputEmail1"> nama</label>
                                        <input class="form-control" type="text" required="required" name="nama" ">
                                        </div>
                                         <div class="form-group">
                                        <label for="exampleInputEmail1"> nim</label>
                                        <input class="form-control" type="text" required="required" name="nim" ">
                                        </div>
                                         <div class="form-group">
                                        <label for="exampleInputEmail1"> tanggal lahir</label>
                                        <input class="form-control" type="date" required="required" name="tgl_lahir" ">
                                        </div>
                                         <div class="form-group">
                                        <label for="exampleInputEmail1"> alamat</label>
                                        <input class="form-control" type="text" required="required" name="alamat" ">
                                        </div>
                                         <div class="form-group">
                                        <label for="exampleInputEmail1"> no telepon</label>
                                        <input class="form-control" type="text" required="required" name="notelp" ">
                                        </div>
                                       <input type="submit" value="Simpan Data">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
