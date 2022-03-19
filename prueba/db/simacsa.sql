/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50634
Source Host           : localhost:3306
Source Database       : simacsa

Target Server Type    : MYSQL
Target Server Version : 50634
File Encoding         : 65001

Date: 2018-09-10 09:03:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `razonSocial` varchar(100) DEFAULT NULL,
  `rfc` varchar(14) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT 'calle y numero',
  `colonia` varchar(45) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `localidad` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `status` tinyint(255) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'Empresa 1 de Prueba', 'RUBO710306427', 'San Miguel 280', 'ExHAcienda San Francisco', '66632', 'Apodaca', 'Apodaca', 'Nuevo Leon', 'Mexico', '1');
INSERT INTO `clientes` VALUES ('2', 'Empresa 2', 'XXXSSSSSSWQW', 'CAlle 1', 'Centro', '64000', 'Monterrey', 'Monterrey', 'Nuevo Leon', 'Mexico', '1');
INSERT INTO `clientes` VALUES ('3', 'asdasda', 'asdas', 'dasda', 'dasd', 'dasda', 'dasdas', 'dasda', null, 'dasdas', '1');
INSERT INTO `clientes` VALUES ('4', 'xxxxxxx', 'asdasdas', 'dasdasdada', 'dasdasda', 'dasdasda', 'dasdasd', 'dasdasd', '4', 'asdasda', '1');

-- ----------------------------
-- Table structure for egenerales
-- ----------------------------
DROP TABLE IF EXISTS `egenerales`;
CREATE TABLE `egenerales` (
  `idGeneral` int(255) NOT NULL AUTO_INCREMENT,
  `idEmpleado` int(255) DEFAULT NULL,
  `curp` varchar(255) DEFAULT NULL,
  `rfc` varchar(255) DEFAULT NULL,
  `nss` varchar(255) DEFAULT NULL,
  `tSangre` varchar(255) DEFAULT NULL,
  `estadoCivil` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular1` varchar(20) DEFAULT NULL,
  `celular2` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL COMMENT 'Calle y Numero',
  `colonia` varchar(100) DEFAULT NULL,
  `codigoPostal` varchar(6) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `entreCalles` varchar(255) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `nombreE` varchar(255) DEFAULT NULL,
  `parentescoE` varchar(100) DEFAULT NULL,
  `telefonoE` varchar(20) DEFAULT NULL,
  `celularE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idGeneral`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of egenerales
-- ----------------------------

-- ----------------------------
-- Table structure for empleados
-- ----------------------------
DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `idEmpleado` int(255) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `aPaterno` varchar(50) DEFAULT NULL,
  `aMaterno` varchar(50) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `rfc` varchar(14) DEFAULT NULL,
  `nss` varchar(15) DEFAULT NULL,
  `tSangre` varchar(15) DEFAULT NULL,
  `estadoCivil` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `celular1` varchar(20) DEFAULT NULL,
  `celular2` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `codigoPostal` varchar(10) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `entreCalles` varchar(100) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `nombreE` varchar(100) DEFAULT NULL,
  `parentescoE` varchar(100) DEFAULT NULL,
  `telefonoE` varchar(20) DEFAULT NULL,
  `celularE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of empleados
-- ----------------------------
INSERT INTO `empleados` VALUES ('1', 'Abraham ', 'Vera', 'Pérez', '1972-08-02', 'Ingeniería Civil', '1', 'VEPA720218HVZRRB01', 'VEPA720218US5', '68927218153', 'O+', 'Union Libre', 'abraham.vera.perez@gmail.com', '8111653363', '13616016', 'Calle S 2 641', 'Hacienda Santa Isabel', '66612', 'Apodaca', 'Nuevo León', 'Apodaca', 'Mexico', 'E Sexta y E Decima', 'Atrás de tienda de autoservicio Mi Tienda', 'Grisell Adriana Ruiz Juárez ', 'Esposa', '88888888', '99999999');
INSERT INTO `empleados` VALUES ('2', 'Angel Humberto', 'Luna', 'Sanchez', '1993-01-17', 'Ingeniero Mecanico Administrador', '1', 'LUSA930117HNLNNN03', 'LUSA9301178B0', '47129320736', 'O+', 'Soltero', 'ahumberto.lunasanchez@gmail.com', '8115369862', '', 'Roma #417', 'Andalucia', '66612', 'Apodaca', 'Nuevo León', 'Apodaca', 'Mexico', 'Nueva las puentes y Andromeda', 'Esquina con un Seven Eleven y Gasolinera', 'Humberto Tomas Luna Briones', null, null, null);

-- ----------------------------
-- Table structure for estadoc
-- ----------------------------
DROP TABLE IF EXISTS `estadoc`;
CREATE TABLE `estadoc` (
  `idCivil` int(255) NOT NULL AUTO_INCREMENT,
  `estadoCivil` varchar(50) NOT NULL,
  PRIMARY KEY (`idCivil`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estadoc
-- ----------------------------
INSERT INTO `estadoc` VALUES ('1', 'Selecciona un estado civil');
INSERT INTO `estadoc` VALUES ('2', 'Soltero');
INSERT INTO `estadoc` VALUES ('3', 'Casado');
INSERT INTO `estadoc` VALUES ('4', 'Divorciado');
INSERT INTO `estadoc` VALUES ('5', 'Union Libre');
INSERT INTO `estadoc` VALUES ('6', 'Viudo');

-- ----------------------------
-- Table structure for estados
-- ----------------------------
DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `idEstado` tinyint(255) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(255) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estados
-- ----------------------------
INSERT INTO `estados` VALUES ('1', 'Seleccione un Estado');
INSERT INTO `estados` VALUES ('2', 'Aguascalientes');
INSERT INTO `estados` VALUES ('3', 'Baja California');
INSERT INTO `estados` VALUES ('4', 'Baja California Sur');
INSERT INTO `estados` VALUES ('5', 'Campeche');
INSERT INTO `estados` VALUES ('6', 'Coahuila de Zaragoza');
INSERT INTO `estados` VALUES ('7', 'Colima');
INSERT INTO `estados` VALUES ('8', 'Chiapas');
INSERT INTO `estados` VALUES ('9', 'Chihuahua');
INSERT INTO `estados` VALUES ('10', 'Ciudad de Mexico');
INSERT INTO `estados` VALUES ('11', 'Durango');
INSERT INTO `estados` VALUES ('12', 'Guanajuato');
INSERT INTO `estados` VALUES ('13', 'Guerrero');
INSERT INTO `estados` VALUES ('14', 'Hidalgo');
INSERT INTO `estados` VALUES ('15', 'Jalisco');
INSERT INTO `estados` VALUES ('16', 'México');
INSERT INTO `estados` VALUES ('17', 'Michoacán de Ocampo');
INSERT INTO `estados` VALUES ('18', 'Morelos');
INSERT INTO `estados` VALUES ('19', 'Nayarit');
INSERT INTO `estados` VALUES ('20', 'Nuevo León');
INSERT INTO `estados` VALUES ('21', 'Oaxaca');
INSERT INTO `estados` VALUES ('22', 'Puebla');
INSERT INTO `estados` VALUES ('23', 'Querétaro');
INSERT INTO `estados` VALUES ('24', 'Quintana Roo');
INSERT INTO `estados` VALUES ('25', 'San Luis Potosí');
INSERT INTO `estados` VALUES ('26', 'Sinaloa');
INSERT INTO `estados` VALUES ('27', 'Sonora');
INSERT INTO `estados` VALUES ('28', 'Tabasco');
INSERT INTO `estados` VALUES ('29', 'Tamaulipas');
INSERT INTO `estados` VALUES ('30', 'Tlaxcala');
INSERT INTO `estados` VALUES ('31', 'Veracruz');
INSERT INTO `estados` VALUES ('32', 'Yucatán');
INSERT INTO `estados` VALUES ('33', 'Zacatecas');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idrol`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Super Administrador');

-- ----------------------------
-- Table structure for tiposangre
-- ----------------------------
DROP TABLE IF EXISTS `tiposangre`;
CREATE TABLE `tiposangre` (
  `idTipoSangre` int(255) NOT NULL AUTO_INCREMENT,
  `tipoSangre` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipoSangre`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tiposangre
-- ----------------------------
INSERT INTO `tiposangre` VALUES ('1', 'O-');
INSERT INTO `tiposangre` VALUES ('2', 'O+');
INSERT INTO `tiposangre` VALUES ('3', 'A-');
INSERT INTO `tiposangre` VALUES ('4', 'A+');
INSERT INTO `tiposangre` VALUES ('5', 'B-');
INSERT INTO `tiposangre` VALUES ('6', 'B+');
INSERT INTO `tiposangre` VALUES ('7', 'AB-');
INSERT INTO `tiposangre` VALUES ('8', 'AB+');

-- ----------------------------
-- Table structure for transportistas
-- ----------------------------
DROP TABLE IF EXISTS `transportistas`;
CREATE TABLE `transportistas` (
  `idTransportista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `rfc` varchar(14) DEFAULT NULL,
  `direccion` varchar(75) DEFAULT 'Calle y Numero',
  `colonia` varchar(45) DEFAULT NULL,
  `localidad` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `status` tinyint(255) DEFAULT NULL,
  PRIMARY KEY (`idTransportista`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transportistas
-- ----------------------------
INSERT INTO `transportistas` VALUES ('1', 'Auto Líneas Alanís Hnos, S.A. De C.V.', 'AAAA000000AAA', 'Avenida Adolfo Ruiz Cortines Poniente 2104', 'Moderna', 'Monterrey', 'Monterrey', null, '64530', null, '1');
INSERT INTO `transportistas` VALUES ('2', 'Transportes FEMA', 'RUBO710306427', 'Carretera Aeropuerto a Piedras Negras Kilómetro 0.440', 'La Concordia', 'Nuevo Laredo', 'Nuevo Laredo', 'Mexico', '88294', null, '1');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `idrol` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `usuarioscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_rol_usuarios_idx` (`idrol`),
  CONSTRAINT `fk_rol_usuarios` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Oscar G', 'Ruiz', 'Barron', '8111814298', 'ogruibar@gmail.com', 'osscar', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', '1', '1');
SET FOREIGN_KEY_CHECKS=1;
