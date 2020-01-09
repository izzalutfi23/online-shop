<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Video</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">video</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="whole-wrap pb-100" style="margin-top: 30px; margin-bottom: 30px;">
	<div class="container">
		<div class="section-top-border">
			<h3>Video</h3><br>
			<div class="row gallery-item">
				<?php 
					include 'koneksi.php';
					$qv = mysqli_query($koneksi, "SELECT * FROM video");
					while($dv = mysqli_fetch_array($qv)){
				 ?>
				<div class="col-md-4">
					<?=$dv['link'];?>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>