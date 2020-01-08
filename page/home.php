<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
					<div class="row single-slide" style="margin-top: 100px;">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>GhiNaj Shop <br>Collection!</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img style="margin-left: 30%;" height="400px" src="img/banner/bg.png">
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- End Banner Area -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<div class="head">Kategori</div>
				<ul class="main-categories">
					<?php 
						include 'koneksi.php';
						$qk = mysqli_query($koneksi, "SELECT * FROM kategori");
						while ($dk = mysqli_fetch_array($qk)){
						$jml_brg = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_kategori = '$dk[id_kategori]'");
						$jb = mysqli_num_rows($jml_brg);
					 ?>
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
						class="lnr lnr-arrow-right"></span><?=$dk['nama_kategori'];?><span class="number">(<?=$jb;?>)</span></a>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class="sidebar-filter mt-50">
				
				
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting">
					<select>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
					</select>
				</div>
				<div class="sorting mr-auto">
					<select>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
					</select>
				</div>
				<div class="pagination">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">


					<!-- single product -->
					<?php 
						$qp = mysqli_query($koneksi, "SELECT * FROM barang");
						while($dp = mysqli_fetch_array($qp)){
					 ?>
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<img class="img-fluid" style="height: 280px;" src="img/produk/<?=$dp['foto'];?>" alt="">
							<div class="product-details">
								<h6><?=$dp['nama_barang'];?></h6>
								<div class="price">
									<h6>Rp.<?=number_format($dp['harga']);?></h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">
									<a href="index.php?page=p-detail&&id_barang=<?=$dp['id_barang'];?>"><button class="genric-btn info circle" style="width: 100%;">Detail</button></a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>

				</div>
			</section>
			<!-- End Best Seller -->
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting mr-auto">
					<select>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
					</select>
				</div>
				<div class="pagination">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- End Filter Bar -->
		</div>
	</div>
</div>