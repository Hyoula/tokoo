<div class="content-wrapper">
    <section class="content">
        <?php
            foreach($barang as $brg) { ?>
            <form action="<?php echo base_url().'admin/barang/update';?>" method="post">
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $brg->id?>">
                    <input type="text" name="nm_brg" class="form-control" value="<?php echo $brg->nm_brg?>">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
                </div>
                <div class="form-group">
                    <label>Size</label>
                    <input type="number" name="size" class="form-control" value="<?php echo $brg->size?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga?>">
                </div>
                <div class="form-group">
                    <label>Merek</label>
                    <input type="text" name="merek" class="form-control" value="<?php echo $brg->merek?>">
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input type="warna" name="warna" class="form-control" value="<?php echo $brg->warna?>">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" value="<?php echo $brg->stok?>">
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
                <?php
                }
                ?>
    </section>
</div>
