CREATE TABLE `bill` (
  `bill_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '帳單編號',
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '購買人',
  `bill_total` mediumint(8) UNSIGNED NOT NULL COMMENT '總金額',
  `bill_date` datetime NOT NULL COMMENT '購買日期',
  `bill_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '處理狀態'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO `bill` (`bill_sn`, `user_sn`, `bill_total`, `bill_date`, `bill_status`) VALUES
(2, 1, 350, '2020-11-10 06:59:37', NULL);



CREATE TABLE `bill_detail` (
  `bill_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '帳單編號',
  `goods_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '商品編號',
  `goods_amount` tinyint(3) UNSIGNED NOT NULL COMMENT '購買數量',
  `goods_total` mediumint(8) UNSIGNED NOT NULL COMMENT '小計'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `bill_detail` (`bill_sn`, `goods_sn`, `goods_amount`, `goods_total`) VALUES
(2, 8, 1, 350);



CREATE TABLE `goods` (
  `goods_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '商品編號',
  `goods_title` varchar(255) NOT NULL COMMENT '商品名稱',
  `goods_content` text NOT NULL COMMENT '商品說明',
  `goods_price` mediumint(8) UNSIGNED NOT NULL COMMENT '商品價錢',
  `goods_counter` smallint(5) UNSIGNED NOT NULL COMMENT '人氣',
  `goods_date` datetime NOT NULL COMMENT '上架日期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO `goods` (`goods_sn`, `goods_title`, `goods_content`, `goods_price`, `goods_counter`, `goods_date`) VALUES
(2, '想把餘生的溫柔留給你', '', 350, 2, '2020-11-10 05:39:04'),
(7, '山羌圖書館', '', 350, 2, '2020-11-10 05:47:19'),
(4, '二常公園', '', 350, 1, '2020-11-10 05:43:58'),
(6, '與自己和好如初', '', 350, 1, '2020-11-10 05:46:08'),
(8, '我討厭我自己', '', 350, 3, '2020-11-10 05:48:48');



CREATE TABLE `users` (
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '使用者編號',
  `user_name` varchar(255) NOT NULL COMMENT '使用者姓名',
  `user_id` varchar(255) NOT NULL COMMENT '使用者帳號',
  `user_passwd` varchar(255) NOT NULL COMMENT '使用者密碼',
  `user_email` varchar(255) NOT NULL COMMENT '使用者信箱',
  `user_sex` enum('先生','女士') NOT NULL COMMENT '使用者性別',
  `user_tel` varchar(255) NOT NULL COMMENT '使用者電話',
  `user_zip` varchar(255) NOT NULL COMMENT '使用者郵遞區號',
  `user_county` varchar(255) NOT NULL COMMENT '使用者縣市',
  `user_district` varchar(255) NOT NULL COMMENT '使用者鄉鎮市區',
  `user_address` varchar(255) NOT NULL COMMENT '使用者地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO `users` (`user_sn`, `user_name`, `user_id`, `user_passwd`, `user_email`, `user_sex`, `user_tel`, `user_zip`, `user_county`, `user_district`, `user_address`) VALUES
(1, 'rrong', 'rrong00', '$2y$10$aPUb56Qnafvz.HJbgu4md.SAXMTX66JG8kHWNdz8xjYYb72/aOBNe', 'rrong0000@gmail.com', '先生', '0968364163', '745', '台南市', '安定區', '安加里161-1號');


ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_sn`);


ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`bill_sn`,`goods_sn`);


ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_sn`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_sn`),
  ADD UNIQUE KEY `user_id` (`user_id`);


ALTER TABLE `bill`
  MODIFY `bill_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '帳單編號', AUTO_INCREMENT=3;


ALTER TABLE `goods`
  MODIFY `goods_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品編號', AUTO_INCREMENT=9;


ALTER TABLE `users`
  MODIFY `user_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '使用者編號', AUTO_INCREMENT=2;
COMMIT;

