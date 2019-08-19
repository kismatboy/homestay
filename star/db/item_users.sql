--
-- Table structure for table `item_users`
--

CREATE TABLE `item_users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_users`
--

INSERT INTO `item_users` (`userid`, `username`, `password`, `avatar`) VALUES
(1, 'rose', '123', 'user1.jpg'),
(2, 'smith', '123', 'user2.jpg'),
(3, 'adam', '123', 'user3.jpg'),
(4, 'merry', '123', 'user4.jpg'),
(5, 'katrina', '123', 'user5.jpg'),
(6, 'rhodes', '123', 'user6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_users`
--
ALTER TABLE `item_users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_users`
--
ALTER TABLE `item_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
