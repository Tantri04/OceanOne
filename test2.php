<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- nomor 1 -->
    <?php
    $nama = "tantri";
    $jmlhuruf = strlen($nama);
    $tanggal = date("d");
    // echo $tanggal;
    // echo "<br>";
    
    if ($jmlhuruf == ($tanggal - 2)){
        echo "Berhasil";
    } elseif ($jmlhuruf < $tanggal){
        echo "Sedikit lagi";
    } else {
        echo "Coba lagi";
    }
    ?>
    
    <br>
    <br>

    <!-- nomor 2 -->
    <?php
    $anggota = array
    (   
    array("Fatma",123),
    array("Syifa",456),
    array("Hafiz",789),
    array("Surya",012),
    array("Grey",345)
    );
    foreach ($anggota as $member) {
    $nama = $member[0];
    $nim = $member[1];

    if ($nim % 2 == 0) {
        $peran = "Back-end Developer";
    } else {
        $peran = "Front-end Developer";
    }
    // $peran = ($nim % 2 == 0) ? "Back-end Developer" : "Front-end Developer";

    echo "$nama : $peran <br>";
    }
    ?>

    <br>
    <!-- nomor 3 -->
    <?php
    $namaDepan = "tantri"; //nama depan Anda

    // Memisahkan nama depan menjadi array huruf-huruf
    $hurufNama = str_split(strtolower($namaDepan));

    // Daftar kota tujuan KKN
    $kota = [
        "Lampung",
        "Riau",
        "Jambi",
        "Bengkulu",
        "Makassar",
        "Kendari",
        "Gorontalo",
        "Samarinda",
        "Papua",
        "Nusa Tenggara Barat"
    ];
    
    // Inisialisasi kota tujuan awal
    $kotaTujuan = "Jawa Timur";

    // Menentukan kota tujuan berdasarkan huruf-huruf dalam nama depan
    foreach ($hurufNama as $huruf) {
        foreach ($kota as $k) {
            if (strtolower(substr($k, 0, 1)) === $huruf) {
                $kotaTujuan = $k;
                break 2; // Keluar dari kedua perulangan
            }
        }
    }

    // Menampilkan kota tujuan KKN
    echo "Kota Tujuan KKN $namaDepan adalah $kotaTujuan";
    ?>

</body>
</html>
