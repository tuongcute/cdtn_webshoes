<?php /*
    session_start();
	if(!isset($_SESSION['submit'])){
		header('Location: login.php');
	}
 */ ?>

<?php require_once('database/config.php');
require_once('database/dbhelper.php');?>
<?php 
 include("Layout/header.php");
?>

<body>
<!--------------------BANNER ONE PIECE--------------------------- -->
<section class="slider-main-area">
    <div class="main-slider an-si">
        <div class="bend niceties preview-2 hm-ver-1">
            <div id="ensign-nivoslider-2" class="slides">	
                <img src=".//images/banner_1.jpg" alt="" title="#slider-direction-3"  />
                <img src=".//images/banner_3.jpg" alt="" title="#slider-direction-1"  />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-3" class="t-cn slider-direction Builder">
                <div class="slide-all">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h2 class="title5">Phong cách mới</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <h2 class="title6">Toryco 1993 Fashion</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title0">giá cực ưu đãi!</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a class="min1" href="shop.php?id_category=1">Mua Ngay</a>
                    </div>
                </div>
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction Builder">
                <div class="slide-all slide2">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h2 class="title5">Chỉ hôm nay</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <h2 class="title6">Toryco 1993 Fashion</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title0">Thời trang hot giảm giá!</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a class="min1" href="shop.php?id_category=3">>Mua Ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection section start -->
<div class="banner-area">
    <div class="container">
        <div class="section-padding1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-box banner-box-re">
                        <a href="shop.php?id_category=3">
                            <img alt="" src="images/banner/2.jpg">
                            <div>
                                <h2>
                                Toryco 1993
                                    <span>Store</span>
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="banner-box res-btm">
                        <a href="shop.php?id_category=1">
                            <img alt="" src="images/banner/3.jpg">
                            <div>
                                <h2>
                                Toryco 1993
                                    <span>Store</span>
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-container banner-box res-btm">
                        <a href="shop.php?id_category=2">
                            <img alt="" src="images/banner/1.jpg">
                            <div>
                                <h2>
                                Toryco 1993
                                    <span>Store</span>
                                </h2>
                                <p>Duyên dáng sang trọng, chất lượng vượt thời gian - Toryco 1993 Store, nơi phong cách trở thành đẳng cấp.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-box banner-box-re">
                        <a href="shop.php?id_category=5">
                            <img alt="" src="images/banner/4.jpg">
                            <div>
                                <h2>
                                Toryco 1993
                                    <span>Store</span>
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="banner-box">
                        <a href="shop.php?id_category=4">
                            <img alt="" src="images/banner/5.jpg">
                            <div>
                                <h2>
                                Toryco 1993
                                    <span>Store</span>
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- collection section end -->
<!-- new-products section start -->
<section class="featured-products single-products section-padding-top">
    <div class="container">
    <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>LỌC SẢN PHẨM
                    </h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <!-- Cột 1: Tùy chọn lọc -->
        <div class="col-md-2">
            <!-- Form để chọn phạm vi giá -->
            <form id="filter-form" action="#" method="GET">
                <label>
                    <input type="radio" name="price-range" value="1">
                    Từ 0 đến 1 triệu
                </label><br>
                <label>
                    <input type="radio" name="price-range" value="2">
                    Từ 1 đến 2 triệu
                </label><br>
                <label>
                    <input type="radio" name="price-range" value="3">
                    Từ 2 đến 3 triệu
                </label><br>
                <label>
                    <input type="radio" name="price-range" value="4">
                    Từ 3 đến 4 triệu
                </label><br>
            </form>
        </div>

        <!-- Cột 2: Kết quả -->
        <div class="col-md-10">
            <div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme">
                <?php
                    // Xử lý dữ liệu người dùng gửi đi để lọc sản phẩm
                    if(isset($_GET['price-range'])) {
                        $selected_price_range = $_GET['price-range'];
                        
                        // Mã PHP lọc sản phẩm dựa trên dữ liệu người dùng chọn
                        $sql = "SELECT * FROM product";
                        $feature_product = executeResult($sql);
                        
                        $used_feproducts = array();
                        foreach ($feature_product as $item) {
                            // Lọc sản phẩm dựa trên phạm vi giá được chọn
                            $price_min = ($selected_price_range - 1) * 1000000;
                            $price_max = $selected_price_range * 1000000;
                            
                            if ($item['price'] >= $price_min && $item['price'] <= $price_max && !in_array($item['title'], $used_feproducts)) {
                                array_push($used_feproducts, $item['title']);
                                // Hiển thị thông tin sản phẩm
                                echo '
                                <div class="col-xs-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="pro-type">
                                                <span>sale</span>
                                            </div>
                                            <a href="single_product.php?id=' . $item['id'] . '"> 
                                                <img class="thumbnail" src="../Admin/product/' . $item['thumbnail'] . '" alt="' . $item['title'] . '" />
                                                <img class="secondary-image" alt="' . $item['title'] . '" src="../Admin/product/' . $item['thumbnail'] . '">
                                            </a>
                                        </div>
                                        <div class="product-dsc">
                                            <h3><a href="#">' . $item['title'] . '</a></h3>
                                            <div class="star-price">
                                                <span class="price-left">' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                                <span class="star-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="actions-btn">
                                            <!-- Các thao tác khác, nếu có -->
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script>
        // JavaScript để tự động gửi biểu mẫu khi người dùng chọn tùy chọn và hiển thị nút chọn (tick) lên
        document.querySelectorAll('input[name="price-range"]').forEach(function(input) {
            input.addEventListener('change', function() {
                // Bỏ chọn tất cả các nhãn
                document.querySelectorAll('label').forEach(function(label) {
                    label.classList.remove('selected');
                });
                // Hiển thị nút chọn (tick) cho nhãn tương ứng với tùy chọn được chọn
                var selectedLabel = this.parentNode;
                selectedLabel.classList.add('selected');
                // Gửi biểu mẫu
                document.getElementById('filter-form').submit();
            });
        });

        // Xử lý sự kiện khi nhãn được click
        document.querySelectorAll('label').forEach(function(label) {
            label.addEventListener('click', function() {
                // Kích hoạt sự kiện "change" cho input tương ứng
                var input = this.querySelector('input');
                input.checked = true;
                input.dispatchEvent(new Event('change'));
            });
        });

        // Xử lý cuộn trang sau khi gửi biểu mẫu
        document.getElementById('filter-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu mặc định

            // Lấy vị trí của phần lọc
            var filterPosition = document.getElementById('filter-form').offsetTop;
            
            // Sử dụng requestAnimationFrame để đảm bảo cuộn trang xảy ra sau khi trang đã được cập nhật
            window.requestAnimationFrame(function() {
                // Cuộn trang về vị trí của phần lọc
                window.scrollTo({top: filterPosition, behavior: 'smooth'});
            });
        });
    </script>


        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>TẤT CẢ SẢN PHẨM</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="product-tab nav nav-tabs">
                <ul>
                    <li class="active"><a data-toggle="tab" href="#all">Tất cả sản phẩm</a></li>
                    <?php
                    $categories = executeResult("SELECT * FROM category");
                    foreach ($categories as $category) {
                        echo '<li><a data-toggle="tab" href="#' . $category['name'] . '">' . $category['name'] . '</a></li>';
                    }
                    ?>
                </ul>
                    <!-- <ul>                                        
                        <li class="active"><a data-toggle="tab" href="#all">all shop</a></li>
                        <li><a data-toggle="tab" href="#clothings">clothings</a></li>
                        <li><a data-toggle="tab" href="#shoes">shoes</a></li>
                        <li><a data-toggle="tab" href="#bags">bags</a></li>
                        <li><a data-toggle="tab" href="#accessories">accessories</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="row tab-content">
            <div class="tab-pane  fade in active" id="all">
                <div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme">
                <?php
                    
                    $sql = "SELECT * FROM product";
                    $feature_product = executeResult($sql);
                    
                    $used_feproducts = array ();
                    foreach ($feature_product as $item) {
                        if (!in_array ($item ['title'], $used_feproducts)) {  //check if the product id is not in the new array
                            array_push ($used_feproducts, $item ['title']); //add the product id to the new array
                            echo '
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>sale</span>
                                </div>
                                <a href="single_product.php?id=' . $item['id'] . '"> 
                                    <img class="thumbnail" src="../Admin/product/' . $item['thumbnail'] . '" alt="' . $item['title'] . '" />
                                    <img class="secondary-image" alt="' . $item['title'] . '" src="../Admin/product/' . $item['thumbnail'] . '">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">' . $item['title'] . '</a></h3>
                                <div class="star-price">
                                    <span class="price-left">' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                    <span class="star-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="actions-btn">
                                
                            </div>
                        </div>

                    </div>';
                            
                            
                            }
                    }
                ?>
                </div>     
            </div>
        <!-- Hoodie product end -->
                            <?php
                            $categories = executeResult("SELECT * FROM category");
                            foreach ($categories as $category) {
                                echo '<div class="tab-pane fade in" id="' . $category['name'] . '">';
                                echo '<div id="tab-carousel-' . $category['id'] . '" class="owl-carousel product-slider owl-theme">';

                                $sql = "SELECT * FROM product WHERE id_category=" . $category['id'];
                                $category_products = executeResult($sql);
                                foreach ($category_products as $product) { // Sửa biến $item thành $product
                                    echo '<div class="col-xs-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="pro-type">
                                                <span>sale</span>
                                            </div>
                                            <a href="single_product.php?id=' . $product['id'] . '">
                                                <img class="thumbnail" src="../Admin/product/' . $product['thumbnail'] . '" alt="' . $product['title'] . '" /> <!-- Sửa $item thành $product -->
                                                <img class="secondary-image" alt="' . $product['title'] . '" src="../Admin/product/' . $product['thumbnail'] . '"> <!-- Sửa $item thành $product -->
                                            </a>
                                        </div>
                                        <div class="product-dsc">
                                            <h3><a href="#">' . $product['title'] . '</a></h3> <!-- Sửa $item thành $product -->
                                            <div class="star-price">
                                                <span class="price-left">' . number_format($product['price'], 0, ',', '.') . ' VNĐ</span> <!-- Sửa $item thành $product -->
                                                <span class="star-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="actions-btn">
                                            
                                        </div>
                                    </div>

                                </div>';
                                }

                                echo '</div></div>';
                            }
                            ?>

                        

                            
                            <!-- bags product end -->
                            
                            <!-- accessories product end -->
                        </div>
			</div>
</section>
<!-- new-products section end -->



<!--------------------WHAT'S HOT--------------------------- -->

<section class="blog section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>from the blog</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="blog" class="owl-carousel product-slider owl-theme re-blog">
                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="blog.html"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="images/new1.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Phụ kiện thời trang - Khám Phá Sự Lịch Lãm Tại Toryco 1993 Store</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                    in
                                    <a rel="category" href="blog.html">Toryco 1993 Store</a>
                                </span>
                                <span class="published">
                                    <i class="fa fa-clock-o"></i>
                                    Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content">
                            Tại Toryco 1993 Store, chúng tôi tin rằng chi tiết là chìa khóa để tạo nên phong cách độc đáo. 
                            Blog của chúng tôi sẽ giới thiệu đến bạn những chiếc nơ, dây lưng, trang sức và các loại phụ kiện khác, 
                            giúp bạn tạo nên điểm nhấn hoàn hảo cho bộ trang phục của mình.
                            </div>
                        </div>
                        <div class="box-left" >
                            <a href="blog_2.php"><button>Xem thêm </button><!--nút mua hàng --></a>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="blog.html"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="images/new2.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Áo Sơ Mi - Khám Phá Sự Tinh Tế Tại Toryco 1993 Store</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                    in
                                    <a rel="category" href="blog.html">Toryco 1993 Store</a>
                                </span>
                                <span class="published">
                                    <i class="fa fa-clock-o"></i>
                                    Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content"> 
                            Toryco 1993 Store tự hào về bộ sưu tập áo sơ mi nam phong phú từ các thương hiệu hàng đầu thế giới. 
                            Chất liệu cao cấp, kiểu dáng đa dạng và màu sắc tinh tế, tất cả những yếu tố này được kết hợp tạo nên những chiếc áo sơ mi nam lý tưởng cho mọi dịp. </div>
                        
                        </div>
                        <div class="box-left" >
                            <a href="Blog_1.php"><button>Xem thêm </button><!--nút mua hàng --></a>
                        </div>  
                    </div> 
                </div>
                <!-- single blog item end -->
                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="blog.html"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="images/new3.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Giày - Khám Phá Sự Hoàn Hảo Tại Toryco 1993 Store</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                    in
                                    <a rel="category" href="blog.html">Toryco 1993 Store</a>
                                </span>
                                <span class="published">
                                    <i class="fa fa-clock-o"></i>
                                    Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content"> 
                            Tại Toryco 1993 Store, chúng tôi hiểu rằng đôi giày không chỉ là một phần của bộ trang phục mà còn là biểu tượng của phong cách và đẳng cấp. 
                            Bạn sẽ được đắm chìm trong thế giới của sự sang trọng khi khám phá những mẫu giày độc đáo từ các thương hiệu danh tiếng.
                            </div>
                        </div>
                        <div class="box-left" >
                            <a href="Blog_1.php"><button>Xem thêm </button><!--nút mua hàng --></a>
                        </div>
                        
                    </div>
                </div>
                <!-- single blog item end -->
                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="#"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="images/new1.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Áo Vest - Sự Lịch Lãm Tại Toryco 1993 Store</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                    in
                                    <a rel="category" href="blog.html">Toryco 1993 Store</a>
                                </span>
                                <span class="published">
                                    <i class="fa fa-clock-o"></i>
                                    Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content"> 
                            Áo Vest không chỉ là một món đồ, mà còn là biểu tượng của sự lịch lãm và tinh tế. 
                            Chúng tôi tự hào mang đến cho bạn những mẫu áo Vest đẳng cấp từ những nhãn hiệu danh tiếng, với các kiểu dáng và màu sắc đa dạng để bạn có thể tự do lựa chọn phản ánh phong cách riêng của mình. </div>
                        </div>
                        <div class="box-left" >
                            <a href="blog_3.php"><button>Xem thêm </button><!--nút mua hàng --></a>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
            </div>
        </div>
    </div>
</section>
    
   </section>
   <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- parallax js -->
    <script src="js/parallax.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Img Zoom js -->
    <script src="js/img-zoom/jquery.simpleLens.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery.countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- Nivo slider js
    ============================================ --> 		
    <script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/home.js" type="text/javascript"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- sticky js -->
    <script src="js/sticky.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>
<style>     /* ------------------------Banner one piece------------------------------*/

  @media screen and  (max-width: 870px)  and (min-width:300px){
    body {
   width: auto;
    }
}
</style>


<?php require_once('Layout/footer.php'); ?>
