-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema TiendaFromSoftware
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema TiendaFromSoftware
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `TiendaFromSoftware` DEFAULT CHARACTER SET utf8 ;
USE `TiendaFromSoftware` ;

-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Usuarios` (
  `idUsuario` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `direccionEnvio` VARCHAR(45) NULL,
  `fechaRegistro` DATE NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Proveedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Proveedores` (
  `idProveedor` INT NOT NULL AUTO_INCREMENT,
  `nombreProveedor` VARCHAR(255) NULL,
  `contacto` VARCHAR(255) NULL,
  `direccion` VARCHAR(255) NULL,
  `paginaWeb` VARCHAR(255) NULL,
  PRIMARY KEY (`idProveedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Productos` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `tipoProducto` VARCHAR(45) NULL,
  `Proveedores_idProveedor` INT NOT NULL,
  `descripcion` TEXT NULL,
  `precio` DECIMAL NULL,
  `stock` INT NULL,
  PRIMARY KEY (`idProducto`, `Proveedores_idProveedor`),
  INDEX `fk_Productos_Proveedores1_idx` (`Proveedores_idProveedor` ASC) ,
  CONSTRAINT `fk_Productos_Proveedores1`
    FOREIGN KEY (`Proveedores_idProveedor`)
    REFERENCES `TiendaFromSoftware`.`Proveedores` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Reseñas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Reseñas` (
  `idResena` INT NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuario` INT NOT NULL,
  `Productos_idProducto` INT NOT NULL,
  `puntuacion` INT NULL,
  `comentario` TEXT NULL,
  `fechaResena` DATE NULL,
  PRIMARY KEY (`idResena`, `Usuarios_idUsuario`, `Productos_idProducto`),
  INDEX `fk_Reseña_Usuario1_idx` (`Usuarios_idUsuario` ASC) ,
  INDEX `fk_Reseñas_Juegos1_idx` (`Productos_idProducto` ASC) ,
  CONSTRAINT `fk_Reseña_Usuario1`
    FOREIGN KEY (`Usuarios_idUsuario`)
    REFERENCES `TiendaFromSoftware`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reseñas_Juegos1`
    FOREIGN KEY (`Productos_idProducto`)
    REFERENCES `TiendaFromSoftware`.`Productos` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Pedidos` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuario` INT NOT NULL,
  `fechaPedido` DATE NULL,
  `total` DECIMAL NULL,
  `estado` VARCHAR(50) NULL,
  PRIMARY KEY (`idPedido`, `Usuarios_idUsuario`),
  INDEX `fk_Pedido_Usuario_idx` (`Usuarios_idUsuario` ASC) ,
  CONSTRAINT `fk_Pedido_Usuario`
    FOREIGN KEY (`Usuarios_idUsuario`)
    REFERENCES `TiendaFromSoftware`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Ofertas_Especiales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Ofertas_Especiales` (
  `idOferta_Especial` INT NOT NULL AUTO_INCREMENT,
  `nombreOferta` VARCHAR(255) NULL,
  `descripcion` TEXT NULL,
  `descuento` DECIMAL NULL,
  `fechaInicio` DATE NULL,
  `fechaFin` DATE NULL,
  PRIMARY KEY (`idOferta_Especial`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Tickets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Tickets` (
  `idTicket` INT NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuario` INT NOT NULL,
  `asunto` VARCHAR(255) NULL,
  `descripcion` TEXT NULL,
  `estado` VARCHAR(50) NULL,
  `fechaCreacion` DATE NULL,
  PRIMARY KEY (`idTicket`, `Usuarios_idUsuario`),
  INDEX `fk_Ticket_Usuario1_idx` (`Usuarios_idUsuario` ASC) ,
  CONSTRAINT `fk_Ticket_Usuario1`
    FOREIGN KEY (`Usuarios_idUsuario`)
    REFERENCES `TiendaFromSoftware`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Detalles_Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Detalles_Pedido` (
  `Productos_idProducto` INT NOT NULL,
  `Pedidos_idPedido` INT NOT NULL,
  `Pedidos_Usuarios_idUsuario` INT NOT NULL,
  `cantidad` INT NULL,
  `precioPorUnidad` DECIMAL NULL,
  `descuento` DECIMAL NULL,
  PRIMARY KEY (`Productos_idProducto`, `Pedidos_idPedido`, `Pedidos_Usuarios_idUsuario`),
  INDEX `fk_Juegos_has_Pedidos_Pedidos1_idx` (`Pedidos_idPedido` ASC, `Pedidos_Usuarios_idUsuario` ASC) ,
  INDEX `fk_Juegos_has_Pedidos_Juegos1_idx` (`Productos_idProducto` ASC) ,
  CONSTRAINT `fk_Juegos_has_Pedidos_Juegos1`
    FOREIGN KEY (`Productos_idProducto`)
    REFERENCES `TiendaFromSoftware`.`Productos` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Juegos_has_Pedidos_Pedidos1`
    FOREIGN KEY (`Pedidos_idPedido` , `Pedidos_Usuarios_idUsuario`)
    REFERENCES `TiendaFromSoftware`.`Pedidos` (`idPedido` , `Usuarios_idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TiendaFromSoftware`.`Productos_has_Ofertas_Especiales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TiendaFromSoftware`.`Productos_has_Ofertas_Especiales` (
  `Productos_idProducto` INT NOT NULL,
  `Productos_Proveedores_idProveedor` INT NOT NULL,
  `Ofertas_Especiales_idOferta_Especial` INT NOT NULL,
  PRIMARY KEY (`Productos_idProducto`, `Productos_Proveedores_idProveedor`, `Ofertas_Especiales_idOferta_Especial`),
  INDEX `fk_Productos_has_Ofertas_Especiales_Ofertas_Especiales1_idx` (`Ofertas_Especiales_idOferta_Especial` ASC) ,
  INDEX `fk_Productos_has_Ofertas_Especiales_Productos1_idx` (`Productos_idProducto` ASC, `Productos_Proveedores_idProveedor` ASC) ,
  CONSTRAINT `fk_Productos_has_Ofertas_Especiales_Productos1`
    FOREIGN KEY (`Productos_idProducto` , `Productos_Proveedores_idProveedor`)
    REFERENCES `TiendaFromSoftware`.`Productos` (`idProducto` , `Proveedores_idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Productos_has_Ofertas_Especiales_Ofertas_Especiales1`
    FOREIGN KEY (`Ofertas_Especiales_idOferta_Especial`)
    REFERENCES `TiendaFromSoftware`.`Ofertas_Especiales` (`idOferta_Especial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
