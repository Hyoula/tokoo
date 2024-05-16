<div class="container-fluid">
    <h2>Invoice Pemesanan Produk</h2>
    <table class="table table-border table-hover table-striped">
        <tr>
            <th>ID INVOICE</th>
            <th>NAMA PEMESAN</th>
            <th>ALAMAT PENGIRIMAN</th>
            <th>TANGGAL PEMESANAN</th>
            <th>BATAS WAKTU PEMBAYARAN</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach($invoice as $inv) :?>
        <tr>
            <td><?php echo $inv->idn?></td>
            <td><?php echo $inv->nama?></td>
            <td><?php echo $inv->alamat?></td>
            <td><?php echo $inv->tgl?></td>
            <td><?php echo $inv->batas?></td>
            <td>
            <?php echo anchor('admin/invoice/detaili/'.$inv->idn, '<div class="btn btn-success"><i class="fa fa-search-plus"></i></div>')?></td>
            <td>
            <?php echo anchor('admin/invoice/hapusi/'.$inv->idn, '<div class="btn btn-danger" onclick="return confirm(`Apakah anda ingin\nmenghapusya`);"><i class="fa fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
