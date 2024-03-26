<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Pertama - Versi PHP</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    $nama = "Bagus Aji Hapsoro";
    $prodi = "Teknik Informatika";
    $universitas = "Universitas Budi Luhur";
    $peminatan = "Programming Expert";
    $semester = "6";
    $hobi = ["Menonton pertandingan MMA", "Berenang", "Travelling"];
    $makananFavorit = ["Nasi Goreng", "Jus Alpukat"];

    $pendidikan = [
      "SDN Kunciran 07",
      "SMPN 10 Tangerang",
      "SMAN 09 Tangerang",
      $universitas,
    ];

    $fighterFavorit = "Conor MCgregor (The Notorious)";
  ?>

  <header>
    <h1>
      <marquee behavior="" direction="Right" scrolldelay="100">Welcome To My Homepage</marquee>
    </h1>
  </header>

  <section id="tentang-saya">
    <img src="img/kucing.jpeg" alt="gambar profile" width="100px" align="left" hspace="10" />

    <p>
      Hai! Saya <?php echo $nama ?>. Saya mahasiswa di <?php echo $universitas ?> Jurusan <?php echo $prodi ?> saat ini sedang menjalani semester <?php echo $semester ?>
      Saya mengambil peminatan <?php echo $peminatan ?> dan saat ini menjalani program MSIB di NF Computer. 
      Semoga saat tugas akhir teman - teman bisa bekerja sama dengan saya sampai selesai!

      <br>

      Hobi saya adalah <?php echo implode(", ", $hobi) ?>. 
      Dan fighter favorit saya di UFC adalah <?php echo $fighterFavorit ?>.
    </p>
  </section>

  <section id="biodata">
    <h2>Tentang Saya</h2>

    <ul>
      <li>
        <h3>Pendidikan</h3>
        <ul>
          <?php foreach ($pendidikan as $sekolah) { ?>
            <li><?php echo $sekolah ?></li>
          <?php } ?>
        </ul>
      </li>

      <li>
        <h3>Hobby</h3>
        <ul>
          <?php foreach ($hobi as $hobby) { ?>
            <li><?php echo $hobby ?></li>
          <?php } ?>
        </ul>
      </li>

      <li>
        <h3>Menu Favorit</h3>
        <ul>
          <?php foreach ($makananFavorit as $makanan) { ?>
            <li><?php echo $makanan ?></li>
          <?php } ?>
        </ul>
      </li>
    </ul>
  </section>
</
