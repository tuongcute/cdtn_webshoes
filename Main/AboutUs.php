
<?php 
 include("Layout/header.php");
?>
<!-- pages-title-start -->
<section class="contact-img-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="con-text">
                                <h2 class="page-title">Về chúng tôi</h2>
                                <p><a href="#">Home</a> | Thông tin chúng tôi</p>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<body>

    <h2 style="   text-align: center;
  padding:80px;
  font-size:25px;
  margin-top:-200px">About us</h2>
    <h5 style="    font-size:16.6px;
    color:rgb(0, 0, 0);
    text-align:center;
    padding-left:395px;
    padding-right:395px;
    letter-spacing:0.5px;
    line-height:40px;
    font-weight:500;
    padding-bottom:70px;">
        Chào mừng bạn đến với Toryco 1993 Store - điểm đến hoàn hảo cho những tín đồ giày dép và phong cách. Chúng tôi tự hào là điểm đến hàng đầu cho những người yêu thời trang, nơi bạn có thể khám phá những mẫu giày đẳng cấp và đa dạng từ các thương hiệu hàng đầu trên thị trường.

Tại Toryco 1993 Store, chúng tôi cam kết mang lại cho bạn trải nghiệm mua sắm tuyệt vời nhất với dịch vụ chăm sóc khách hàng tận tình và chu đáo. Với một bộ sưu tập đa dạng, từ giày thể thao đến giày công sở, từ những kiểu dáng cổ điển đến những xu hướng mới nhất, chúng tôi tự tin rằng bạn sẽ tìm thấy điều gì đó phù hợp với phong cách và nhu cầu của mình tại cửa hàng của chúng tôi.

Ngoài ra, chúng tôi luôn lắng nghe ý kiến và phản hồi từ khách hàng để cải thiện dịch vụ của mình. Hãy đến và trải nghiệm sự đa dạng và chất lượng tại Toryco 1993 Store - nơi mà phong cách bắt đầu.</h5>
    </body>
</html>
<hr class="opacity-20">
<?php require_once('Layout/footer.php'); ?>


<style>
    *{
    margin: 0;
    padding: 0;
}
i{/*  chỉnh icon ngôi sao */
    font-size:16px;
    text-align: center;
    padding-right: 10px;
}

h2{/*  chỉnh ô chứa chữ H2 */
text-align: center;
font-size:23px; 
padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
padding-right:343px;
padding-bottom:70px;
padding-top:100px;
}

h5{/*  chỉnh ô chứa chữ H5 */
    text-align: left;
    font-size:16px; 
    font-weight: 50;
    padding-left:340px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-top:10px;
    padding-bottom:18px;


    }

h6{/*  chỉnh ô chứa chữ H6 */
    text-align: left;
    font-size:17.5px; 
    font-weight: 600;
    text-decoration: underline;
    padding-left:355px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:10px;
    margin-top:-10px;/*  chỉnh khoảng cách so với chữ bên trên */
}
.image{/*  chỉnh ảnh trong mục body */
    align-items: center;
    text-align: center;
}



/*-----------------BÀI VIẾT LIÊN QUAN--------------------------*/


hr{/*  chỉnh thanh kẻ giữa bài viết liên quan với ảnh trên */
    margin-top:70px;/*  chỉnh khoảng cách so với chữ bên trên */padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    margin-left:313px;
}
h1{/*  chỉnh ô chứa chữ H1 */
    text-align: left;
    font-size:16px; 
    font-weight: 550;
    padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:18px;
    margin-top:15px;/*  chỉnh khoảng cách so với chữ bên trên */
}
#list-new {/*  chỉnh ảnh bài viết liên quan */
    font-size:10px;/*size chữ sản phẩm*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    padding-left:190px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:317px;
    margin-top:40px;

}

#list-new .item .name {/*  chỉnh chữ bài viết liên quan */
    text-align: center;
    color:rgb(10, 10, 10);
    font-weight: bold;
    margin-top:20px;/*chỉnh khoảng cách từ tên so với sản phẩm*/
}


#list-new .box-left{
    text-align: center;
    margin-top:435px;/*chỉnh lên xuống nút xem thêm */
    margin-left:-490px;/*chỉnh trái phải nút xem thêm*/
    
}
#list-new .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}
#list-new .box-left button {/*nút buttom mua ngay*/
    font-size:12px;/*chỉnh size chữ*/
    width: 80px;/*chỉnh size dài bóng đen*/
    height: 30px;/*chỉnh size rộng bóng đen*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}

.gallery-display-area{
    overflow: hidden;
    height: 360px;
    width: 1080px;
    
}

.gallery-wrap{
    animation: slideShow 16s infinite;
    
}

.image{
    float: left;
    height: 360px;
    width: 1080px;
    display: flex;
    justify-content: center;
    align-items: center;

}

@keyframes slideShow{
    20%{
        margin-left: 0;        
    }
    30%{
        margin-left: -100%;        
    }
    40%{
        margin-left: -100%;        
    }
    50%{
        margin-left: -200%;        
    }
    60%{
        margin-left: -200%;        
    }
    70%{
        margin-left: -300%;        
    }
    80%{
        margin-left: -300%;        
    }
    90%{
        margin-left: -400%;        
    }
    100%{
        margin-left: -400%;        
    }
}
h5{/*  chỉnh  ô chứa chữ H4 */
    font-size:16.6px;
    color:rgb(0, 0, 0);
    text-align:center;
    padding-left:395px;
    padding-right:395px;
    letter-spacing:0.5px;
    line-height:40px;
    font-weight:500;
    padding-bottom:70px;
    
    
}
h2{/*  chỉnh ô chứa chữ H2 */
   text-align: center;
  padding:80px;
  font-size:25px;
  margin-top:-200px
}

@media screen and  (max-width: 870px)  and (min-width:300px){
    body {
   width: 1500px;
    }
}
</style>