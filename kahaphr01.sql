-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 08 月 14 日 14:58
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `kahaphr01`
--

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `sys_member`
--

CREATE TABLE `sys_member` (
  `iId` int(10) UNSIGNED NOT NULL,
  `vName` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vGender` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iBirthday` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vEmail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vContact` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vAddress` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iCreateTime` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iUpdateTime` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bDel` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `sys_member`
--

INSERT INTO `sys_member` (`iId`, `vName`, `vGender`, `iBirthday`, `vEmail`, `vContact`, `vAddress`, `iCreateTime`, `iUpdateTime`, `bDel`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1534247658', '1534247658', '0'),
(2, '222', '22', '33091200', '2222', '', '', '1534250479', '1534250479', '0'),
(3, '1', '1', '1', '1', '1', '1', '1534247791', '1534249064', '1'),
(4, '1', '1', '1', '1', '1', '1', '1534247826', '1534249078', '1'),
(5, '1', '1', '1', '1', '1', '1', '1534247838', '1534250273', '1'),
(6, '66', '666', '0', '1666666', '66', '6666666666666666', '1534250269', '1534250269', '0'),
(7, '22', '22', '22', '222', '22', '222', '1534248138', '1534248598', '1'),
(8, '22', '22', '22', '222', '22', '222', '1534248346', '1534248588', '1'),
(9, '22', '22', '22', '222', '22', '222', '1534248364', '1534248484', '1'),
(10, '2', '2', '2', '2', '2', '2', '1534249076', '1534249076', '0'),
(11, '555', '555', '0', '5555', '55', '55555', '1534250317', '1534251437', '1'),
(12, '5555', '555', '0', '55555', '555555', '55', '1534250327', '1534250327', '0'),
(13, '6666', '666', '1534464000', '66', '66', '6666', '1534250338', '1534250338', '0');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sys_member`
--
ALTER TABLE `sys_member`
  ADD PRIMARY KEY (`iId`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `sys_member`
--
ALTER TABLE `sys_member`
  MODIFY `iId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
