CREATE TABLE `star_rating` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `star_rating` (`product_id`, `user_id`, `rating`) VALUES
(1, 900, 1),
(1, 901, 4),
(1, 902, 5),
(1, 903, 3),
(1, 904, 4);

ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`product_id`,`user_id`);