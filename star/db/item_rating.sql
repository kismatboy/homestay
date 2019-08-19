--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `ratingNumber`, `title`, `comments`, `created`, `modified`, `status`) VALUES
(14, 12345678, 1, 2, 'its awesome', 'It''s awesome!!!', '2018-08-19 09:13:01', '2018-08-19 09:13:01', 1),
(15, 12345678, 2, 5, 'Nice product', 'Really quality product!', '2018-08-19 09:13:37', '2018-08-19 09:13:37', 1),
(16, 12345678, 3, 1, 'best buy', 'its''s best but item.', '2018-08-19 09:14:19', '2018-08-19 09:14:19', 1),
(17, 12345678, 4, 1, 'super awesome ', 'i think its supper products', '2018-08-19 09:18:00', '2018-08-19 09:18:00', 1),
(22, 12345679, 5, 1, 'adada', 'daDad', '2019-01-20 17:00:58', '2019-01-20 17:00:58', 1),
(23, 12345678, 5, 5, 'Nice product', 'this is nice!', '2019-01-20 17:01:37', '2019-01-20 17:01:37', 1),
(24, 12345679, 3, 1, 'really nice', 'Good!', '2019-01-20 21:06:48', '2019-01-20 21:06:48', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT;
