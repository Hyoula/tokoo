<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambahBarang"><i class="fa fa-plus fa-sm"></i>Tambah Barang</button>
    <a class="btn btn-danger btn-sm mb-4"href="<?php echo base_url('admin/barang/print')?>"><i class="fa fa-print fa-sm"></i></a>
    <table class="table table-bordered">
        <tr class="text-center">
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>SIZE</th>
            <th>HARGA</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php 
        $no=1;
        foreach($barang as $brg) : ?>
        <tr>
            <td class="text-center"><?php echo $no++?></td>
            <td><?php echo $brg->nm_brg?></td>
            <td class="text-center"><?php echo $brg->size?></td>
            <td>Rp. <?php echo number_format($brg->harga, 0,',','.')?></td>
            <td>
            <?php echo anchor('admin/barang/detail/'.$brg->id, '<div class="btn btn-success"><i class="fa fa-search-plus"></i></div>')?></td>
            <td>
                <?php echo anchor('admin/barang/edit/'.$brg->id, '<div class="btn btn-primary" onclick="return confirm(`Apakah anda ingin\nmengeditnya`);"><i class="fa fa-edit"></i></div>')?></td>
            <td>
            <?php echo anchor('admin/barang/hapus/'.$brg->id, '<div class="btn btn-danger" onclick="return confirm(`Apakah anda ingin\nmenghapusya`);"><i class="fa fa-trash"></i></div>')?></td>
        </tr>

        <?php endforeach;?>
    </table>
<!-- Modal -->
<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/barang/tambah_aksi');?>
            <div class="form-group">
                <label> Nama Barang</label>
                <input type="text" name="nm_brg" class="form-control">
            </div>
            <div class="form-group">
                <label> Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>
            <div class="form-group">
                <label> Size</label>
                <input type="number" name="size" class="form-control">
            </div>
            <div class="form-group">
                <label> Harga</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label> Merek</label>
                <input type="text" name="merek" class="form-control">
            </div>
            <div class="form-group">
                <label> Warna</label>
                <input type="text" name="warna" class="form-control">
            </div>
            <div class="form-group">
                <label> Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label> Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
</div>
