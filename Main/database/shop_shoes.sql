

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Vans', '2024-02-07 11:50:15', '2024-03-06 15:07:28'),
(2, 'Converse', '2024-02-07 11:50:15', '2024-03-06 15:03:28'),
(3, 'Reebok', '2024-02-07 11:50:15', '2024-03-06 15:57:28'),
(4, 'New Balance', '2024-02-13 10:57:52', '2024-03-06 15:14:29'),
(5, 'Nike', '2024-02-07 11:50:15', '2024-03-06 15:57:28'),
(6, 'Adidas', '2024-02-13 10:57:52', '2024-03-06 15:14:29');


CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `collection` (`id`, `name`) VALUES
(1, 'One Piece'),
(2, 'The Spring'),
(3, 'Liliwyun');

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orders` (`id`, `fullname`, `phone_number`, `email`, `address`, `note`, `order_date`) VALUES
(163, 'ninnin_1', '12345678', 'admin@gmail.com', 'Tphcm', 'Vans Knu Skool', '2024-01-06 22:39:49'),
(164, 'ninnin_2', '12345678', 'admin@gmail.com', 'HaNoi', 'Vans Sk8-Hi Rearrange', '2024-01-06 22:40:51'),
(165, 'ninnin_4', '12345678', 'admin@gmail.com', 'CanTho', 'Reebok Answer DMX - White', '2024-01-06 22:44:20'),
(166, 'ninnin_3', '12345678', 'admin@gmail.com', 'NhaTrang', 'Converse Run Star Hike Festival – Juicy Green Graphic', '2024-01-06 22:47:24');


CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `size` int(2) NULL,
  `num` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `id_user`,`size`, `num`, `price`, `status`) VALUES
(172, 163, 1, 1,40, 1, 2400000, 'Đang chuẩn bị'),
(173, 164, 2, 1,39, 1, 2500000, 'Đang chuẩn bị'),
(176, 165, 5, 1,37, 1, 3200000, 'Đang chuẩn bị'),
(177, 166, 4, 1,38, 1, 1500000, 'Đã nhận hàng');


CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `size` int(2) NULL,
  `price` float NOT NULL,
  `number` float NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `thumbnail_1` varchar(500) NOT NULL,
  `thumbnail_2` varchar(500) NOT NULL,
  `thumbnail_3` varchar(500) NOT NULL,
  `thumbnail_4` varchar(500) NOT NULL,
  `thumbnail_5` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `product` (`id`, `title`, `price`, `number`, `thumbnail`, `thumbnail_1`, `thumbnail_2`, `thumbnail_3`, `thumbnail_4`, `thumbnail_5`, `content`, `id_category`, `id_sanpham`, `created_at`, `updated_at`) VALUES
(1, 'Vans Knu Skool', 2400000, 10, 'v/vks/1.jpg', 'v/vks/2.jpg','v/vks/3.jpg','v/vks/4.jpg','v/vks/5.jpg', 'v/vks/6.jpg', 'Giày Vans Old Skool - một biểu tượng về phong cách và sự thoải mái trong thế giới giày sneaker. Với thiết kế kinh điển từ dải nửa phía trên đế đến dải bảo vệ ngón chân, Giày Vans Old Skool trở thành biểu tượng của phong cách đường phố. Với chất liệu da hoặc vải canvas, các màu sắc đa dạng và logo huyền thoại trên bên hông, mẫu giày này không chỉ thể hiện cá tính mạnh mẽ mà còn mang lại sự thoải mái suốt cả ngày.', 1, 1, '2024-01-30 10:37:18', '2024-02-27 15:24:13'),
(2, 'Vans Sk8-Hi Rearrange', 2500000, 20, 'v/vshr/1.jpg', 'v/vshr/2.jpg', 'v/vshr/3.jpg', 'v/vshr/4.jpg', 'v/vshr/5.jpg', 'v/vshr/6.jpg', 'Giày Vans Sk8-Hi Rearrange - sự kết hợp độc đáo giữa phong cách cổ điển và sự đột phá hiện đại. Với thiết kế cao cổ mang tính biểu tượng của dòng giày Sk8-Hi, mẫu Rearrange mang đến một cảm giác mới lạ với việc sắp xếp lại các thành phần truyền thống. Tính linh hoạt của mẫu này cho phép bạn tự do biến đổi và tái tạo với các phụ kiện và chi tiết tùy chỉnh, tạo ra một phong cách cá nhân và độc đáo.', 1, 1, '2024-01-30 15:11:49', '2024-01-30 15:11:49'),
(3, 'Converse Chuck 70 Seasonal Color Canvas', 1300000, 20, 'c/cc7scc/1.jpg', 'c/cc7scc/2.jpg', 'c/cc7scc/3.jpg', 'c/cc7scc/4.jpg', 'c/cc7scc/5.jpg', 'c/cc7scc/6.jpg', 'Giày Converse Chuck 70 Seasonal Color Canvas - một sự kết hợp hoàn hảo giữa phong cách cổ điển và sự sáng tạo hiện đại. Với chất liệu vải canvas cao cấp và đế giày chắc chắn, mẫu này mang lại cảm giác thoải mái và bền bỉ. Điểm nhấn là gam màu mang tính mùa vụ, tạo điểm nhấn sắc màu tươi mới cho bộ sưu tập giày của bạn. Với kiểu dáng Chuck 70 kinh điển, đây là lựa chọn hoàn hảo cho những ai yêu thích sự phá cách và cá tính.', 2, 1, '2023-10-30 17:31:22', '2024-01-27 12:09:25'),
(4, 'Converse Run Star Hike Festival – Juicy Green Graphic', 1500000, 20, 'c/crshf/1.jpg', 'c/crshf/2.jpg', 'c/crshf/3.jpg', 'c/crshf/4.jpg', 'c/crshf/5.jpg', 'c/crshf/6.jpg', 'Giày Converse Run Star Hike Festival – Juicy Green Graphic là sự kết hợp độc đáo giữa phong cách retro và sự sáng tạo hiện đại. Với màu sắc tươi mới Juicy Green và các đường graphic tinh tế, đây là một điểm nhấn cho bất kỳ outfit nào. Thiết kế đế nền cao Run Star Hike tạo ra vẻ ngoài đặc biệt và thoải mái cho người mang. Đây là một lựa chọn hoàn hảo cho những ai muốn thể hiện phong cách cá nhân và sự tự tin.', 2, 2, '2023-10-30 21:59:06', '2023-10-30 21:59:06'),
(5, 'Reebok Answer DMX - White', 3200000, 10, 'rb/rad/1.jpg', 'rb/rad/2.jpg', 'rb/rad/3.jpg', 'rb/rad/4.jpg', 'rb/rad/5.jpg', 'rb/rad/6.jpg', 'Reebok Answer DMX - White là biểu tượng của sự đẳng cấp và phong cách trong thế giới giày sneaker. Với màu trắng tinh khôi, đôi giày này mang đến vẻ đẹp tinh tế và dễ kết hợp với mọi trang phục. Thiết kế dạng cao cổ kết hợp với công nghệ DMX của Reebok giúp cung cấp sự thoải mái và hỗ trợ cho đôi chân, phù hợp cho cả những hoạt động hàng ngày và các buổi tập thể thao. Đây là sự lựa chọn lý tưởng cho những ai đang tìm kiếm sự kết hợp hoàn hảo giữa phong cách và hiệu suất.', 3, 1, '2023-10-30 22:10:40', '2023-10-30 22:10:40'),
(6, 'Reebok Club C 85 - White : Glen Green : Solar Acid Yellow', 1800000, 10, 'rb/rbsay/1.jpg', 'rb/rbsay/2.jpg', 'rb/rbsay/3.jpg', 'rb/rbsay/4.jpg', 'rb/rbsay/5.jpg', 'rb/rbsay/6.jpg', 'Reebok Club C 85 - White : Glen Green : Solar Acid Yellow là một sự kết hợp táo bạo và phong cách trong thế giới giày sneaker. Với màu trắng tinh khôi làm nền, điểm nhấn là các chi tiết màu Glen Green và Solar Acid Yellow, tạo nên một phong cách cá nhân và độc đáo. Thiết kế dựa trên dòng Club C 85 mang đến sự thoải mái và phong cách cổ điển. Đôi giày này không chỉ là sự lựa chọn tuyệt vời cho các buổi đi chơi hàng ngày mà còn là điểm nhấn hoàn hảo cho bất kỳ bộ trang phục nào.', 3, 3, '2023-10-31 12:37:46', '2023-12-27 08:41:12'),
(7, 'New Balance 1906F - Phantom', 3100000, 20, 'nb/nb1p/1.jpg', 'nb/nb1p/2.jpg', 'nb/nb1p/3.jpg', 'nb/nb1p/4.jpg', 'nb/nb1p/5.jpg', 'nb/nb1p/6.jpg', 'New Balance 1906F - Phantom: Sự Kết Hợp Tinh Tế Của Phong Cách Và Hiệu Suất', 4, 2, '2023-10-31 12:40:58', '2023-10-31 12:40:58'),
(8, 'New Balance 1906R - Castlerock / Natural Indigo', 3200000, 20, 'nb/nb1c/1.jpg', 'nb/nb1c/2.jpg', 'nb/nb1c/3.jpg', 'nb/nb1c/4.jpg', 'nb/nb1c/5.jpg', 'nb/nb1c/6.jpg', 'New Balance 1906R - Castlerock / Natural Indigo kết hợp màu sắc Castlerock và Natural Indigo để tạo ra phong cách độc đáo. Thiết kế thoải mái và đa năng này là sự lựa chọn hoàn hảo cho mọi hoạt động hàng ngày.', 4, 2, '2023-10-31 12:43:18', '2023-10-31 12:43:18'),
(9, 'Nike Air Max 90 - Red Stardust', 2200000, 15, 'n/aj1lw/1.jpg', 'n/aj1lw/2.jpg', 'n/aj1lw/3.jpg', 'n/aj1lw/4.jpg', 'n/aj1lw/5.jpg', 'n/aj1lw/6.jpg', 'Nike Air Max 90 - Red Stardust: Sự Kết Hợp Đầy Cá Tính Của Màu Đỏ Stardust. Thiết Kế Đậm Chất Thể Thao Cùng Công Nghệ Air Max Đỉnh Cao, Đôi Giày Này Sẽ Làm Nổi Bật Bước Chân Của Bạn Trong Mọi Hoàn Cảnh.', 5, 2, '2023-10-31 12:55:56', '2023-10-31 12:55:56'),
(10, 'Air Jordan 1 Low WMNS - Sky J Orange', 3400000, 20, 'n/aj1lw/1.jpg', 'n/aj1lw/2.jpg', 'n/aj1lw/3.jpg','n/aj1lw/4.jpg', 'n/aj1lw/5.jpg', 'n/aj1lw/6.jpg', 'Air Jordan 1 Low WMNS - Sky J Orange: Sự Kết Hợp Độc Đáo Của Màu Sky J Orange. Với Thiết Kế Thấp Cổ, Đôi Giày Này Mang Lại Sự Tự Tin và Phong Cách Cá Nhân. Sẵn Sàng Đồng Hành Cùng Bạn Trên Mọi Nẻo Đường và Hoạt Động Thể Thao.', 5, 2, '2023-10-31 12:59:42', '2023-10-31 12:59:42'),
(11, 'Rivalry Low', 2200000, 10, 'a/rl/1.jpg', 'a/rl/2.jpg', 'a/rl/3.jpg', 'a/rl/4.jpg', 'a/rl/5.jpg', 'a/rl/6.jpg', 'GIÀY RIVALRY LOW: Sự Kết Hợp Hoàn Hảo Giữa Phong Cách Đường Phố và Sự Thể Thao. Thiết Kế Thấp Cổ Mang Lại Sự Linh Hoạt và Độ Bền. Được Chế Tác Với Chất Liệu Chất Lượng Cùng Logo Đặc Trưng, Đôi Giày Này Sẽ Là Điểm Nhấn Hoàn Hảo Cho Bất Kỳ Bộ Trang Phục Nào.', 6, 1, '2023-10-31 13:06:27', '2023-10-31 13:06:27'),
(12, 'Superstar XLG', 3000000, 15, 'a/xs/1.jpg', 'a/xs/2.jpg', 'a/xs/3.jpg', 'a/xs/4.jpg', 'a/xs/5.jpg', 'a/xs/6.jpg', 'GIÀY SUPERSTAR XLG: Sự Kết Hợp Độc Đáo Của Phong Cách Retro và Thiết Kế Hiện Đại. Với Đế Đệm Cao Su Và Phần Mũi Giày Shell Toe Kinh Điển, Đôi Giày Này Mang Lại Sự Thoải Mái và Sự Bền Bỉ Cho Mọi Hoạt Động. Sự Xuất Hiện Của Logo Thương Hiệu Trên Thân Giày Tạo Điểm Nhấn Tinh Tế, Phản Ánh Phong Cách Cá Nhân.', 6, 2, '2023-11-05 21:03:16', '2023-11-05 21:03:16');


CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `tenadmin` varchar(100) NOT NULL,
  `tendangnhap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_admin` (`id_admin`, `tenadmin`, `tendangnhap`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'quangtuong', 'Admin_Tuong', 'admin_tuong@gmail.com', 'Nha Trang', '9999', '012345678');

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `tendangnhap` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `tendangnhap`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(104, 'Nguyễn Văn A', 'user1', 'user1@example.com', '123 Đường 2 Tháng 4, Nha Trang', '123456', '0123456789'),
(105, 'Trần Thị B', 'user2', 'user2@example.com', '456 Lê Lợi, Nha Trang', 'abcdef', '0987654321'),
(106, 'Phạm Văn C', 'user3', 'user3@example.com', '789 Nguyễn Thị Minh Khai, Nha Trang', 'qwerty', '0123456789'),
(107, 'Lê Thị D', 'user4', 'user4@example.com', '1011 Lê Hồng Phong, Nha Trang', 'abc123', '0987654321'),
(108, 'Nguyễn Thanh E', 'user5', 'user5@example.com', '1213 Võ Thị Sáu, Nha Trang', 'pass123', '0123456789'),
(109, 'Trần Văn F', 'user6', 'user6@example.com', '1415 Bến Vân Đồn, Nha Trang', 'admin', '0987654321'),
(110, 'Hoàng Văn G', 'user7', 'user7@example.com', '1617 Lý Thái Tổ, Nha Trang', 'password', '0123456789');


CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(28) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id_user`, `hoten`, `username`, `password`, `phone`, `email`) VALUES
(7, 'Nguyễn Văn A', 'user1', 'password1', '0987654321', 'user1@example.com'),
(8, 'Trần Thị B', 'user2', 'password2', '0123456789', 'user2@example.com'),
(55, 'Lê Văn C', 'user3', 'password3', '0909090909', 'user3@example.com'),
(57, 'Phạm Thị D', 'user4', 'password4', '0888888888', 'user4@example.com'),
(58, 'Hoàng Văn E', 'user5', 'password5', '0999999999', 'user5@example.com');

-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

