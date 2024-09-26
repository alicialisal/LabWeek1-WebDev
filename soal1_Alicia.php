<!DOCTYPE html>
<html>
    <head>
        <title>Polindrome</title>
    </head>
<body>

<?php
// Fungsi untuk membuat piramida palindrom
function palindrom($batasangka) {
    $sum = 0;
    $angkakali = 0;
    echo "<p>";
    for ($x = $batasangka; $x > 0; $x--) {
        if ($x == 0) {
            $angkakali = 1; // Inisialisasi $angkakali dengan nilai 1 jika $x adalah 0
        } else {
            $angkakali = ($angkakali * 10) + 1; // Gandakan $angkakali dengan 10 di setiap iterasi
        }
        $sum = $angkakali * $angkakali;
        // Looping untuk membuat spasi agar berbentuk piramida
        for ($y = $x - 1; $y >= 0; $y--) {
            echo "&nbsp&nbsp;";
        }
        echo "$sum<br>";
    }
    echo "</p>";
}

// Mengecek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $batas = $_POST['batas']; // Mengambil input dari form
    if (is_numeric($batas) && $batas > 0 && $batas <= 10) {
        palindrom($batas);
    } else {
        echo "<script>alert('Masukkan angka yang valid.');</script>";
    }
}
?>

<h2>Polindrome</h2>

<!-- Form input angka -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Masukkan angka (1-10): <input type="number" name="batas" min="1" required><br>
    <input type="submit" value="Run">
</form>

</body>
</html>
