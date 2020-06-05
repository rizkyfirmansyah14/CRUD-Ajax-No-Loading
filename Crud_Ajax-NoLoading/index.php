<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX NO LOADING</title>
    <!-- Link Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Link Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- Link Font Awesome  -->
    <script src="https://kit.fontawesome.com/94f5154929.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <nav class="navbar navbar-light bg-primary">
        <a class="navbar-brand text-white" href="#">Starbhak Soft</a>
    </nav>

    <div class="container">
        <h2 align="center" style="margin:30px;">CRUD Ajax No Loading</h2>
        
        <form id="form-data" class="form-data" method="post">
            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required="true">
                        <p class="text-danger" id="err_nama_siswa"></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required="true">
                            <option value=""></option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
                            <option value="Broadcasting">Broadcasting</option>
                            <option value="Broadcasting">Teknik Elektronika Industri</option>
                        </select>
                        <p class="text-danger" id="err_jurusan"></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">Tanggal Masuk</label>
                        <input type="text" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required="true">
                        <p class="text-danger" id="err_tanggal_masuk"></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div>
                            <input type="radio" name="jenkel" id="jenkel1" value="Laki-laki" required="true"> Laki-Laki
                            <input type="radio" name="jenkel" id="jenkel2" value="Perempuan" required="true"> Perempuan
                        </div>
                    </div>
                    <p class="text-danger" id="err_jenkel"></p>
                </div>
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <textarea type="text" name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary btn-sm">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>
        <hr>

        <div class="data"></div>

    </div>


     <div class="text-center mb-3 mt-5">&copy; <?php echo date('Y'); ?>Copyright
        <a href="http://starbhak.com">Starbhak soft</a>
    </div>

    <!-- Script JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Script DataTable -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="script.js"></script>
</body>

</html>