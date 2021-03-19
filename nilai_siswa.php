<?php
  require_once 'libfungsi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Nilai Siswa</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
  <?php
  $ns1 = ['id' => 1, 'nim' => '01101', 'nama' => 'Budi1', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
  $ns2 = ['id' => 2, 'nim' => '01121', 'nama' => 'Budi2', 'uts' => 30, 'uas' => 50, 'tugas' => 38];
  $ns3 = ['id' => 3, 'nim' => '01130', 'nama' => 'Budi3', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
  $ns4 = ['id' => 4, 'nim' => '01134', 'nama' => 'Budi4', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
  $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

  if (!empty($_POST['proses'])) {
    array_push($ar_nilai, [
      'id' => 5,
      'nama' => $_POST['nama'],
      'nim' => '01135',
      'uts' => $_POST['nilai_uts'],
      'uas' => $_POST['nilai_uas'],
      'tugas' => $_POST['nilai_tugas'],
    ]);
  }

  ?>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-info text-white">
            <h3 class="card-title">Daftar Nilai Siswa</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover" width="100%">
                    <thead class="bg-info text-white">
                      <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>Nilai Akhir</th>
                        <th>Grade</th>
                        <th>Predikat</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $nomor = 1;
                      foreach ($ar_nilai as $ns) {
                        echo '<tr><td>' . $nomor . '</td>';
                        echo '<td>' . $ns['nim'] . '</td>';
                        echo '<td>' . $ns['nama'] . '</td>';
                        echo '<td>' . $ns['uts'] . '</td>';
                        echo '<td>' . $ns['uas'] . '</td>';
                        echo '<td>' . $ns['tugas'] . '</td>';
                        $nilai_akhir = (30*$ns['uts']/100) + (35*$ns['uas']/100) + (35*$ns['tugas']/100);
                        echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                        echo '<td>';
                        $grade = grade($nilai_akhir);
                        echo $grade;
                        echo '</td>';
                        echo '<td>';
                        echo predikat($grade);
                        echo '</td>';
                        echo '<td>' . kelulusan($nilai_akhir) . '</td>';
                        echo '<tr/>';
                        $nomor++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>