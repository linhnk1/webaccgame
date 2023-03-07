-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 07, 2022 lúc 07:46 PM
-- Phiên bản máy phục vụ: 10.3.36-MariaDB-log-cll-lve
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tuanori`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `groups` varchar(255) DEFAULT NULL,
  `account` text DEFAULT NULL,
  `chitiet` text DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `listimg` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `stk` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `bank_name` text DEFAULT NULL,
  `chi_nhanh` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `bank`
--

INSERT INTO `bank` (`id`, `stk`, `name`, `bank_name`, `chi_nhanh`, `logo`, `ghichu`) VALUES
(1, '259876543210', 'MBBANK', 'PHẠM HOÀNG TUẤN', NULL, 'https://i.imgur.com/uuPn0ma.png', ''),
(2, '28349817', 'ACB', 'PHẠM HOÀNG TUẤN', NULL, 'https://i.imgur.com/wRPn9dG.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank_auto`
--

CREATE TABLE `bank_auto` (
  `id` int(11) NOT NULL,
  `tid` varchar(64) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `amount` int(11) DEFAULT 0,
  `cusum_balance` int(11) DEFAULT 0,
  `time` datetime DEFAULT NULL,
  `bank_sub_acc_id` varchar(64) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `loaithe` varchar(32) NOT NULL,
  `menhgia` int(11) NOT NULL,
  `thucnhan` int(11) DEFAULT 0,
  `seri` mediumtext NOT NULL,
  `pin` mediumtext NOT NULL,
  `createdate` datetime NOT NULL,
  `status` varchar(32) NOT NULL,
  `note` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `title`, `display`, `img`) VALUES
(3, 'Free Fire', 'SHOW', '/assets/storage/images/category_Z1SHBKP5ARC2.png'),
(4, 'Liên Minh Huyền Thoại', 'SHOW', '/assets/storage/images/category_AV3NZFHQ1UE4.png'),
(5, 'Liên Quân Mobile', 'SHOW', '/assets/storage/images/category_4H5AUYZKC0IT.png'),
(6, 'PUBG Mobile', 'SHOW', '/assets/storage/images/category_LYU4ZXEF7S5A.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_caythue`
--

CREATE TABLE `category_caythue` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_caythue`
--

INSERT INTO `category_caythue` (`id`, `title`, `display`, `img`) VALUES
(7, 'CẦY THUÊ ROBLOX', 'SHOW', '/assets/storage/images/category_8T9X7Y45PKJI.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongtien`
--

CREATE TABLE `dongtien` (
  `id` int(11) NOT NULL,
  `sotientruoc` int(11) DEFAULT NULL,
  `sotienthaydoi` int(11) DEFAULT NULL,
  `sotiensau` int(11) DEFAULT NULL,
  `thoigian` datetime DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `display` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `chitiet` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `category`, `title`, `display`, `img`, `chitiet`) VALUES
(8, 3, 'Mua tài khoản Free Fire', 'SHOW', '/assets/storage/images/groups_7TE1ZFC5H2S6.png', 'PGgyIGNsYXNzPSJhbGVydC1oZWFkaW5nIiBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAxMHB4IDBweDsgcGFkZGluZzogMHB4OyBmb250LWZhbWlseTogJnF1b3Q7Um9ib3RvIENvbmRlbnNlZCZxdW90Oywgc2Fucy1zZXJpZjsgbGluZS1oZWlnaHQ6IDEuMTsgY29sb3I6IHJnYig2MywgNjgsIDc0KTsgZm9udC1zaXplOiAxOHB4OyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBmb250LXdlaWdodDogNzAwOyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsiPk5JQ0sgRlJFRSBGSVJFIEdJ4bqiTSBHScOBIDUwJTwvc3Bhbj48L2gyPjxkaXYgY2xhc3M9ImRlc2NyaXB0aW9uIiBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsgYm9yZGVyOiAwcHg7IGZvbnQtc2l6ZTogMTdweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IHJnYig1MCwgMTIyLCAyMTMpOyBmb250LWZhbWlseTogJnF1b3Q7Um9ib3RvIENvbmRlbnNlZCZxdW90Oywgc2Fucy1zZXJpZjsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBmb250LXdlaWdodDogNzAwOyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsiPi0gMTAwJSBOaWNrIMSQw7puZyBN4bqtdCBLaOG6qXUgVHLhuq9uZyBUaMO0bmcgVGluPC9zcGFuPjxiciBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IHJnYigyNTUsIDAsIDApOyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGZvbnQtd2VpZ2h0OiA3MDA7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyI+LSBLSMOBQ0ggSMOATkcgS0jDlE5HIMSQxq/hu6JDIFThuq5UIE3DgyDEkMSCTkcgTkjhuqxQPC9zcGFuPjxiciBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IHJnYig1MCwgMTIyLCAyMTMpOyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGZvbnQtd2VpZ2h0OiA3MDA7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyI+LSBDaMO6IMO9IGfhu6EgYuG7jyB04bqldCBj4bqjIHTDoGkga2hv4bqjbiB0csOqbiDhu6luZyBk4bulbmcgRmFjZWJvb2sgc2F1IMSRw7MgxJHEg25nIG5o4bqtcCBuaWNrIGLhurFuZyBt4bqhbmcgM0cgNEcgxJHhu4MgaOG6oW4gY2jhur8gYuG7iyB4w6FjIG1pbmggZGFuaCB0w61uaC48L3NwYW4+PGJyIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGZvbnQtd2VpZ2h0OiA3MDA7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyI+LSBLaGkgYuG7iyB4w6FjIG1pbmggZGFuaCB0w61uaCB2dWkgbMOybmcgbGnDqm4gaOG7hyBI4buXIFRy4bujIMSR4buDIMSRxrDhu6NjIGjhu5cgdHLhu6MsIGtow7RuZyDEkcaw4bujYyB04buxIMO9IHjDoWMgbWluaC48L3NwYW4+PGJyIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBjb2xvcjogcmdiKDI3LCAxMjksIDcwKTsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBmb250LXdlaWdodDogNzAwOyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsiPi0gS2jDoWNoIGjDoG5nIGtow7RuZyBuw6puIHRoYXkgxJHhu5VpIEVtYWlsICggdsOsIMSRw7MgbMOgIEVtYWlsIOG6o28ga2jDtG5nIOG6o25oIGjGsOG7n25nIGfDrCkgY2jhu4kgY+G6p24gxJHhu5VpIG3huq10IGto4bqpdS4gVOG7sSDDvSB0aGF5IHRow7RuZyB0aW4ga2jDtG5nIGjhu5cgdHLhu6MuPC9zcGFuPjwvc3Bhbj48L3NwYW4+PC9zcGFuPjwvc3Bhbj48L2Rpdj4='),
(9, 3, 'Thử vận may 100k', 'SHOW', 'http://localhost/CMSNT/SHOPNICK/assets/storage/images/groups_QZM0JKG7X4UP.png', 'PGgyIGNsYXNzPSJhbGVydC1oZWFkaW5nIiBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAxMHB4IDBweDsgcGFkZGluZzogMHB4OyBmb250LWZhbWlseTogJnF1b3Q7Um9ib3RvIENvbmRlbnNlZCZxdW90Oywgc2Fucy1zZXJpZjsgbGluZS1oZWlnaHQ6IDEuMTsgY29sb3I6IHJnYig2MywgNjgsIDc0KTsgZm9udC1zaXplOiAxOHB4OyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBmb250LXdlaWdodDogNzAwOyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsiPlRI4busIFbhuqxOIE1BWSBQSOG6okkgQ0jhuqRQIE5I4bqsTiBIw4pOIFhVSTwvc3Bhbj48L2gyPjxkaXYgY2xhc3M9ImRlc2NyaXB0aW9uIiBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsgYm9yZGVyOiAwcHg7IGZvbnQtc2l6ZTogMTdweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IHJnYig1MCwgMTIyLCAyMTMpOyBmb250LWZhbWlseTogJnF1b3Q7Um9ib3RvIENvbmRlbnNlZCZxdW90Oywgc2Fucy1zZXJpZjsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBmb250LXdlaWdodDogNzAwOyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsiPi0gMTAwJSBOaWNrIMSQw7puZyBN4bqtdCBLaOG6qXUsIDQwJSBOaWNrIEPDsyBTa2luIEhvdCwgMzAlIE5pY2sgQ8OzIDMwMDAgS0MsIDI1JSBOaWNrIEPDuWksIDUlIE5pY2sgQuG7iyBYw6FjIE1pbmg8L3NwYW4+PGJyIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBjb2xvcjogcmdiKDI1NSwgMCwgMCk7Ij48c3BhbiBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsgZm9udC13ZWlnaHQ6IDcwMDsgYm9yZGVyOiAwcHg7IHZlcnRpY2FsLWFsaWduOiBiYXNlbGluZTsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7Ij4tIFThuqV0IEPhuqMgVMOgaSBLaG/huqNuIMSQxINuZyBOaOG6rXAgQuG6sW5nIEZhY2Vib29rPC9zcGFuPjxiciBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBpbmhlcml0OyBtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBib3JkZXI6IDBweDsgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IHJnYig1MCwgMTIyLCAyMTMpOyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGZvbnQtd2VpZ2h0OiA3MDA7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyI+LSBDaMO6IMO9IGfhu6EgYuG7jyB04bqldCBj4bqjIHTDoGkga2hv4bqjbiB0csOqbiDhu6luZyBk4bulbmcgRmFjZWJvb2sgc2F1IMSRw7MgxJHEg25nIG5o4bqtcCBuaWNrIGLhurFuZyBt4bqhbmcgM0cgNEcgxJHhu4MgaOG6oW4gY2jhur8gYuG7iyB4w6FjIG1pbmggZGFuaCB0w61uaDwvc3Bhbj48YnIgc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7Ij48c3BhbiBzdHlsZT0iYm94LXNpemluZzogaW5oZXJpdDsgbWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsgYm9yZGVyOiAwcHg7IHZlcnRpY2FsLWFsaWduOiBiYXNlbGluZTsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IGNvbG9yOiByZ2IoMjcsIDEyOSwgNzApOyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGluaGVyaXQ7IG1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGZvbnQtd2VpZ2h0OiA3MDA7IGJvcmRlcjogMHB4OyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyI+LSBLaMOhY2ggaMOgbmcga2jDtG5nIMSRxrDhu6NjIHRoYXkgxJHhu5VpIEVtYWlsICggdsOsIMSRw7MgbMOgIEVtYWlsIOG6o28ga2jDtG5nIOG6o25oIGjGsOG7n25nIGfDrCkgY2jhu4kgY+G6p24gxJHhu5VpIG3huq10IGto4bqpdS4gVOG7sSDDvSB0aGF5IHRow7RuZyB0aW4ga2jDtG5nIGjhu5cgdHLhu6M8L3NwYW4+PC9zcGFuPjwvc3Bhbj48L3NwYW4+PC9kaXY+'),
(10, 4, 'Acc Liên Minh Giá Rẻ', 'SHOW', 'http://localhost/CMSNT/SHOPNICKV1/assets/storage/images/groups_36IDLRPHTS7W.png', ''),
(11, 4, 'THỬ VẬN MAY LIÊN MINH 60K', 'SHOW', 'http://localhost/CMSNT/SHOPNICKV1/assets/storage/images/groups_3ZEP9IK52CDW.png', 'PGgxIGNsYXNzPSJhbGVydC1oZWFkaW5nIiBzdHlsZT0ibWFyZ2luOiAxMHB4IDBweDsgZm9udC1mYW1pbHk6ICZxdW90O1JvYm90byBDb25kZW5zZWQmcXVvdDssIHNhbnMtc2VyaWY7IGxpbmUtaGVpZ2h0OiAxLjE7IGNvbG9yOiByZ2IoNjMsIDY4LCA3NCk7IGZvbnQtc2l6ZTogMjJweDsiPlRo4butIHbhuq1uIG1heSBsacOqbiBtaW5oIDYwazwvaDE+PHAgc3R5bGU9Im1hcmdpbi1yaWdodDogMHB4OyBtYXJnaW4tYm90dG9tOiAwcHg7IG1hcmdpbi1sZWZ0OiAwcHg7IGNvbG9yOiByZ2IoNTAsIDEyMiwgMjEzKTsgZm9udC1mYW1pbHk6ICZxdW90O1JvYm90byBDb25kZW5zZWQmcXVvdDssIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTdweDsiPjwvcD48dWwgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBweDsgY29sb3I6IHJnYig1MCwgMTIyLCAyMTMpOyBmb250LWZhbWlseTogJnF1b3Q7Um9ib3RvIENvbmRlbnNlZCZxdW90Oywgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxN3B4OyI+PGxpPkdhbWUmbmJzcDs8c3BhbiBzdHlsZT0iZm9udC13ZWlnaHQ6IDcwMDsiPjxhIGhyZWY9Imh0dHBzOi8vbGllbm1pbmguZ2FyZW5hLnZuLyIgdGFyZ2V0PSJfYmxhbmsiIHN0eWxlPSJjb2xvcjogcmdiKDYzLCA2OCwgNzQpOyB0cmFuc2l0aW9uOiBiYWNrIDAuMnMgZWFzZS1vdXQgMHM7IG91dGxpbmU6IG5vbmUgIWltcG9ydGFudDsiPkxJw4pOIE1JTkggSFVZ4buATiBUSE/huqBJPC9hPjwvc3Bhbj4mbmJzcDtkbyZuYnNwOzxhIGhyZWY9Imh0dHBzOi8vd3d3LmdhcmVuYS52bi8iIHRhcmdldD0iX2JsYW5rIiBzdHlsZT0iY29sb3I6IHJnYig2MywgNjgsIDc0KTsgdHJhbnNpdGlvbjogYmFjayAwLjJzIGVhc2Utb3V0IDBzOyBvdXRsaW5lOiBub25lICFpbXBvcnRhbnQ7Ij48c3BhbiBzdHlsZT0iZm9udC13ZWlnaHQ6IDcwMDsiPkdBUkVOQTwvc3Bhbj48L2E+Jm5ic3A7cGjDoXQgaMOgbmggdOG6oWkgVmnhu4d0IE5hbS48L2xpPjxsaT48c3BhbiBzdHlsZT0iZm9udC13ZWlnaHQ6IDcwMDsiPk5nb8OgaSZuYnNwOzxhIGhyZWY9Imh0dHBzOi8vbmljay52bi9nYXJlbmEvbGllbi1taW5oIiB0YXJnZXQ9Il9ibGFuayIgc3R5bGU9ImNvbG9yOiByZ2IoNjMsIDY4LCA3NCk7IHRyYW5zaXRpb246IGJhY2sgMC4ycyBlYXNlLW91dCAwczsgb3V0bGluZTogbm9uZSAhaW1wb3J0YW50OyI+V2ViIE11YSBCw6FuIE5pY2sgTEnDik4gTUlOSCZuYnNwO1VZIFTDjU4gLSBHScOBIFLhuro8L2E+PC9zcGFuPiZuYnNwO2Phu6dhPHNwYW4gc3R5bGU9ImZvbnQtd2VpZ2h0OiA3MDA7Ij4mbmJzcDstJm5ic3A7PC9zcGFuPjxzcGFuIHN0eWxlPSJmb250LXdlaWdodDogNzAwOyI+PGEgaHJlZj0iaHR0cHM6Ly9uaWNrLnZuL2dhcmVuYS9saWVuLW1pbmgiIHRhcmdldD0iX2JsYW5rIiBzdHlsZT0iY29sb3I6IHJnYig2MywgNjgsIDc0KTsgdHJhbnNpdGlvbjogYmFjayAwLjJzIGVhc2Utb3V0IDBzOyBvdXRsaW5lOiBub25lICFpbXBvcnRhbnQ7Ij5TaG9wIGLDoW4gYWNjIC0gdMOgaSBraG/huqNuIExNSFQgVklQPC9hPjwvc3Bhbj4uPC9saT48bGk+U2hvcCBjw7JuIG3hu58gdGjDqm0gdMOtbmggbsSDbmcmbmJzcDs8YSBocmVmPSJodHRwczovL25pY2sudm4vZ2FyZW5hL2xpZW4tbWluaC1yYW5kb20tc28tY2FwIiB0YXJnZXQ9Il9ibGFuayIgc3R5bGU9ImNvbG9yOiByZ2IoNjMsIDY4LCA3NCk7IHRyYW5zaXRpb246IGJhY2sgMC4ycyBlYXNlLW91dCAwczsgb3V0bGluZTogbm9uZSAhaW1wb3J0YW50OyI+PHNwYW4gc3R5bGU9ImZvbnQtd2VpZ2h0OiA3MDA7Ij5UaOG7rSB24bqtbiBtYXkmbmJzcDtsacOqbiBtaW5oPC9zcGFuPjwvYT4mbmJzcDstJm5ic3A7PGEgaHJlZj0iaHR0cHM6Ly9uaWNrLnZuL2dhcmVuYS9saWVuLW1pbmgtcmFuZG9tLXRydW5nLWNhcCIgdGFyZ2V0PSJfYmxhbmsiIHN0eWxlPSJjb2xvcjogcmdiKDYzLCA2OCwgNzQpOyB0cmFuc2l0aW9uOiBiYWNrIDAuMnMgZWFzZS1vdXQgMHM7IG91dGxpbmU6IG5vbmUgIWltcG9ydGFudDsiPjxzcGFuIHN0eWxlPSJmb250LXdlaWdodDogNzAwOyI+QsOhbiBhY2MgbGnDqm4gbWluaCZuYnNwO3JhbmRvbTwvc3Bhbj48L2E+LiBjaOG7iSB04burIDEyayAtIDE4ayAtNjBrIHbDoCBy4bqldCBuaGnhu4F1IGThu4tjaCB24bulIGtow6FjIHbhu4EmbmJzcDs8c3BhbiBzdHlsZT0iZm9udC13ZWlnaHQ6IDcwMDsiPjxhIGhyZWY9Imh0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3VzZXIvR2FyZW5hVmlldG5hbSIgdGFyZ2V0PSJfYmxhbmsiIHN0eWxlPSJjb2xvcjogcmdiKDYzLCA2OCwgNzQpOyB0cmFuc2l0aW9uOiBiYWNrIDAuMnMgZWFzZS1vdXQgMHM7IG91dGxpbmU6IG5vbmUgIWltcG9ydGFudDsiPmdhbWUgTDwvYT48L3NwYW4+PGEgaHJlZj0iaHR0cHM6Ly93d3cueW91dHViZS5jb20vdXNlci9HYXJlbmFWaWV0bmFtIiB0YXJnZXQ9Il9ibGFuayIgc3R5bGU9ImNvbG9yOiByZ2IoNjMsIDY4LCA3NCk7IHRyYW5zaXRpb246IGJhY2sgMC4ycyBlYXNlLW91dCAwczsgb3V0bGluZTogbm9uZSAhaW1wb3J0YW50OyI+PHNwYW4gc3R5bGU9ImZvbnQtd2VpZ2h0OiA3MDA7Ij5PTDwvc3Bhbj48L2E+PC9saT48L3VsPg==');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_caythue`
--

CREATE TABLE `groups_caythue` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups_caythue`
--

INSERT INTO `groups_caythue` (`id`, `category`, `title`, `display`, `money`) VALUES
(12, 7, 'Cày 100k cash', 'SHOW', 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `request_id` varchar(64) DEFAULT NULL,
  `tranId` text DEFAULT NULL,
  `partnerId` text DEFAULT NULL,
  `partnerName` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `status` varchar(32) DEFAULT 'xuly'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `key`, `value`) VALUES
(1, 'tenweb', 'SHOP NICK'),
(2, 'mota', ''),
(3, 'tukhoa', ''),
(4, 'logo', 'https://i.imgur.com/djvxQX6.png'),
(5, 'email', ''),
(6, 'pass_email', ''),
(11, 'noidung_naptien', 'NAPTIEN_'),
(12, 'thongbao', 'Thông Báo Website<br>'),
(13, 'anhbia', 'https://lienquanmobile.vn/assets/img/banner.jpg'),
(14, 'favicon', 'https://i.imgur.com/61P2d1U.jpg'),
(17, 'baotri', 'ON'),
(18, 'chinhsach', '<p>BẰNG VIỆC SỬ DỤNG C&Aacute;C DỊCH VỤ HOẶC MỞ MỘT T&Agrave;I KHOẢN, BẠN CHO BIẾT RẰNG BẠN CHẤP NHẬN, KH&Ocirc;NG R&Uacute;T LẠI, C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG SỬ DỤNG C&Aacute;C DỊCH VỤ CỦA CH&Uacute;NG T&Ocirc;I HAY TRUY CẬP TRANG WEB. NẾU BẠN DƯỚI 18 TUỔI HOẶC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot;PH&Ugrave; HỢP Ở NƠI BẠN SỐNG, BẠN PHẢI XIN PH&Eacute;P CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P ĐỂ MỞ MỘT T&Agrave;I KHOẢN V&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P PHẢI ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG BIẾT BẠN C&Oacute; THUỘC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot; Ở NƠI BẠN SỐNG HAY KH&Ocirc;NG, HOẶC KH&Ocirc;NG HIỂU PHẦN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG TẠO T&Agrave;I KHOẢN CHO ĐẾN KHI BẠN Đ&Atilde; NHỜ CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA BẠN GI&Uacute;P ĐỠ. NẾU BẠN L&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA MỘT TRẺ VỊ TH&Agrave;NH NI&Ecirc;N MUỐN TẠO MỘT T&Agrave;I KHOẢN, BẠN PHẢI CHẤP NHẬN C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y THAY MẶT CHO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; V&Agrave; BẠN SẼ CHỊU TR&Aacute;CH NHIỆM ĐỐI VỚI TẤT CẢ HOẠT ĐỘNG SỬ DỤNG T&Agrave;I KHOẢN HAY C&Aacute;C DỊCH VỤ, BAO GỒM C&Aacute;C GIAO DỊCH MUA H&Agrave;NG DO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N THỰC HIỆN, CHO D&Ugrave; T&Agrave;I KHOẢN CỦA TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; ĐƯỢC MỞ V&Agrave;O L&Uacute;C N&Agrave;Y HAY ĐƯỢC TẠO SAU N&Agrave;Y V&Agrave; CHO D&Ugrave; TRẺ VỊ TH&Agrave;NH NI&Ecirc;N C&Oacute; ĐƯỢC BẠN GI&Aacute;M S&Aacute;T TRONG GIAO DỊCH MUA H&Agrave;NG Đ&Oacute; HAY KH&Ocirc;NG.</p>\r\n'),
(27, 'min_ruttien', '100000'),
(28, 'ck_con', '3'),
(29, 'phi_chuyentien', '500'),
(30, 'status_chuyentien', 'ON'),
(31, 'hotline', '0812665001'),
(32, 'facebook', 'https://www.facebook.com/phamhoangtuan.ytb/'),
(33, 'theme_color', '#01578B'),
(34, 'modal_thongbao', ''),
(42, 'api_bank', ''),
(43, 'status_napbank', 'OFF'),
(44, 'status_demo', 'OFF'),
(45, 'api_card', ''),
(46, 'luuy_naptien', '<ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; border: 0px; list-style-position: inside; color: rgb(51, 51, 51); font-family: roboto, Arial, Tahoma, sans-serif, arial, Helvetica; font-size: 14px;\"><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Hệ thống xử lý 5s 1 thẻ.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Vui lòng gửi đúng mệnh giá, sai mệnh giá thực nhận mệnh giá bé nhất.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Ví dụ mệnh giá thực là 100k, quý khách nạp 100k thực nhận 100k.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Ví dụ mệnh giá thực là 100k quý khách nạp 50k thực nhận 50k.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Mệnh giá 10k, 20k, 30k tính thêm 3% phí.</li></ul>'),
(47, 'id_video_youtube', 'Zzn9-ATB9aU'),
(48, 'ck_bank', '20'),
(49, 'luuy_napbank', '<p><span class=\"text-big\" style=\"color: rgb(153, 77, 230);\"><strong>* Nạp ATM/Momo ( Được Cộng Thêm 25%)</strong></span></p><p><span class=\"text-big\" style=\"color: rgb(230, 153, 77);\"><strong>Ví Dụ:</strong></span></p><p><span class=\"text-big\" style=\"color: rgb(230, 77, 77);\"><strong>100k ATM/Momo</strong></span><span class=\"text-big\"><strong> = </strong></span><span class=\"text-big\" style=\"color: rgb(230, 77, 77);\"><strong>134k Trên Shop</strong></span></p><p><span class=\"text-big\" style=\"color: rgb(230, 77, 77);\"><strong>500k ATM/Momo</strong></span><span class=\"text-big\"> = </span><span class=\"text-big\" style=\"color: rgb(230, 77, 77);\"><strong>667k Trên Shop</strong></span></p>'),
(50, 'check_time_cron', '0'),
(51, 'api_momo', ''),
(52, 'stk_bank', ''),
(53, 'mk_bank', ''),
(54, 'check_time_cron_bank', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_caythue`
--

CREATE TABLE `orders_caythue` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dichvu` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `tk` varchar(255) NOT NULL,
  `mk` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `money` int(11) NOT NULL DEFAULT 0,
  `level` varchar(255) DEFAULT NULL,
  `banned` int(11) NOT NULL DEFAULT 0,
  `createdate` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `daily` int(11) DEFAULT 0,
  `otp` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `chietkhau` float DEFAULT 0,
  `time` varchar(255) DEFAULT NULL,
  `chitieu` int(11) NOT NULL DEFAULT 0,
  `total_money` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`, `money`, `level`, `banned`, `createdate`, `email`, `ref`, `daily`, `otp`, `ip`, `chietkhau`, `time`, `chitieu`, `total_money`) VALUES
(1, 'tuanori', 'tuanori', 'zVGgArmeMsiwTPoQuRFCDOWqcdaSnBpkILUxKhYfjyEltZXbJvNH', 0, 'admin', 0, '2022-10-06 20:14:53', '', NULL, 0, '', '171.234.13.234', 0, '1665062093', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_caythue`
--
ALTER TABLE `category_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `dongtien`
--
ALTER TABLE `dongtien`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_caythue`
--
ALTER TABLE `groups_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_caythue`
--
ALTER TABLE `orders_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category_caythue`
--
ALTER TABLE `category_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dongtien`
--
ALTER TABLE `dongtien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `groups_caythue`
--
ALTER TABLE `groups_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `orders_caythue`
--
ALTER TABLE `orders_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
