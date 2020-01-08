<?php 
    session_start();
    include 'koneksi.php';
    $id_user = $_SESSION['username'];
    $qu = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$id_user'");
    $du = mysqli_fetch_array($qu);
 ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Keranjang Belanja</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">keranjang</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            include 'koneksi.php';
                            $subtotal = 0;
                            $qk = mysqli_query($koneksi, "SELECT * FROM keranjang JOIN barang ON keranjang.id_barang=barang.id_barang WHERE id_user = '$du[id_user]'");
                            while($dk = mysqli_fetch_array($qk)){
                            $harga = $dk['harga'];
                            $qty = $dk['qty'];
                            $total = $harga*$qty;
                            $subtotal = $total+$subtotal;
                         ?>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img width="95px" height="100px" src="img/produk/<?=$dk['foto'];?>" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p><?=$dk['nama_barang'];?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.<?=$dk['harga'];?></h5>
                            </td>
                            <td><?=$dk['qty'];?></td>
                            <td>
                                <h5>Rp.<?=number_format($total);?></h5>
                            </td>
                            <td>
                                <a onclick="return confirm('Hapus Keranjang!')" href="proses.php?proses=delete_keranjang&&id_keranjang=<?=$dk['id_keranjang'];?>&&id_barang=<?=$dk['id_barang'];?>&&qty=<?=$dk['qty'];?>"><button class="primary-btn" style="border: none;"><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                        <?php } ?>

                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>Rp.<?=number_format($subtotal);?></h5>
                            </td>
                        </tr>

                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="index.php">Continue Shopping</a>
                                    <a class="primary-btn" href="index.php?page=ceckout">Proses Checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
    <!--================End Cart Area =================-->