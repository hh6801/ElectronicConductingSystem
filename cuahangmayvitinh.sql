-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2021 lúc 05:27 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuahangmayvitinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDonHang` varchar(20) DEFAULT NULL,
  `hoVaTen` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `soDienThoai` varchar(10) DEFAULT NULL,
  `diaChi` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tongTien` int(11) DEFAULT NULL,
  `trangThaiDonHang` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `maSanPham` varchar(20) DEFAULT NULL,
  `ten` varchar(100) NOT NULL,
  `soDienThoai` varchar(10) DEFAULT NULL,
  `soLuong` int(11) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` varchar(20) NOT NULL,
  `tenAnh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `maLoaiHang` varchar(20) NOT NULL,
  `tenSanPham` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`maLoaiHang`, `tenSanPham`) VALUES
('A', 'Asus'),
('HP', 'HP'),
('Mac', 'Macbook'),
('Mic', 'Microsoft'),
('MSI', 'MSI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNhanVien` varchar(20) NOT NULL,
  `soDienthoai` varchar(10) NOT NULL,
  `bangCap` varchar(100) NOT NULL,
  `chucVu` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNhanVien`, `soDienthoai`, `bangCap`, `chucVu`) VALUES
('NV01', '0123456785', 'Dai hoc', 'Nhân viên kế toán'),
('NV02', '0123456782', 'Dai hoc', 'Nhân viên bán hàng'),
('NV03', '0123456783', 'Dai hoc', 'Nhân viên bán hàng'),
('NV04', '0123456784', 'Dai Hoc', 'Nhân viên kế toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSanPham` varchar(20) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `loaiSanPham` varchar(20) NOT NULL,
  `id` varchar(1024) NOT NULL,
  `trangThai` varchar(100) NOT NULL,
  `thongSo` varchar(100) NOT NULL,
  `giaSauKhiGiam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSanPham`, `ten`, `gia`, `loaiSanPham`, `id`, `trangThai`, `thongSo`, `giaSauKhiGiam`) VALUES
('A01', 'Asus Zenbook UX325EA-KG363T/i5-1135G7', 23790000, 'A', 'Asus-Zenbook-UX325EA.png', '', '', 0),
('A02', 'Laptop Asus Zenbook Duo UX482EA-KA268T i7 1165G70', 39490000, 'A', 'Laptop-Asus-Zenbook-Duo.png', '', '', 0),
('A03', 'Asus Zenbook UX425EA-KI439T/i7-1165G7', 29899000, 'A', 'Asus-Zenbook-UX425EA.png', '', '', 0),
('A04', 'Asus Vivobook M513UA-L1230T/R5-5500U', 16490000, 'A', 'Laptop-Asus-Zenbook-Duo.png', '', '', 0),
('HP01', 'Laptop HP Pavilion 15 eg0509TU i3 1125G4', 15999000, 'HP', 'Laptop-HP-Pavilion-15%20.png', '', '', 0),
('Mac01', 'MacBook Pro 14\" 2021 M1 Pro', 52990000, 'Mac', 'MacBook-Pro.png', '', '', 0),
('Mic01', 'Microsoft Surface Laptop Go/Core i5-1035G1', 17999000, 'Mic', 'MicrosoftSurface.png', '', '', 0),
('MSI01', 'MSI Modern 14 B5M R5 5500U/062VN', 16299000, 'MSI', 'MSI-Modern-14-B5M-R5.png', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoVaTen` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gioiTinh` varchar(3) CHARACTER SET utf8 NOT NULL,
  `ngaySinh` date NOT NULL,
  `soDienThoai` varchar(10) NOT NULL,
  `type` varchar(100) CHARACTER SET utf8 NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`email`, `password`, `hoVaTen`, `gioiTinh`, `ngaySinh`, `soDienThoai`, `type`) VALUES
('vuuthinh@gmail.com', 'vuuthinh123', 'Vưu Thịnh', 'Nam', '2001-09-02', '0123456781', 'Khách hàng'),
('huuhuy@gmail.com', 'huuhuy123', 'Nguyễn Hữu Huy', 'Nam', '2001-07-22', '0123456782', 'Nhân viên'),
('vuhau@gmai.com', 'vuhau123', 'Vũ Trung Hậu', 'Nam', '2001-11-11', '0123456783', 'Nhân viên'),
('mailoan@gmai.com', 'mailoan123', 'Nguyễn Mai Loan', 'Nữ', '2001-12-06', '0123456784', 'Nhân viên'),
('duchung@gmail.com', 'duchung123', 'Trần Đức Hưng', 'Nam', '2001-10-22', '0123456785', 'Nhân viên'),
('thanhhuu@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12', 'Thạch Thanh Hữu', '', '2021-12-18', '0164985656', ''),
('thanhhuu@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12', 'Thạch Thanh Hữu', '', '2021-12-09', '0356562656', ''),
('test1@gmail.com', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f0166537047', 'Tommy Thach', '', '2021-12-09', '0378012065', 'Khách hàng'),
('thanhhuu@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12', 'Thạch Thanh Hữu', '', '2021-12-03', '0565656565', 'Khách hàng'),
('test2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Thạch Thanh Hữu', '', '2022-01-01', '0666494561', 'Khách hàng'),
('thanhhuu@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12', 'Thạch Thanh Hữu', '', '2021-12-16', '0976297423', 'Khách hàng'),
('thachthanhhuu@gmail.com', 'thanhhuu123', 'Thach Thanh Hữu', 'Nam', '2001-09-30', '0976297749', 'Khách hàng'),
('test2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Thạch Thanh Hữu', '', '2022-01-06', '0976656622', 'Khách hàng'),
('nguyenhuuhoa@gmail.com', 'huuhoa123', 'Nguyễn Hữu Hòa', 'Nam', '2001-08-02', '0981011694', 'Khách hàng'),
('thanhhuu@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12', 'Thạch Thanh Hữu', '', '2021-12-16', '0984847456', 'Khách hàng'),
('trantrungtinh@gmail.com', 'admin_09', 'Trần Trung Tín', 'Nam', '1990-09-09', '0984847458', 'Quản lý'),
('test2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Thạch Thanh Hữu', '', '2022-01-06', 'hapyp', 'Khách hàng'),
('test2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Thạch Thanh Hữu', '', '2022-01-06', 'hapypy_09', 'Khách hàng'),
('thanhhuu@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12', 'Thạch Thanh Hữu', '', '2021-12-15', 'thanhhuu', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD KEY `soDienThoai` (`soDienThoai`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD KEY `maSanPham` (`maSanPham`),
  ADD KEY `FK_SDTGioHang` (`soDienThoai`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD KEY `FK_ID` (`id`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`maLoaiHang`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNhanVien`),
  ADD KEY `soDienthoai` (`soDienthoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSanPham`),
  ADD KEY `loaiSanPham` (`loaiSanPham`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`soDienThoai`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`soDienThoai`) REFERENCES `users` (`soDienThoai`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_SDTGioHang` FOREIGN KEY (`soDienThoai`) REFERENCES `users` (`soDienThoai`),
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`maSanPham`) REFERENCES `sanpham` (`maSanPham`);

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_ID` FOREIGN KEY (`id`) REFERENCES `sanpham` (`maSanPham`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`soDienthoai`) REFERENCES `users` (`soDienThoai`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`loaiSanPham`) REFERENCES `loaihang` (`maLoaiHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
