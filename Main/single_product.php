
<?php
require_once('database/config.php');
require_once('database/dbhelper.php');
// Lấy id từ trang index.php truyền sang rồi hiển thị nó
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'select product.*, collections.name as collection_name from product, collections where product.id_sanpham = collections.id and product.id=' . $id;
    $product = executeSingleResult($sql);
    // Kiểm tra nếu ko có id sp đó thì trả về index.php
    if ($product == null) {
        header('Location: index.php');
        die();
    }
}
?>
<?php 
 include("Layout/header.php");
?>
<!-- pages-title-start -->
<section class="contact-img-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="con-text">
                                <h2 class="page-title">Shop</h2>
                                <p><a href="#">Home</a> | shop</p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
<main>
    <div class="container">
        <!-- END LAYOUT  -->
        <section class="main">
            <section class="oder-product" >
                <div class="title">
                    <section class="main-order">
                        <h1><?= $product['title'] ?></h1>
                        <div class="box">
                          <div class="left" >
                            <li >
                              <div class="main_image" >
                                <img src="<?='../Admin/product/'.$product['thumbnail'] ?>" alt="">
                              </div>
                              <div class="main_image">
                                <img src="<?='../Admin/product/'.$product['thumbnail_1'] ?>" alt="">
                              </div>
                              <div class="main_image">
                                <img src="<?='../Admin/product/'.$product['thumbnail_2'] ?>" alt="">
                              </div>
                            </li>

                            <li>
                              <div class="main_image">
                                <img src="<?='../Admin/product/'.$product['thumbnail_3'] ?>" alt="">
                              </div>
                              <div class="main_image">
                                <img src="<?='../Admin/product/'.$product['thumbnail_4'] ?>" alt="">
                              </div>
                              <div class="main_image">
                                <img src="<?='../Admin/product/'.$product['thumbnail_5'] ?>" alt="">
                              </div>
                            </li>

                        </div>
                        <div class="about">
                            <p style="padding-top:105px;margin-left:10px; width:300px"><?= $product['content'] ?></p>
                            <p style="padding-top:20px;margin-left:10px; width:300px">Bộ Sưu Tập: <span style="font-weight: 600; color:#FF6600"><?= $product['collection_name'] ?></span></p>
                        
                            <div id="myDIV" style="padding-top:10px; margin-left:10px;">
                                <button class="btn" onclick="setSize(34)">34</button>
                                <button class="btn active" onclick="setSize(35)">35</button>
                                <button class="btn" onclick="setSize(36)">36</button>
                            </div>

                            <script>
                                function setSize(size) {
                                    selectedSize = size; // Cập nhật kích thước đã chọn
                                    updateActiveButton(); // Cập nhật trạng thái các nút

                                    // Lưu kích thước vào Cookie
                                    document.cookie = "selectedSize=" + encodeURIComponent(selectedSize) + "; path=/"; // Lưu vào Cookie

                                    console.log('Size selected:', selectedSize); // In ra kích thước đã chọn (để kiểm tra)
                                }

                                function updateActiveButton() {
                                    var buttons = document.querySelectorAll('#myDIV .btn'); // Lấy tất cả các nút trong phần tử có id là "myDIV"
                                    buttons.forEach(function(button) {
                                        if (button.textContent === selectedSize) {
                                            button.classList.add('active'); // Thêm lớp 'active' cho nút đã chọn
                                        } else {
                                            button.classList.remove('active'); // Loại bỏ lớp 'active' cho các nút khác
                                        }
                                    });
                                }
                            </script>


                            
                            <div class="number"style="padding-top:10px;margin-left:10px;">
                                <span class="number-buy">Số lượng</span>
                                <input id="num" type="number" value="1" min="1" onchange="updatePrice()">
                            </div>
                            
                            <p class="price"style="padding-top:70px;margin-left:10px;">Giá: <span id="price"><?= number_format($product['price'], 0, ',', '.') ?></span><span> VNĐ</span><span class="gia none"><?= $product['price'] ?></span></p>
                            <?php 
                                if(isset($_COOKIE['tendangnhap'])){
                                    echo '<button class="add-cart" style="margin-left:10px;" onclick="addToCart(' . $id . ')"><i class="fas fa-cart-plus"></i><a href="/cart.php"></a> Thêm vào giỏ hàng</button>
                                    <p></p>
                                    
                                    <button class="buy-now" style="margin-left:10px;" onclick="buyNow(' . $id . ')"><i class="fas fa-money-check"></i> Mua ngay</button>';
                                } else {
                                    echo '<div class="wc-proceed-to-checkout" style="text-align: center;">
                                    <p class="return-to-shop">
                                        <a class="button wc-backward" href="login.php">Đăng nhập để thêm giỏ hàng</a>
                                    </p>
                                    </div>';
                                }
                            ?>
                        

                            <script>
                                function updatePrice() {
                                    var price = parseFloat(document.getElementById('price').innerText.replace(/\D/g, '')); // Giá sản phẩm
                                    var num = parseInt(document.querySelector('#num').value); // Số lượng sản phẩm
                                    var gia1 = parseFloat(document.querySelector('.gia').innerText); // Giá sản phẩm ban đầu
                                    var tong = gia1 * num;
                                    document.getElementById('price').innerHTML = tong.toLocaleString();
                                }
                            </script>
                            <script type="text/javascript">
                                function addToCart(id) {
                                    var num = document.querySelector('#num').value; // số lượng
                                    // Lấy kích thước từ Cookie
                                    var selectedSize = getCookie("selectedSize");
                                    $.post('api/cookie.php', {
                                        'action': 'add',
                                        'id': id,
                                        'num': num,
                                        'size': selectedSize // Thêm thông tin về kích thước vào đây
                                    }, function(data) {
                                        location.reload()
                                    })
                                }

                                function buyNow(id) {
                                    // Lấy kích thước từ Cookie
                                    var num = parseInt(document.getElementById('num').value); // Lấy số lượng sản phẩm từ trường nhập liệu
                                    var selectedSize = getCookie("selectedSize");
                                    $.post('api/cookie.php', {
                                        'action': 'add',
                                        'id': id,
                                        'num': num, // Truyền số lượng sản phẩm
                                        'size': selectedSize
                                    }, function(data) {
                                        location.assign("checkout_product.php");
                                    });
                                }
                                // Hàm để lấy giá trị của Cookie
                                function getCookie(name) {
                                    var nameEQ = name + "=";
                                    var ca = document.cookie.split(';');
                                    for(var i=0;i < ca.length;i++) {
                                        var c = ca[i];
                                        while (c.charAt(0)==' ') c = c.substring(1,c.length);
                                        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                                    }
                                    return null;
                                }
                            </script>
                        </div>
                        <div class="fb-comments" data-href="http://localhost/PROJECT/details.php" data-width="750" data-numposts="5"></div>

                    </section>
                </div>
            </section>
            <section class="restaurants">
                <div class="title">
                    <h1>Các sản phẩm khác tại <span class="green" style="color: #0099FF;">TORYCO 1993 STORE</span></h1>
                </div>
                <div class="product-restaurants">
                    <div class="row">
                    <?php
                    // Kiểm tra xem ID sản phẩm đã được truyền qua tham số truy vấn trong URL chưa
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        // Lấy ID sản phẩm từ tham số truy vấn trong URL
                        $product_id = $_GET['id'];

                        // Tạo câu truy vấn SQL để lấy ID loại sản phẩm của sản phẩm đó
                        $sql_category = "SELECT id_category FROM product WHERE id = $product_id";
                        $result_category = executeSingleResult($sql_category);

                        // Kiểm tra xem có kết quả trả về từ câu truy vấn SQL không
                        if ($result_category && isset($result_category['id_category'])) {
                            $id_category = $result_category['id_category'];

                            // Tạo câu truy vấn SQL để lấy các sản phẩm cùng loại
                            $sql_products = "SELECT * FROM product WHERE id_category = $id_category";
                            $productList = executeResult($sql_products);

                            // Kiểm tra xem có sản phẩm cùng loại hay không
                            if ($productList) {
                                // Hiển thị danh sách sản phẩm cùng loại
                                foreach ($productList as $item) {
                                    echo '
                                        <div class="col">
                                            <a href="single_product.php?id=' . $item['id'] . '">
                                                <img class="thumbnail" src="../Admin/product/' . $item['thumbnail'] . '" alt="">
                                                <div class="title">
                                                    <p>' . $item['title'] . '</p>
                                                </div>
                                                <div class="price">
                                                    <span>' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                                </div>
                                                <div class="more">
                                                    <div class="star">
                                                        <img src="images/icon/icon-star.svg" alt="">
                                                        <span>4.9</span>
                                                    </div>
                                                    <div class="time">
                                                        <img src="images/icon/icon-clock.svg" alt="">
                                                        <span>99 comment</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    ';
                                }
                            } else {
                                // Hiển thị thông báo nếu không có sản phẩm cùng loại
                                echo '<p>Không có sản phẩm cùng loại.</p>';
                            }
                        } else {
                            // Hiển thị thông báo nếu không tìm thấy thông tin về loại sản phẩm của sản phẩm đó
                            echo '<p>Không tìm thấy thông tin về loại sản phẩm của sản phẩm này.</p>';
                        }
                    } else {
                        // Hiển thị thông báo nếu không có ID sản phẩm trong tham số truy vấn hoặc ID không hợp lệ
                        echo '<p>Không có ID sản phẩm hoặc ID sản phẩm không hợp lệ.</p>';
                    }
                    ?>

                    </div>
                </div>
            </section>
        </section>
    </div>
</main>
<?php require_once('Layout/footer.php'); ?>