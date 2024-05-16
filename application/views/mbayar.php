<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn mt-4 btn-sm btn-success">
                <?php $grand = 0;
                if($keranjang = $this->cart->contents()){
                    foreach($keranjang as $item){
                        $grand = $grand+$item['subtotal'];
                    }
                    echo "Total Belanja Anda : Rp. ".number_format($grand, 0,',','.');
                }
                    ?>
            </div><br><br>
        <h1>Input Alamat Pengiriman dan Pembayaran</h1>
        <form action="<?php echo base_url()?>toko/pesan" method="post">
            <div class="input-group mb-3">
                <input type="text" name="nama"class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <label for="basic-url">Jasa Pengiriman</label>
                <div class="input-group mb-3">
                <select name="jasa"class="custom-select">
                    <option name="jasa" selected>JNE</option>
                    <option name="jasa" >TIKI</option>
                    <option name="jasa">POS Indonesia</option>
                    <option name="jasa">GOJEK</option>
                    <option name="jasa">GRAB</option>
                    </select>
                </div>

                <label for="basic-url">E-Wallet</label>
                <div class="input-group mb-3">
                <select name="bank" class="custom-select">
                    <option name="bank"selected>BCA</option>
                    <option name="bank">BNI</option>
                    <option name="bank">BRI</option>
                    <option name="bank">MANDIRI</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">+62</span>
                </div>
                <input type="number" name="hp" class="form-control" placeholder="8******"aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                </div>

                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Alamat Lengkap</span>
                </div>
                <textarea class="form-control" name="alamat" aria-label="With textarea"></textarea>
                </div>
                
             <button type="submit" class="btn mt-4 btn-primary btn-sm">Go</button>
        </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>