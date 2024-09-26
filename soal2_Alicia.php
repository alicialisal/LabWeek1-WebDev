<!DOCTYPE html>
<html>
<head>
    <title>Sort & Merge Array</title>
</head>
<body>

<h2>Sort & Merge Array</h2>

<?php
// Inisialisasi array nums1 dan nums2
$nums1 = isset($_POST['nums1']) ? json_decode($_POST['nums1'], true) : [];
$nums2 = isset($_POST['nums2']) ? json_decode($_POST['nums2'], true) : [];

// Memproses angka yang dimasukkan melalui form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['angka1'])) {
        // Ambil angka yang diinput
        $angka1 = intval($_POST['angka1']);
        // Masukkan angka ke dalam array
        $nums1[] = $angka1;
    }

    if (isset($_POST['angka2'])) {
        // Ambil angka yang diinput
        $angka2 = intval($_POST['angka2']);
        // Masukkan angka ke dalam array
        $nums2[] = $angka2;
    }

    // Handle the merge operation
    if (isset($_POST['m']) && isset($_POST['n'])) {
        $m = intval($_POST['m']);
        $n = intval($_POST['n']);

        if ($m > count($nums1)) {
            echo "<script>alert('Nilai m tidak boleh lebih besar dari jumlah elemen dalam Nums1.');</script>";
        } elseif ($n > count($nums2)) {
            echo "<script>alert('Nilai n tidak boleh lebih besar dari jumlah elemen dalam Nums2.');</script>";
        } else {
            // Variabel untuk menyimpan hasil merge
            $hasilArray = [];

            // Ambil m elemen dari nums1 jika tersedia
            if ($m > 0 && count($nums1) >= $m) {
                $hasilArray = array_merge($hasilArray, array_slice($nums1, 0, $m));
            }

            // Ambil n elemen dari nums2 jika tersedia
            if ($n > 0 && count($nums2) >= $n) {
                $hasilArray = array_merge($hasilArray, array_slice($nums2, 0, $n));
            }

            // Sortir mergedArray
            sort($hasilArray);
        }
    }
}
?>

<!-- Form untuk memasukkan angka ke array Nums1 -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Masukkan Angka Nums1:</label>
    <input type="number" name="angka1" required>
    <input type="hidden" name="nums1" value="<?php echo htmlspecialchars(json_encode($nums1)); ?>">
    <input type="hidden" name="nums2" value="<?php echo htmlspecialchars(json_encode($nums2)); ?>">
    <input type="submit" value="Tambah ke Array Nums1">
</form>

<!-- Form untuk memasukkan angka ke array Nums2 -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Masukkan Angka Nums2:</label>
    <input type="number" name="angka2" required>
    <input type="hidden" name="nums1" value="<?php echo htmlspecialchars(json_encode($nums1)); ?>">
    <input type="hidden" name="nums2" value="<?php echo htmlspecialchars(json_encode($nums2)); ?>">
    <input type="submit" value="Tambah ke Array Nums2">
</form>

<!-- Form untuk mengambil m dan n elemen dari masing-masing array -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Masukkan m:</label>
    <input type="number" name="m" min="0" required>
    <label>Masukkan n:</label>
    <input type="number" name="n" min="0" required>
    <input type="hidden" name="nums1" value="<?php echo htmlspecialchars(json_encode($nums1)); ?>">
    <input type="hidden" name="nums2" value="<?php echo htmlspecialchars(json_encode($nums2)); ?>">
    <input type="submit" value="Sort & Merge">
</form>

<?php
// Menampilkan array nums1 jika tidak kosong
if (!empty($nums1)) {
    echo "<h3>Isi Array Nums1 Saat Ini:</h3>";
    echo "<pre>";
    echo "[" . implode(",", $nums1) . "]"; // Format output seperti [1,2,3]
    echo "</pre>";
}

// Menampilkan array nums2 jika tidak kosong
if (!empty($nums2)) {
    echo "<h3>Isi Array Nums2 Saat Ini:</h3>";
    echo "<pre>";
    echo "[" . implode(",", $nums2) . "]"; // Format output seperti [1,2,3]
    echo "</pre>";
}

// Menampilkan hasil merge dan sort array jika ada
if (isset($hasilArray) && !empty($hasilArray)) {
    echo "<h3>Hasil Gabungan dan Sortir Array:</h3>";
    echo "<pre>";
    echo "[" . implode(",", $hasilArray) . "]"; // Format output seperti [1,2,3]
    echo "</pre>";
}
?>

<!-- Tombol untuk clear array -->
<form method="POST" action="">
    <input type="hidden" name="nums1" value="">
    <input type="hidden" name="nums2" value="">
    <input type="submit" name="clear" value="Hapus Array Nums">
</form>

<?php
// Menghapus array jika tombol Hapus Array ditekan
if (isset($_POST['reset'])) {
    $nums1 = [];
    $nums2 = [];
    header("Location: " . $_SERVER['PHP_SELF']); // Refresh halaman
    exit;
}
?>

</body>
</html>
