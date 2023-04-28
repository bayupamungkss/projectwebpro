<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h5>Total Belanja Anda = Rp. ". number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>

            <h3>Input Halaman Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php base_url() ?> proses_pesanan">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>JNT</option>
                        <option>Sicepat</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Metodoe Pembayaran</label>
                    <select class="form-control">
                        <option>BCA - 098765432</option>
                        <option>BNI - 098765432</option>
                        <option>BRI - 098765432</option>
                        <option>Mandiri - 098765432</option>
                        <option>Dana - 12345678</option>
                        <option>Gopay - 12345678 </option>
                        <option>OVO - 12345678</option>
                        <option>ShopeePay - 12345678</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

                <?php
                }else
                {
                    echo "<h5>Keranjang Belanja Anda Masih Kosong";   
                } ?>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>