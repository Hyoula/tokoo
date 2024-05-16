<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ilmudetil.css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <table class="table">
  <thead class="thead-dark">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KATEGORI</th>
            <th>SIZE</th>
            <th>HARGA</th>
            <th>MEREK</th>
            <th>WARNA</th>
            <th>STOK</th>
            <th>GAMBAR</th>
        </tr>
  </thead>
        <?php $no=1;
        foreach($barang as $brg) : ?>

  <thead class="thead-light">
        <tr>
            <th><?php echo $no++?></th>
            <td><?php echo $brg->nm_brg?></td>
            <td><?php echo $brg->kategori?></td>
            <td><?php echo $brg->size?></td>
            <td><?php echo $brg->harga?></td>
            <td><?php echo $brg->merek?></td>
            <td><?php echo $brg->warna?></td>
            <td><?php echo $brg->stok?></td>
        </tr>
  </thead>
        <?php endforeach;?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>