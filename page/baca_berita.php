<?php 
    include 'koneksi.php';
    $qb = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id_berita]'");
    $db = mysqli_fetch_array($qb);
 ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Blog Page</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Blog</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="img/berita/<?=$db['foto'];?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <ul class="blog_meta list">
                                <li><a href="#"><?=$db['penulis'];?><i class="lnr lnr-user"></i></a></li>
                                <li><a href="#"><?=date('d-M-Y', strtotime($db['tgl']));?><i class="lnr lnr-calendar-full"></i></a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2><?=$db['judul'];?></h2>
                        <p class="excert">
                            <?=$db['isi'];?>
                        </p>
                    </div>

                </div>   
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Popular Posts</h3>
                        <?php 
                        include 'koneksi.php';
                        $qb = mysqli_query($koneksi, "SELECT * FROM berita");
                        while($db = mysqli_fetch_array($qb)){
                         ?>
                         <div class="media post_item">
                            <img width="100px" height="95px" src="img/berita/<?=$db['foto'];?>" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3><?=$db['judul'];?></h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                    <?php } ?>
                        <div class="br"></div>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</section>
    <!--================Blog Area =================-->