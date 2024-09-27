Berikut adalah README untuk kedua kode tersebut dalam bahasa Indonesia:

---

## README

### 1. Program Piramida Palindrom (Palindrome Pyramid)

#### Deskripsi
Program ini membuat sebuah piramida angka palindrom, di mana angka pada setiap baris adalah hasil kuadrat dari pola angka yang terus bertambah sesuai dengan iterasi baris. Program ini menerima input berupa batas angka dari pengguna dan kemudian mencetak piramida sesuai batas tersebut.

#### Cara Menjalankan Program
1. Buka browser dan akses file `soal1_Alicia.html`.
2. Masukkan angka pada form (batas angka yang valid adalah antara 1 hingga 10).
3. Klik tombol "Run" untuk menghasilkan piramida.
4. Jika input valid, piramida palindrom akan tercetak sesuai dengan batas angka yang dimasukkan.

#### Contoh Output
Jika Anda memasukkan angka 5, output yang dihasilkan akan terlihat seperti:

```
        1
      121
    12321
  1234321
123454321
```

#### Validasi
- Program hanya menerima angka antara 1 hingga 10.
- Jika input tidak valid, akan muncul pesan peringatan berupa pop-up.

#### Fitur
- **Form Input**: Untuk memasukkan batas angka yang akan membentuk piramida.
- **Validasi Input**: Program memvalidasi apakah input adalah angka yang valid sebelum memproses piramida.

---

### 2. Program Sort & Merge Array

#### Deskripsi
Program ini memungkinkan pengguna untuk memasukkan dua array (Nums1 dan Nums2) melalui form, lalu menggabungkan dan menyortir keduanya sesuai dengan jumlah elemen yang diinginkan dari masing-masing array. Setelah penggabungan, array hasil akan disortir dalam urutan naik.

#### Cara Menjalankan Program
1. Buka file `sort_merge_array.html` di browser.
2. Masukkan angka-angka ke dalam Nums1 melalui form pertama.
3. Masukkan angka-angka ke dalam Nums2 melalui form kedua.
4. Tentukan berapa banyak elemen dari Nums1 dan Nums2 yang ingin digabungkan (gunakan form ketiga untuk memasukkan nilai `m` dan `n`).
5. Klik tombol "Sort & Merge" untuk menggabungkan dan menyortir kedua array.
6. Program akan menampilkan hasil array gabungan dan urutannya.

#### Fitur
- **Tambah Angka ke Array**: Pengguna bisa menambah angka satu per satu ke dalam Nums1 dan Nums2.
- **Gabung dan Sortir Array**: Program akan menggabungkan `m` elemen pertama dari Nums1 dan `n` elemen pertama dari Nums2, lalu menyortirnya.
- **Tampilkan Isi Array**: Setelah menambah angka ke dalam Nums1 atau Nums2, program akan menampilkan isi array secara dinamis.
- **Hapus Array**: Program menyediakan tombol untuk mengosongkan isi kedua array.

#### Validasi
- Program memastikan bahwa jumlah elemen `m` dan `n` yang dimasukkan tidak lebih besar dari jumlah elemen yang ada di Nums1 dan Nums2.
- Jika input tidak valid, program akan menampilkan pesan peringatan melalui pop-up.

#### Contoh Output
Misalkan Anda memasukkan angka berikut:
- Nums1: 5, 2, 8
- Nums2: 7, 1, 3

Jika Anda memilih `m = 2` dan `n = 2`, hasil gabungan dan sortirnya adalah:

```
[2, 5, 1, 7]
```

#### Tombol Hapus Array
- Tombol "Hapus Array Nums" akan menghapus semua elemen dari Nums1 dan Nums2 sehingga pengguna bisa memulai dari awal.

---

### Catatan
- Kedua program ini berjalan di browser, jadi pastikan Anda menjalankannya di lingkungan yang mendukung HTML dan PHP (seperti XAMPP atau server lokal yang bisa menjalankan file PHP).
- Untuk menjalankan file **soal2_Alicia.php**, simpan file sebagai `sort_merge_array.php` dan akses melalui server lokal karena menggunakan PHP untuk memproses data.

--- 

README ini memberikan petunjuk penggunaan dan fitur-fitur dari kedua program tersebut. Jika Anda ingin melakukan pengujian, pastikan untuk mengikuti instruksi dalam deskripsi di atas.
