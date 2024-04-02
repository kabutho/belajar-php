<?php
    // Data disimpan dalam variabel produk
    $produk = array(
        array(
            "nama_produk" => "Celurit",
            "jumlah" => 5, 
            "harga" => 50000,
            "deskripsi" => " Senjata Khas Madura digunakan untuk peragaan Pencak Silat"
        ),
        array(
            "nama_produk" => "Toya / Tongkat",
            "jumlah" => 7, 
            "harga" => 60000,
            "deskripsi" => " Salah satu senjata yang cukup populer dalam Pencak Silat "
        ),
        array(
            "nama_produk" => "Golok",
            "jumlah" => 5, 
            "harga" => 75000,
            "deskripsi" => " Salah satu senjata dalam Pencak Silat seperti pedang nemun lebih pendek "
        ),
        array(
            "nama_produk" => "Pecut ",
            "jumlah" => 10, 
            "harga" => 90000,
            "deskripsi" => " Merupakan senjata khas Perguruan Pencak Silat Jokotole "
        ),
        array(
            "nama_produk" => "Body Protector",
            "jumlah" => 15, 
            "harga" => 250000,
            "deskripsi" => " Pelindung badan bagi atlit Pencak Silat yang melakukan Pertandingan "
        )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Produk</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
    <!-- eksternal css -->
    <link rel="stylesheet" href="assets/css/listing-product.css">
</head>
<body>
    <div class="container">
        
        <div class="konten">
            
            <h1> Data Produk Pencak Silat </h1>

            <div class="btn">
                <button onclick="show_tabel()"> Data Produk </button>
                <button onclick="show_card()"> Produk </button>
            </div>

            <div id="produk-tabel">
                <table>
                    <thead>
                        <tr>
                            <td> Produk </td>
                            <td> Jumlah </td>
                            <td> Harga </td>
                            <td> Deskripsi </td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($produk as $item) { ?>
                        <tr>
                            <td> <?php echo $item["nama_produk"]; ?> </td>
                            <td> <?php echo $item["jumlah"]; ?> </td>
                            <td> Rp <?php echo $item["harga"]; ?> </td>
                            <td> <?php echo $item["deskripsi"]; ?> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <div id="produk-card">
                <div class="row">

                    <?php foreach($produk as $item) { ?>
                        <div class="card">
                            <h3> <?php echo $item["nama_produk"]; ?> </h3>
                            <p> Rp. <?php echo $item["harga"]; ?> | Stok :  <?php echo $item["jumlah"]; ?></p>
                            <h5> <?php echo $item["deskripsi"]; ?> </h5>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- eksternal js -->
    <script src="assets/js/script.js"></script>
</body>
</html>