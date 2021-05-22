-- MySQL Workbench Synchronization
-- Generated: 2021-05-21 18:50
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Daniel

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `DBSitio` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

CREATE TABLE IF NOT EXISTS `DBSitio`.`Uuarios` (
  `nombreUsuario` VARCHAR(25) NOT NULL,
  `primerNombre` VARCHAR(30) NOT NULL,
  `segundoNombre` VARCHAR(30) NULL DEFAULT NULL,
  `primerApellido` VARCHAR(30) NOT NULL,
  `segundoApellido` VARCHAR(30) NULL DEFAULT NULL,
  `email` VARCHAR(70) NOT NULL,
  `Cedula` VARCHAR(15) NOT NULL,
  `celular` VARCHAR(11) NULL DEFAULT NULL,
  `direccion` VARCHAR(250) NULL DEFAULT NULL,
  `perfilUsuario` INT(11) NOT NULL,
  `Clave` VARCHAR(45) NOT NULL,
  `usuarioCreacion` VARCHAR(15) NOT NULL,
  `fechaUsuarioCreacion` DATETIME NOT NULL,
  `usuarioModificacion` VARCHAR(15) NULL DEFAULT NULL,
  `fechaUsuarioModificacion` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`nombreUsuario`),
  INDEX `indx_identificacion_us` (`Cedula` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `DBSitio`.`Productos` (
  `codigoProducto` VARCHAR(15) NOT NULL,
  `NombreProducto` VARCHAR(150) NOT NULL,
  `DescripcionProducto` VARCHAR(255) NULL DEFAULT NULL,
  `UnidadMedida` VARCHAR(45) NOT NULL,
  `marcaProducto` VARCHAR(45) NULL DEFAULT NULL,
  `precioActual` INT(11) NOT NULL DEFAULT 0,
  `cantidadActual` FLOAT(11) NOT NULL DEFAULT 0,
  `productoCreacion` VARCHAR(15) NOT NULL,
  `fechaProductoCreacion` DATETIME NOT NULL,
  `productoModificacion` VARCHAR(15) NULL DEFAULT NULL,
  `fechaProductoModificacion` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`codigoProducto`),
  INDEX `indx_nombre_producto` (`NombreProducto` ASC)  )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `DBSitio`.`Terceros` (
  `idTerceros` VARCHAR(25) NOT NULL,
  `nombreTercero` VARCHAR(255) NOT NULL,
  `emailTercero` VARCHAR(70) NOT NULL,
  `celularTercero` VARCHAR(15) NULL DEFAULT NULL,
  `telefonoTercero` VARCHAR(25) NULL DEFAULT NULL,
  `direccionTercero` VARCHAR(255) NULL DEFAULT NULL,
  `descripcionTercero` VARCHAR(255) NULL DEFAULT NULL,
  `contactoTercero` VARCHAR(100) NULL DEFAULT NULL,
  `estadoTercero` BIT(1) NOT NULL,
  `esCliente` BIT(1) NOT NULL,
  `esProveedor` BIT(1) NOT NULL,
  `terceroCreacion` VARCHAR(15) NOT NULL,
  `fechaProductoCreacion` DATETIME NOT NULL,
  `terceroModificacion` VARCHAR(15) NULL DEFAULT NULL,
  `fechaTerceroModificacion` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idTerceros`),
  INDEX `indx_nombre_tercero` (`nombreTercero` ASC)  ,
  INDEX `indx_descripcion_tercero` (`descripcionTercero` ASC)  ,
  INDEX `indx_contacto_tercero` (`contactoTercero` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `DBSitio`.`compraVenta` (
  `idcompraVenta` INT(11) NOT NULL AUTO_INCREMENT,
  `fechaCompraVenta` DATETIME NOT NULL,
  `conceptoCompraVenta` VARCHAR(255) NOT NULL,
  `tipoPago` TINYINT(1) NOT NULL,
  `tipoOperacion` TINYINT(1) NOT NULL,
  `estadoCompraVenta` BIT(1) NOT NULL,
  `compraVentaCreacion` VARCHAR(15) NOT NULL,
  `fechacompraVentaCreacion` DATETIME NOT NULL,
  `compraVentaModificacion` VARCHAR(15) NULL DEFAULT NULL,
  `fechacompraVentaModificacion` DATETIME NULL DEFAULT NULL,
  `Terceros_idTerceros` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idcompraVenta`),
  INDEX `indx_fecha_compraventa` (`fechaCompraVenta` ASC) ,
  INDEX `fk_compraVenta_Terceros1_idx` (`Terceros_idTerceros` ASC) ,
  CONSTRAINT `fk_compraVenta_Terceros1`
    FOREIGN KEY (`Terceros_idTerceros`)
    REFERENCES `DBSitio`.`Terceros` (`idTerceros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `DBSitio`.`ProductosPorCompraVenta` (
  `IdProductosPorCompraVenta` INT(11) NOT NULL,
  `codigoProducto` VARCHAR(15) NOT NULL,
  `idcompraVenta` INT(11) NULL DEFAULT NULL,
  `EstadoProductosPorCompraVenta` BIT(1) NULL DEFAULT NULL,
  `FechaCracion` DATETIME NULL DEFAULT NULL,
  `usuarioCreacion` VARCHAR(15) NOT NULL,
  `fechaUsuarioCreacion` DATETIME NOT NULL,
  `usuarioModificacion` VARCHAR(15) NULL DEFAULT NULL,
  `fechaUsuarioModificacion` DATETIME NULL DEFAULT NULL,
  `Cantida` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdProductosPorCompraVenta`),
  INDEX `fk_compraVenta_has_Productos_Productos1_idx` (`codigoProducto` ASC) ,
  INDEX `fk_compraVenta_has_Productos_compraVenta_idx` (`IdProductosPorCompraVenta` ASC) ,
  CONSTRAINT `fk_compraVenta_has_Productos_compraVenta`
    FOREIGN KEY (`IdProductosPorCompraVenta`)
    REFERENCES `DBSitio`.`compraVenta` (`idcompraVenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compraVenta_has_Productos_Productos1`
    FOREIGN KEY (`codigoProducto`)
    REFERENCES `DBSitio`.`Productos` (`codigoProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
