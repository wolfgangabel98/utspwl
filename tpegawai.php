<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
   <div class="card w-50 p-3 mb-2 bg-primary text-white">
        <h5 class="mx-auto mt-2 font-weight-bold">TAMBAH PEGAWAI</h5>
            <div class="card-body">
                <form method="post" action="?z=spegawai">
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" class="form-control" name="txtPegawai">
                      </div>
                      <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" class="form-control" name="txtAlamat">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="kelamin" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label>Agama</label>
                              <select name="txtAgama" class="form-control">
                              <option value="Katolik">Katolik</option>
                              <option value="Islam">Islam</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Konghucu">Konghucu</option>
                            </select>
                            </div>
                            <button type="submit" class="btn btn-dark">SIMPAN</button>
                        </form>
                    </div>
                </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
