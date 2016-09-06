create database slimdb;

CREATE TABLE `slimtable` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `slimtable` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Balakumar', 'Parameswarab', 'balakumar', 'bala123'),
(2, 'Ganesh', 'paramasivam', 'ganesh', 'ganesh123'),
(3, 'Praveen', 'Kumar', 'praveen', '123456'),
(4, 'Guna', 'Sekar', 'guna', '12333'),


ALTER TABLE `slimtable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

