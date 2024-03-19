-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2024 a las 05:45:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `icon`) VALUES
(1, 'Dashboard de Ventas', 'dashboard1.png'),
(2, 'Dashboard de Marketing', 'dashboard2.png'),
(3, 'Dashboard de Finanzas', 'dashboard3.png'),
(4, 'Dashboard de Operaciones', 'dashboard4.png'),
(5, 'Dashboard de Recursos Humanos', 'dashboard5.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `command`
--

CREATE TABLE `command` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `command`
--

INSERT INTO `command` (`id`, `id_product`, `name`, `quantity`, `dat`, `statut`, `id_user`) VALUES
(1, 2, NULL, 2, NULL, 'paid', 2),
(2, 1, NULL, 3, NULL, 'paid', 2),
(3, 4, NULL, 3, NULL, 'paid', 2),
(6, 4, NULL, 1, NULL, 'paid', 2),
(8, 1, NULL, 6, NULL, 'paid', 2),
(9, 1, NULL, 2, NULL, 'paid', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dashboard`
--

INSERT INTO `dashboard` (`id`, `user_id`, `name`, `url`, `date`) VALUES
(1, 1, 'Dashboard de Ventas', 'https://app.powerbi.com/view?r=eyJrIjoiOWM3YThlNjktOGMxYy00ZTNmLTkwZjYtNDJjNTRlNjY4NjY0IiwidCI6IjQxZTQwNjFiLWUyNzUtNDQyOC05ZmQ1LTM2ZTE3ZjVhNzY2MyIsImMiOjR9', '2024-03-10'),
(2, 1, 'Dashboard de Marketing', 'https://app.powerbi.com/reportEmbed?reportId=b7e21a45-fc14-4daa-b7ad-fd7007e8320c&autoAuth=true&ctid=41e4061b-e275-4428-9fd5-36e17f5a7663', '2024-03-11'),
(3, 2, 'Dashboard De Ventas', 'https://app.powerbi.com/reportEmbed?reportId=b7e21a45-fc14-4daa-b7ad-fd7007e8320c&autoAuth=true&ctid=41e4061b-e275-4428-9fd5-36e17f5a7663', '2024-03-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `id_picture` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `id_picture`, `thumbnail`, `id_category`) VALUES
(1, 'Dashboard de Ventas', '199.00', 'Monitorizar el rendimiento de las ventas (Ventas totales por día, semana, mes o trimestre, Tasa de conversión de leads a clientes, Ticket promedio por cliente, Porcentaje de cumplimiento de objetivos de ventas, Desempeño individual de los vendedores).', 1, 'dashboard1.png', 1),
(2, 'Dashboard de Marketing', '239.00', 'Evaluar la efectividad de las campañas de marketing (Tráfico web por canal (SEO, SEM, redes sociales, etc.), Tasa de apertura de correos electrónicos, Tasa de clics (CTR) de anuncios, Costo por adquisición (CAC), Retorno de la inversión (ROI) de las campañas).', 2, 'dashboard2.png', 2),
(3, 'Dashboard de Finanzas', '179.00', 'Obtener una visión general de la salud financiera del negocio (Ingresos y gastos totales, Flujo de efectivo, Margen de ganancia, Cuentas por cobrar y por pagar, Punto de equilibrio).', 199, 'dashboard3.png', 1),
(4, 'Dashboard de Operaciones', '258.00', 'Monitorizar la eficiencia de las operaciones y la productividad (Tiempo de ciclo de producción, Tasa de defectos, Disponibilidad de maquinaria, Inventario, Satisfacción del cliente).', 4, 'dashboard4.png', 2),
(5, 'Dashboard de Recursos Humanos', '120.00', 'Monitorizar la salud del equipo y la retención de empleados (Tasa de absentismo, Rotación de personal, Satisfacción de los empleados, Indicadores de diversidad e inclusión, Desempeño individual de los empleados).', 5, 'dashboard5.png', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `id_picture` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `product2`
--

INSERT INTO `product2` (`id`, `name`, `price`, `description`, `id_picture`, `thumbnail`) VALUES
(1, 'Dashboard de Ventas', '59.99', 'Monitorizar el rendimiento de las ventas( Ventas totales por día, semana, mes o trimestre,\r\nTasa de conversión de leads a clientes,\r\nTicket promedio por cliente,\r\nPorcentaje de cumplimiento de objetivos de ventas,\r\nDesempeño individual de los vendedores).', 1, '1.jpg'),
(2, 'Dashboard de Marketing', '59.99', 'Evaluar la efectividad de las campañas de marketing( Tráfico web por canal (SEO, SEM, redes sociales, etc.),\r\nTasa de apertura de correos electrónicos,\r\nTasa de clics (CTR) de anuncios,\r\nCosto por adquisición (CAC),\r\nRetorno de la inversión (ROI) de las campañas).', 2, '2.jpg'),
(3, 'Dashboard de Finanzas', '49.99', 'Obtener una visión general de la salud financiera del negocio( Ingresos y gastos totales,\r\nFlujo de efectivo,\r\nMargen de ganancia,\r\nCuentas por cobrar y por pagar,\r\nPunto de equilibrio).\r\n', 3, '3.jpg'),
(4, 'Dashboard de Operaciones', '69.99', 'Monitorizar la eficiencia de las operaciones y la productividad(Tiempo de ciclo de producción,\r\nTasa de defectos,\r\nDisponibilidad de maquinaria,\r\nInventario,\r\nSatisfacción del cliente).', 4, '4.jpg'),
(5, 'Dashboard de Recursos Humanos', '62.99', 'Monitorizar la salud del equipo y la retención de empleados(Tasa de absentismo,\r\nRotación de personal,\r\nSatisfacción de los empleados,\r\nIndicadores de diversidad e inclusión,\r\nDesempeño individual de los empleados).', 5, '5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `address`, `city`, `country`, `role`) VALUES
(2, 'parco.jhon.cristhian@cidie.edu.pe', 'e10adc3949ba59abbe56e057f20f883e', 'Jhon', 'Parco Llantoy', 'Av Quinua', 'Jalisco', 'Peru', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `command`
--
ALTER TABLE `command`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `command_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product2` (`id`),
  ADD CONSTRAINT `command_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
