<html>
    <head>
        <title>Form Pendaftaran ISE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script 
            src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function form_validation(){
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;

                // Validasi NRP: Harus 10 digit dan angka
                if (nrp.length !== 10 || isNaN(nrp)) {
                    Swal.fire({
                        title: "Error",
                        text: "NRP harus terdiri dari 10 digit dan hanya angka!",
                        icon: "error"
                    });
                    document.getElementById("nrp").focus();
                    return false;
                }

                // Validasi Nama: Harus diisi
                if (nama.length == 0) {
                    Swal.fire({
                        title: "Error",
                        text: "Nama harus diisi!",
                        icon: "error"
                    });
                    document.getElementById("nama").focus();
                    return false;
                }

                // Jika tidak ada error, lanjutkan pengiriman form
                return true;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <h3>Form Pendaftaran ISE</h3>
            <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="return form_validation();">
                <label for="nrp">NRP:</label>
                <input type="text" id="nrp" class="form-control" placeholder="Silahkan Isi NRP, 10 digit, harus angka, gak boleh kosong" name="nrp" maxlength="10">
                <br>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" class="form-control" placeholder="Silahkan Isi Nama, minim 1 digit, gak boleh kosong" name="nama">
                <br>
                <input type="submit" class="btn btn-primary" value="Daftar">
            </form>
        </div>
    </body>
</html>
