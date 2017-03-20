SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `petshop` ;

CREATE SCHEMA IF NOT EXISTS `petshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci ;
USE `petshop` ;

-- -----------------------------------------------------
-- Create database
-- -----------------------------------------------------

DROP USER `sispetshop`@`localhost`;
CREATE USER `sispetshop`@`localhost` identified by "123456";
GRANT ALL PRIVILEGES ON petshop.* TO `sispetshop`@`localhost`;
FLUSH PRIVILEGES;


-- ----------------------------------------------------
-- Table produtos
-- ----------------------------------------------------
CREATE TABLE IF NOT EXISTS petshop.produtos (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `imagem` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela `produtos`
--
INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`) VALUES
(1, 'Ração', '100.00', 'ração.jpg'),
(2, 'Colera', '20.00', 'colera.jpg'),
(3, 'Carrinho', '200.00', 'carrinho.jpg'),
(4, 'Acessório', '30.00', 'acessorio.jpg'),
(5, 'Assento', '50.00', 'assento.jpg'),
(6, 'Brinquedo', '80.00', 'brinquedo.jpg'),
(7, 'Cama', '120.00', 'cama.jpg'),
(8, 'Corrente', '20.00', 'corrente.jpg'),
(9, 'Osso', '15.00', 'osso.jpg'),
(10, 'Anti pulga', '145.00', 'antiPulga.jpg'),
(11, 'Comedouro', '5.00', 'comedouro.jpg'),
(12, 'Casa', '200.00', 'casa.jpg');


-- -----------------------------------------------------
-- Table `petshop`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`users` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(191) NOT NULL,
  `email` VARCHAR(191) NOT NULL,
  `password` VARCHAR(191) NOT NULL,
  `type` SMALLINT(6) NOT NULL,
  `remember_token` VARCHAR(100) NOT NULL,

  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela `users`
--
INSERT INTO `users` (`id`, `nome`, `email`, `password`, `type`, `remember_token`) VALUES(1, 'administrador', 'admin@admin.com', '123456', 2, 'seqNum1');
INSERT INTO `users` (`id`, `nome`, `email`, `password`, `type`, `remember_token`) VALUES(2, 'operador', 'operad@operad.com', '567890', 3, 'seqNum2');
INSERT INTO `users` (`id`, `nome`, `email`, `password`, `type`, `remember_token`) VALUES(3, 'Maria Jose', 'mariajose@gmail.com', '262902', 1, 'qualquer');
INSERT INTO `users` (`id`, `nome`, `email`, `password`, `type`, `remember_token`) VALUES(4, 'João Maria', 'joaomaria@gmail.com', '769302', 1, 'lembrete');
INSERT INTO `users` (`id`, `nome`, `email`, `password`, `type`, `remember_token`) VALUES(5, 'Jose Joao', 'josejoao@gmail.com', '201957', 1, 'deSempre');


-- -----------------------------------------------------
-- Table `petshop`.`compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`compras` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `users_id` INT(10) NOT NULL,
  `produtos_id` INT(10) NOT NULL,
  `quantidade` SMALLINT(6) NOT NULL,
  `data` DATETIME NOT NULL,
  `created_at` TIMESTAMP DEFAULT now(),
  `updated_at` TIMESTAMP DEFAULT now() ON UPDATE now(),
INDEX `idx_compras_has_users` (`users_id` ASC),
INDEX `idx_compras_has_produtos` (`produtos_id` ASC),
PRIMARY KEY (`id`),
CONSTRAINT `fk_compras_has_users`
  FOREIGN KEY (`users_id`)
  REFERENCES `petshop`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
CONSTRAINT `fk_compras_has_produtos`
  FOREIGN KEY (`produtos_id`)
  REFERENCES `petshop`.`produtos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION)
ENGINE = InnoDB;




ALTER TABLE users AUTO_INCREMENT = 100;
ALTER TABLE produtos AUTO_INCREMENT = 100;
ALTER TABLE compras AUTO_INCREMENT = 100;

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `produtos` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
