<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Halaman Edit Data</title>
</head>

<body>
  <div class="text-center m-5">
    <h1>Edit Data Siswa</h1>
  </div>
  <center>
    <div class=" text-center" style="width: 50rem;">
      <div class="card">
        <div class=" card-header">
          Edit Data Siswa
        </div>
        <form action="<?= base_url('Welcome/editData') ?>" method="post">
          <ul class="list-group list-group-flush">
            <input type="hidden" name="id" id="id" value="<?= $data_siswa->id ?>">
            <li class="list-group-item">
              <div class="mb-2 col-6 container text-center">
                <label for="nis" class="form-label">NIS :</label>
                <input type="text" class="form-control" name="nis" id="nis" required value="<?= $data_siswa->nis ?>">
              </div>
            </li>
            <li class="list-group-item">
              <div class="mb-2 col-6 container text-center">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" id="nama" required value="<?= $data_siswa->nama ?>">
              </div>
            </li>
            <li class="list-group-item">
              <div class="mb-2 col-6 container text-center">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                  <option value="<?= $data_siswa->jenis_kelamin ?>"><?= $data_siswa->jenis_kelamin ?></option>
                </select>
              </div>
            </li>
            <li class="list-group-item">
              <div class="mb-2 col-6 container text-center">
                <label for="kelas" class="form-label">Kelas :</label>
                <input type="text" class="form-control" name="kelas" id="kelas" required value="<?= $data_siswa->kelas ?>">
              </div>
            </li>
            <li class="list-group-item">
              <div class="mb-2 col-6 container text-center">
                <label for="no_tlp" class="form-label">No. Tlp :</label>
                <input type="text" class="form-control" name="no_tlp" id="no_tlp" required value="<?= $data_siswa->no_tlp ?>">
              </div>
            </li>
            <li class="list-group-item">
              <div class="mb-2 col-6 container text-center">
                <label for="alamat" class="form-label">Alamat :</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required value="<?= $data_siswa->alamat ?>">
              </div>
            </li>
            <li class="list-group-item">
              <button type="submit" name="submit" class="btn btn-success">Update Data</button>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </center>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>