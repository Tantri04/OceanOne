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
    $tanggal = intval(date("d"));
    // echo $tanggal;
    // echo "<br>";
    
    if ($jmlhuruf == $tanggal - 2){
        echo "Berhasil";
    } elseif ($jmlhuruf < $tanggal - 2){
        echo "Sedikit lagi";
    } else {
        echo "Coba lagi";
    }
    ?>
    
    <br>
    <br>

    <!-- nomor 2 -->
    <?php
    $anggota = [
        ["Nama" => "Fatma", "NIM" => "123456"],
        ["Nama" => "Syifa", "NIM" => "234567"],
        ["Nama" => "Hafiz", "NIM" => "345678"],
        ["Nama" => "Surya", "NIM" => "456789"],
        ["Nama" => "Grey", "NIM" => "567890"]
    ];

    function getPeran($nim){
    if (intval(substr($nim, -1)) % 2 == 0) {
        return "Back-end Developer";
    } else {
        return "Front-end Developer";}
    }

    foreach ($anggota as $member) {
        $nama = $member["Nama"];
        $nim = $member["NIM"];
        $peran = getPeran($nim);
        echo "Nama: $nama, NIM: $nim, Peran: $peran <br>";
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
    echo "Kota Tujuan KKN: $kotaTujuan";
    ?>

</body>
</html>