<div class="content-wrapper">
        <h4><strong>DETAIL DATA Barang</strong></h4>
        <table class="table">
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $detail->nm_brg?></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><?php echo $detail->kategori?></td>
            </tr>
            <tr>
                <td>Size</td>
                <td><?php echo $detail->size?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><?php echo $detail->harga?></td>
            </tr>
            <tr>
                <td>Merek</td>
                <td><?php echo $detail->merek?></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td><?php echo $detail->warna?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><?php echo $detail->stok?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><img src="<?php echo base_url(); ?>assets/img/<?php echo $detail->gambar; ?>" width="120" height="100"></td>
            </tr>
        </table>
</div>
