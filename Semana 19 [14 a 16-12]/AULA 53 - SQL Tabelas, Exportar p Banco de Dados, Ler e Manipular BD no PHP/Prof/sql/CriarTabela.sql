--
-- Criação da tabela tbcontato, onde o campo idContato é a chave primária com autoincrementação.
--

CREATE TABLE `tbcontato` (
  `idContato` INT PRIMARY KEY AUTO_INCREMENT,
  `vchNome` varchar(50) NOT NULL,
  `vchEmail` varchar(50) NOT NULL,
  `vchTelefone` varchar(15) NOT NULL,
  `txtMensagem` text NOT NULL,
  `dteDataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;