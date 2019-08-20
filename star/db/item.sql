CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `item` (`id`, `name`, `description`, `price`, `image`, `created`, `modified`) VALUES
(12345678, 'iPhone 6s (Space Grey)', '<ul style="margin:0px;padding:15px;">\r\n				<li>32 GB ROM |</li>\r\n				<li>11.94 cm (4.7 inch) Retina HD Display</li>\r\n				<li>12MP Rear Camera | 5MP Front Camera</li>\r\n				<li>Apple A9 64-bit processor and Embedded M9 Motion Co-processor</li>\r\n				<li>Brand Warranty of 1 Year</li>\r\n			</ul>	', 34000, 'apple-iphone-6s.jpeg', '0000-00-00 00:00:00', '2019-01-19 14:13:04'),
(12345679, 'iPhone 6s (Silver)', '<ul style="margin:0px;padding:15px;">\r\n				<li>32 GB ROM |</li>\r\n				<li>11.94 cm (4.7 inch) Retina HD Display</li>\r\n				<li>12MP Rear Camera | 5MP Front Camera</li>\r\n				<li>Apple A9 64-bit processor and Embedded M9 Motion Co-processor</li>\r\n				<li>Brand Warranty of 1 Year</li>\r\n			</ul>	', 30000, 'apple-iphone-6.jpeg', '0000-00-00 00:00:00', '2019-01-19 14:13:04');


ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
