<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Berita</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Berita</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Blog Area =================-->
<section class="blog_area" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">

                    <?php 
                    include 'koneksi.php';
                    $qb = mysqli_query($koneksi, "SELECT * FROM berita");
                    while($db = mysqli_fetch_array($qb)){
                       ?>
                       <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <ul class="blog_meta list">
                                    <li><a href="#"><?=$db['penulis'];?><i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#"><?=date('d-M-Y', strtotime($db['tgl']));?><i class="lnr lnr-calendar-full"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="img/berita/<?=$db['foto'];?>" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2><?=$db['judul'];?></h2>
                                    </a>
                                    <p><?=substr($db['isi'], 0, 200);?>...</p>
                                    <a href="single-blog.html" class="white_bg_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php } ?>


                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-left"></span>
                                </span>
                            </a>
                        </li>
                        <li class="page-item"><a href="#" class="page-link">01</a></li>
                        <li class="page-item active"><a href="#" class="page-link">02</a></li>
                        <li class="page-item"><a href="#" class="page-link">03</a></li>
                        <li class="page-item"><a href="#" class="page-link">04</a></li>
                        <li class="page-item"><a href="#" class="page-link">09</a></li>
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-right"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
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