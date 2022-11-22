<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
  <style type="text/css">
    .tabel {
      padding-top: 6 rem;
    }
  </style>
  <title>Halaman Admin Data Siswa</title>
</head>

<body>
  <div class="text-center m-5">
    <h1>Data Siswa</h1>
  </div>
  <div class="container text-center">
    <div class="card">
      <div class="card-header">
        Data Siswa
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="float-start">
            <a href="<?= base_url('Welcome/tambah'); ?>"><button type="button" class="btn btn-success">TAMBAH DATA</button></a>
          </div>
        </li>
        <li class="list-group-item">
          <section class="tabel">
            <div class="container">
              <div class="row">
                <table id="example" class="table table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">NIS</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">No. Tlp</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0 ?>
                    <?php foreach ($data_siswa as $siswa) : ?>
                      <?php $no++ ?>
                      <tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $siswa->nis ?></td>
                        <td><?= $siswa->nama ?></td>
                        <td><?= $siswa->jenis_kelamin ?></td>
                        <td><?= $siswa->kelas ?></td>
                        <td><?= $siswa->no_tlp ?></td>
                        <td><?= $siswa->alamat ?></td>
                        <td>
                          <a href="<?= base_url('Welcome/edit/') . $siswa->id ?>"><button type="button" class="btn btn-primary">Update</button></a>
                          <a href="<?= base_url('Welcome/deleteData/') . $siswa->id ?>" onclick="return confirm('apakah anda akan menghapus data ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </li>
      </ul>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/') ?>taabel.js"></script>
</body>

</html>