<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
        b {
            color: #333333;
        }
    </style>
</head>
<body>

<?php
class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna()
    {
        echo "warna mobilnya: " . $this->warna;
    }
}

// Membuat objek mobil
$a = new Mobil();
$b = new Mobil();

// Memanggil objek
echo "<b>Mobil pertama </b><br>";
$a->tampilWarna();
echo "<br> Mobil pertama ganti warna <br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

// Memanggil objek
echo "<br><b>Mobil kedua </b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>

</body>
</html>
