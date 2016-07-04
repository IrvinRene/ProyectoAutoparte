CREATE TABLE IF NOT EXISTS `procesos` (
  `id` int(11) NOT NULL,
  `proceso` varchar(7) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1; 

INSERT INTO `procesos` (`id`, `proceso`, `created_at`, `updated_at`) VALUES
(1, 'Entrada', '', ''),
(2, 'Salida', '', '');

 ADD PRIMARY KEY (`id`);


ALTER TABLE `procesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
