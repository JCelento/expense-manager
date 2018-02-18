CREATE TABLE IF NOT EXISTS `despesas` (
`despesaId` int(8) NOT NULL,
  `user` varchar(55) NOT NULL,
  `despesa` varchar(55) NOT NULL,
  `descDespesa` varchar(255) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

ALTER TABLE `despesas`
 ADD PRIMARY KEY (`despesaId`);

ALTER TABLE `despesas`
MODIFY `despesaId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;