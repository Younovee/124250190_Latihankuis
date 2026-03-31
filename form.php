<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Adopsi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">
        <h2>Adopsi Meng</h2>
        <h3>saatnya membawa anak bulu untuk menghiburmu</h3>

        <form action="hasil.php" method="POST">

            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap anda" required>

            <label>Kucing Pilihan</label>
            <select name="kucing">
                <option value="Joko-3000000">Joko (3000k)</option>
                <option value="Nyimeng-1500000">Nyimeng (1500k)</option>
                <option value="Sukijat-2000000">Sukijat (2000k)</option>
                <option value="Kurniawan-3500000">Kurniawan (3500k)</option>
            </select>
            <label>Alamat</label> <input type="text" name="alamat" placeholder="Tulis alamat rumah">
            <label>Tambahan</label><br> <input type="checkbox" name="tambahan[]" value="Vaksin-600000"> Vaksin<br> <input type="checkbox" name="tambahan[]" value="Aksesoris-200000"> Aksesoris<br> <input type="checkbox" name="tambahan[]" value="Snack-100000"> Snack<br> <input type="checkbox" name="tambahan[]" value="Kandang-1000000"> Kandang<br>

            <label>Pembayaran</label>
            <select name="pembayaran">
                <option>QRIS</option>
                <option>Dana</option>
                <option>Gopay</option>
                <option>Ovo</option>
            </select>

            <button type="submit">Adopsi Sekarang</button>

        </form>
    </div>

</body>

</html>