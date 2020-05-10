-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2020 at 08:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ferreteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `ARTICULOS`
--

CREATE TABLE `ARTICULOS` (
  `CLAVE_ART` int(4) NOT NULL,
  `DESC_ART` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `CANTIDAD_ART` int(4) NOT NULL,
  `PRECIO_ART` int(4) NOT NULL,
  `OBS_ART` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ARTICULOS`
--

INSERT INTO `ARTICULOS` (`CLAVE_ART`, `DESC_ART`, `CANTIDAD_ART`, `PRECIO_ART`, `OBS_ART`) VALUES
(2, 'RotoMartillo', 5, 59, 'Color Plata'),
(4, 'Tijeras', 10, 59, 'Uso doméstico'),
(6, 'Desarmador P_MODIFICADO', 9, 59, 'Plano'),
(7, 'Brocas', 9, 39, 'Grandes'),
(8, 'Rotomartillo_MODIFICADO', 2, 599, 'Con batería'),
(9, 'Grapas Normales', 19, 69, 'Grapas normales'),
(11, 'Taquetes', 6, 29, 'Taquetes de plastico'),
(12, 'Cable cobre_MODIFICADO', 9, 79, 'Cable convencional'),
(13, 'Cable Acero', 5, 69, 'Enmallado'),
(14, 'Cadena baño_MODIFICADO', 3, 39, 'Cadena convencional'),
(15, 'Cadena para mascota', 6, 59, 'Perros'),
(16, 'Tornillos', 9, 79, 'Medianos'),
(17, 'Alambre', 20, 59, 'No conductor'),
(18, 'Mecate', 7, 79, 'No es de acero'),
(19, 'Abrazadera Pequeña', 5, 79, 'Pequeña'),
(20, 'Abrazadera Grande', 7, 126, 'Grande'),
(21, 'Nuevo Producto', 12, 7, 'Ejemplo'),
(23, 'Martillo', 41, 5, 'asd'),
(24, 'Cable Jumper', 9, 20, 'De 30cm'),
(5002, 'Cable Jack', 20, 29, 'Jack 3.5mm'),
(5003, 'Cable USB', 6, 39, 'USB A a USB A');

-- --------------------------------------------------------

--
-- Table structure for table `PROVEEDORES`
--

CREATE TABLE `PROVEEDORES` (
  `CLAVE_PROV` int(4) NOT NULL,
  `NOMBRE_PROV` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `DIRECCION_PROV` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO_PROV` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL_PROV` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `TIPO_PROV` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `CLAVEART_PROV` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `PROVEEDORES`
--

INSERT INTO `PROVEEDORES` (`CLAVE_PROV`, `NOMBRE_PROV`, `DIRECCION_PROV`, `TELEFONO_PROV`, `EMAIL_PROV`, `TIPO_PROV`, `CLAVEART_PROV`) VALUES
(2, 'Abastecedora MTY', 'Monterrey', '8313213513', 'mtyferr@gmail.com', '5', 2),
(4, 'Roshfrans', 'CDMX', '8004655132', 'roshfrans@proveedores.com', '6', 9),
(6, 'Walmart', 'Juarez', '86153132', 'walmart@walmart.com', '3', 4),
(7, 'Soriana', 'Monterrey', '181565316', 'soriana@gmail.com', '5', 1),
(8, 'Smart', 'Juarez', '812315366', 'smart@smart.com', '6', 9),
(9, 'Autozone', 'Guadalupe', '815673517', 'autozone@gmail.com', '4', 16),
(10, 'Ferreteria Moran', 'Escobedo', '8112516352', 'moranferr@gmail.com', '2', 11),
(11, 'Los pinos', 'Cadereyta', '8112635126', 'lospinos@gmail.com', '3', 9),
(12, 'Casa Blanca', 'Guadalupe', '8156152635', 'casablanca@gmail.com', '4', 8),
(13, 'Ferreteria Janet', 'Escobedo', '811265465', 'janet@gmail.com', '2', 4),
(14, 'Ferreterias Angel', 'Escobedo', '811526516', 'salazar@gmail.com', '1', 17),
(15, 'Ferreteria Bryan', 'Cadereyta', '8121163351', 'bryan@gmail.com', '4', 20),
(16, 'Ferreteria Mauricio', 'Guadalupe', '811126841', 'mau@gmail.com', '3', 18),
(17, 'Soluciones en ferreteria', 'Juarez', '812351321', 'soluciones@ferreteria.com', '4', 5),
(18, 'Ferreteria 3 hermanos', 'Monterrey', '811625456', '3hermanosferr@gmail.com', '2', 9),
(19, 'Gigante', 'Escobedo', '8142425775', 'gigante@gigante.com', '1', 10),
(20, 'Steren', 'Monterrey', '823453554', 'steren@steren.com', '2', 12),
(22, 'Proveedor22', 'Escobedo', '84563513521', 'prove@gmail.com', '5', 10),
(23, 'Truper', 'Escobedo', '8165165163', 'truper@gmail.com', '5', 10),
(24, 'Soriana', 'Monterrey', '2565263523', 'soriana@gmail.com', '5', 20),
(26, 'Ferreteria Rio Verde', 'AguasCalientes', '651351635163', 'rioverde@ferr.com', '8', 11),
(27, 'Walmart USA', 'Michigan', '025651655', 'walmart@usa.com', '7', 10),
(28, 'Hardware Store', 'Los Angeles', '056354654', 'hardware@gmail.com', '4', 25),
(29, 'Autopartes Abi', 'Monterrey', '812351354', 'abiferr@autopartes.com', '8', 26);

-- --------------------------------------------------------

--
-- Table structure for table `VENTAS`
--

CREATE TABLE `VENTAS` (
  `CLAVE_VTA` int(4) NOT NULL,
  `CANTIDAD_VTA` int(4) NOT NULL,
  `PRECIO_VTA` int(4) NOT NULL,
  `TOTAL_VTA` int(4) NOT NULL,
  `NVENTA_VTA` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `VENTAS`
--

INSERT INTO `VENTAS` (`CLAVE_VTA`, `CANTIDAD_VTA`, `PRECIO_VTA`, `TOTAL_VTA`, `NVENTA_VTA`) VALUES
(2, 30, 30, 30, 30),
(4, 3, 99, 299, 25),
(6, 4, 40, 160, 6),
(7, 5, 9, 45, 7),
(8, 6, 6, 36, 8),
(9, 1, 599, 599, 9),
(10, 2, 200, 400, 10),
(11, 1, 59, 59, 11),
(12, 2, 60, 120, 12),
(13, 50, 1, 50, 13),
(14, 3, 30, 90, 14),
(15, 5, 15, 75, 15),
(16, 1, 79, 79, 16),
(17, 2, 20, 40, 17),
(18, 8, 4, 32, 18),
(19, 9, 5, 45, 19),
(21, 8, 6, 48, 20),
(22, 10, 29, 299, 20),
(36, 50, 9, 450, 27),
(37, 2, 299, 598, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ARTICULOS`
--
ALTER TABLE `ARTICULOS`
  ADD PRIMARY KEY (`CLAVE_ART`);

--
-- Indexes for table `PROVEEDORES`
--
ALTER TABLE `PROVEEDORES`
  ADD PRIMARY KEY (`CLAVE_PROV`);

--
-- Indexes for table `VENTAS`
--
ALTER TABLE `VENTAS`
  ADD PRIMARY KEY (`CLAVE_VTA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ARTICULOS`
--
ALTER TABLE `ARTICULOS`
  MODIFY `CLAVE_ART` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5004;

--
-- AUTO_INCREMENT for table `PROVEEDORES`
--
ALTER TABLE `PROVEEDORES`
  MODIFY `CLAVE_PROV` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `VENTAS`
--
ALTER TABLE `VENTAS`
  MODIFY `CLAVE_VTA` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
