
<body>
    <div class="container">
        <?php
            function hitung($totalpembelian) {
                $minimal = 100000;
                $diskon = 7;
                if ($totalpembelian >= $minimal) {
                    $totaldiskon = ($diskon / 100) * $totalpembelian;
                    $totalAmount = $totalpembelian - $totaldiskon;
                    return $totalAmount;
                } else {
                    return $totalpembelian;
                }
            }

            $pembayaranAndi = 154000;
            $hargadiscounted = hitung($pembayaranAndi);
            echo "<p>Pembayaran Andi: $pembayaranAndi</p>";
            echo "<p>Harga setelah diskon: $hargadiscounted</p>";
        ?>
    </div>
</body>
</html>
