<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pembayaran = $_POST['pembayaran'];

list($kucing, $harga_kucing) = explode("-", $_POST['kucing']);

$total_tambahan = 0;
$detail_tambahan = [];

if(isset($_POST['tambahan'])){
    foreach($_POST['tambahan'] as $item){
        list($nama_item, $harga_item) = explode("-", $item);
        $total_tambahan += $harga_item;
        $detail_tambahan[] = $nama_item;
    }
}

$total = $harga_kucing + $total_tambahan;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Adopsi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="hasil-container">
    <div class="hasil-header">
        <img src="kucing/hasil.jpeg" alt="Berhasil" class="hasil-img">
        <div class="hasil-notif">
            Mantap! <?php echo $nama; ?> berhasil mengadopsi si <?php echo $kucing; ?> 🎉
        </div>
    </div>
    <div class="hasil-detail">
        <h3>Detail Adopsi</h3>
        <div><b>Nama :</b> <?php echo $nama; ?></div>
        <div><b>Kucing :</b> <?php echo $kucing; ?></div>
        <div><b>Alamat :</b> <?php echo $alamat; ?></div>
        <div><b>Payment :</b> <?php echo $pembayaran; ?></div>
        <hr>
        <div><b>Harga Meng :</b> Rp <?php echo number_format($harga_kucing, 0, ',', '.'); ?></div>
        <div><b>Tambahan :</b>
            <ul style="margin: 0 0 0 18px;">
                <?php foreach($detail_tambahan as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div><b>Total Tambahan :</b> Rp <?php echo number_format($total_tambahan, 0, ',', '.'); ?></div>
        <hr>
        <div class="hasil-total"><span>🔥 Total Akhir: Rp <?php echo number_format($total, 0, ',', '.'); ?></span></div>
        <a href="index.html" class="btn-hasil">Kembali</a>
    </div>
</div>

</body>
</html>