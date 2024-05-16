<div class="container-fluid">
<div class="content-wrapper">
        <h4><strong>DETAIL DATA Pesanan <div class="btn btn-sm btn-success">No.Invoices: <?php echo $invoice->id?></div></strong></h4>
       
        <table class="table table-hover table-bordered table-striped">
			 
		<tr>
			<th>ID BARANG</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH PESANAN</th>
			<th>HARGA SATUAN</th>
			<th>SUBTOTAL</th>
		</tr>
		<?php $total=0; foreach($pesanan as $psn) :
        $subtotal = $psn->jumlah * $psn->harga;
		$total+=$subtotal;
        ?>
            <tr>
                <td><?php echo $psn->id_brg?></td>
                <td><?php echo $psn->nama_brg?></td>
                <td><?php echo $psn->jumlah?></td>
                <td>Rp. <?php echo number_format($psn->harga, 0,',','.')?></td>
                <td>Rp. <?php echo number_format($subtotal, 0,',','.')?></td>
            </tr>
     <?php endforeach;?>
	 		<tr bgcolor="grey" style="color:white;" align="right">
				 <td>Grand Total</td>
                <td colspan="4"align="right">Rp. <?php echo number_format($total, 0,',','.')?></td>
	 		</tr>
        </table>
</div>
</div>
