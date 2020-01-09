<?php 
    session_start();
    include '../koneksi.php';
    $id_user = $_SESSION['username'];
    $qu = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$id_user'");
    $du = mysqli_fetch_array($qu);
 ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Detail Pembelian</h3>
                    <form class="row contact_form" action="proses.php?proses=beli" method="POST" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="hidden" name="id_user" value="<?=$du['id_user'];?>">
                            <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" name="no_telp" placeholder="No Telepeon">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <select class="form-control" name="jasa_pengirim">
                                <option value="JNE">JNE</option>
                                <option value="J&T">J&T</option>
                                <option value="SiCepat">SiCepat</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                                <label for="f-option3">Tulis Keterangan</label>
                            </div>
                            <textarea class="form-control" name="keterangan" rows="1" placeholder="Order Notes"></textarea>
                        </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Pesanan Kamu</h2>
                        <ul class="list">
                            <li><a href="#">Product <span>Total</span></a></li>

                            <?php 
                            include 'koneksi.php';
                            $ongkir = 50000;
                            $subtotal = 0;
                            $qk = mysqli_query($koneksi, "SELECT * FROM keranjang JOIN barang ON keranjang.id_barang=barang.id_barang WHERE id_user = '$du[id_user]'");
                            while($dk = mysqli_fetch_array($qk)){
                                $harga = $dk['harga'];
                                $qty = $dk['qty'];
                                // hitung promo
                                $diskon = $dk['diskon'];
                                $hargaakhir = $harga - ($diskon/100) * $harga;

                                $total = $hargaakhir*$qty;
                                $subtotal = $total+$subtotal;
                                ?>

                                <li><a href="#"><?=$dk['nama_barang'];?> <span class="middle">x 0<?=$dk['qty'];?></span> <span class="last">Rp.<?=number_format($total);?></span></a></li>

                            <?php } ?>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>Rp.<?=number_format($subtotal);?></span></a></li>
                            <li><a href="#">Ongkos Kirim <span>Flat rate: Rp.<?=number_format($ongkir);?></span></a></li>
                            <li><a href="#">Total <span>Rp.<?=number_format($subtotal+$ongkir);?></span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Reknening Bersama</label>
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                        <button type="submit" style="border: none; width: 100%;" class="primary-btn">Proses</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--================End Checkout Area =================-->