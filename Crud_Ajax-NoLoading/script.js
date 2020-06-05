    $(document).ready(function() {
        $('.data').load("data.php");
        $('#simpan').click(function() {
            var data = $('.form-data').serialize();
           
            var nama_siswa = document.getElementById("nama_siswa").value;
            var jurusan = document.getElementById("jurusan").value;
            var tanggal_masuk = document.getElementById("tanggal_masuk").value;
            var kel1 = document.getElementById("jenkel1").value;
            var kel2 = document.getElementById("jenkel2").value;
            var alamat = document.getElementById("alamat").value;

            if (nama_siswa == "") {
                document.getElementById("err_nama_siswa").innerHTML = "Nama Siswa Harus Anda Isi!";
            } else {
                document.getElementById("err_nama_siswa").innerHTML = "";
            }

            if (jurusan == "") {
                document.getElementById("err_jurusan").innerHTML = "Jurusan Harus Anda Isi!";
            } else {
                document.getElementById("err_jurusan").innerHTML = "";
            }

            if (tanggal_masuk == "") {
                document.getElementById("err_tanggal_masuk").innerHTML = "Tanggal Masuk Harus Anda Isi!";
            } else {
                document.getElementById("err_tanggal_masuk").innerHTML = "";
            }

            if (document.getElementById("jenkel1").checked == false && document.getElementById("jenkel2").checked == false) {
                document.getElementById("err_jenkel").innerHTML = "Jenis Kelamin Harus Anda Isi!";
            } else {
                document.getElementById("err_jenkel").innerHTML = "";
            }

            if (alamat == "") {
                document.getElementById("err_alamat").innerHTML = "Alamat Harus Anda Isi!";
            } else {
                document.getElementById("err_alamat").innerHTML = "";
            }

            if (nama_siswa != "" && alamat != "" && jurusan != "" && tanggal_masuk != "" && (document.getElementById("jenkel1").checked == true || document.getElementById("jenkel2").checked == true)) {
                $.ajax({
                    type: 'POST',
                    url: "form_action.php",
                    data: data,
                    success: function() {
                        $('.data').load("data.php");
                        document.getElementById("id").value = "";
                        document.getElementById("form-data").reset();
                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            }
        });
    });