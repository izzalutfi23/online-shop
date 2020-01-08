<!-- Menampilkan Detail barang -->
<?php 
	include 'koneksi.php';
	$qb = mysqli_query($koneksi, "SELECT * FROM barang JOIN kategori ON barang.id_kategori=kategori.id_kategori WHERE id_barang = '$_GET[id_barang]'");
	$db = mysqli_fetch_array($qb);
 ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Detail Produk</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Produk<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.html">Detail</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area" style="margin-bottom: 100px;">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="s_Product_carousel">
					<div class="single-prd-item">
						<img class="img-fluid" src="img/produk/<?=$db['foto'];?>" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="img/produk/<?=$db['foto'];?>" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="img/produk/<?=$db['foto'];?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h3><?=$db['nama_barang'];?></h3>
					<h2>Rp.<?=number_format($db['harga']);?></h2>
					<ul class="list">
						<li><a class="active" href="#"><span>Category</span> : <?=$db['nama_kategori'];?></a></li>
					</ul>
					<p><?=$db['deskripsi'];?>.</p>
					<div class="product_count">
						<label for="qty">Quantity:</label>
						<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
						class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="index.php?page=cart">Tambah ke Keranjang</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->
