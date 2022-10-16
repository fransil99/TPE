-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2022 a las 05:45:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_motos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(45) NOT NULL,
  `nombre_marca` varchar(40) NOT NULL,
  `descripcion_marca` varchar(500) NOT NULL,
  `imagen_marca` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre_marca`, `descripcion_marca`, `imagen_marca`) VALUES
(3, 'Honda', 'Honda ha sido el fabricante de motocicletas más grande del mundo desde 1959, así como también el fabricante de motores de combustión interna más grande del mundo medido por volumen, produciendo más de 14 millones de motores de combustión interna cada año. Honda se convirtió en el segundo mayor fabricante de automóviles japonés en 2001.', 'images\\LogoHonda.jpg'),
(4, 'Yamaha', 'Desde su fundación como fabricante de motos el 1 de Julio de 1955 (la sede de Yamaha Motor Company se sitúa en Iwata-Japón), Yamaha trabaja para crear productos que se encuentran entre los mejores del mundo, mediante su constante búsqueda de calidad.', 'images\\YamahaLogo.png'),
(5, 'KTM', 'KTM es una firma atrevida cuya gama de productos abarca desde las trail hasta las deportivas de carretera, pasando por enduro, cross, supermotard y por las categorías pequeñas en asfalto, con varios modelos de 125 y 350 centímetros cúbicos e incluso, motos eléctricas destinadas al enduro y motocross.', 'images\\KTMLogo.jpg'),
(6, 'Husqvarna', 'Husqvarna Motorcycles GmbH, es un fabricante de motocicletas de motocross, enduro y supermoto perteneciente desde comienzos de 2013 a KTM AG, propietaria de las marcas KTM Group . La compañía comenzó la producción en 1903 en Huskvarna, Suecia como filial de la empresa de armamento Husqvarna, que suministrara al ejército sueco rifles desde 1689. Entre julio de 2007 y enero de 2013 fue una filial de la casa bávara BMW.', 'images\\HusqvarnaLogo.png'),
(7, 'Kawasaki', 'Kawasaki Heavy Industries Motorcycle & Engine es una división de Kawasaki Heavy Industries, dedicada a la producción de motocicletas, cuatrimotos, vehículos especializados, motos de agua, y motores de gasolina de propósito general', 'images\\KawasakiLogo.png'),
(8, 'Suzuki', 'Suzuki Motor Corporation, es una empresa pública multinacional japonesa dedicada a la fabricación de automóviles (especialmente todoterreno y compactos), motocicletas, motores fuera borda y una variedad de productos equipados con motor de combustión interna.1​ Fue fundada en 1909 en la localidad de Minami-ku (Hamamatsu), prefectura de Shizuoka, Japón, por Michio Suzuki.2​', 'images\\SuzukiLogo.jpg'),
(14, 'Gas Gas', 'Gas Gas es un fabricante de motocicletas español, especializado en trial, enduro y quads, con sede en Zaragoza. En 2014 se anunció su fusión con el fabricante de motos de trial OSSA.1​ En noviembre de 2015 es adquirida, en suspensión de pagos, por Torrot. En 2017 cambió su sede social a Zaragoza.2​ En septiembre de 2019 fue comprada por la empresa austríaca KTM 3​', 'images\\GasGasLogo.png'),
(18, 'Sherco', 'Sherco', 'images/bikes/634b7b29886b8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motos`
--

CREATE TABLE `motos` (
  `id_moto` int(45) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `cilindrada` int(45) NOT NULL,
  `precio` int(45) NOT NULL,
  `id_marca_fk` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `motos`
--

INSERT INTO `motos` (`id_moto`, `nombre`, `imagen`, `descripcion`, `cilindrada`, `precio`, `id_marca_fk`) VALUES
(7, 'Honda CRF 250F', 'images\\Honda-CRF-250F.jpg', 'La CRF 250F cuenta con los gráficos de la última generación de la línea CRF. Su protagonismo en las rutas será contundente dando mucho de que hablar. El nivel de acabados, la calidad de los plásticos y su chasis expuesto harán que la nueva CRF 250F sea el centro de atracción.', 250, 4999, 3),
(8, 'Honda CRF 250R', 'images\\honda-CRF250R.jpg', 'El control de lanzamiento de tres niveles de la CRF 250R ofrece opciones para lograr la mejor salida posible tanto para un profesional como para un principiante.', 250, 8199, 3),
(9, 'Honda CRF 450R', 'images\\Honda-CRF-450R.jpg', 'El chasis de doble viga de aluminio ha disminuido su rigidez lateral para contribuir a la maniobrabilidad, sobre todo, en curva. También su distancia libre al piso y la precisión de su geometría de dirección permiten que el desempeño de esta motocicleta sea alusinante en la pista.', 450, 9599, 3),
(10, 'KTM 250 SX-F', 'images\\ktm sx-f 250.png', 'La KTM 250 SX-F 2023 continúa su asalto a la muy competitiva categoría de 250 cc. Con un paquete realmente fácil de usar, diseñado para satisfacer a todos los pilotos, desde los principiantes hasta los profesionales, continúa la tendencia de estar indiscutiblemente READY TO RACE a cualquier nivel. Con una contundente potencia de más de 47 CV, más estabilidad en línea recta y equipada con una mayor y más avanzada electrónica, la KTM 250 SX-F 2023 está lista para enfrentarse a la categoría de 250 cc y dominarla.', 250, 10000, 5),
(11, 'KTM 350 SX-F', 'images\\ktm sx-f 350.png', 'Con más de una década compitiendo -y ganando- en el nivel más alto del motocross profesional, la KTM 350 SX-F hace tiempo que se ha despojado de su etiqueta de subestimada y ha demostrado ser una digna adversaria. Con una potencia utilizable en toda la gama de revoluciones, una estabilidad inquebrantable a alta velocidad y unas verdaderas credenciales de campeona, la KTM 350 SX-F 2023 sigue estando READY TO RACE.', 350, 11179, 5),
(12, 'KTM 450 SX-F', 'images\\KTM  sx-f 450.png', 'No somos de los que presumen, pero con una vitrina de trofeos a punto de estallar, la KTM 450 SX-F es la personificación de una cazadora de podios. Con 5 títulos de supercross AMA 450 en las últimas 7 temporadas, la KTM 450 SX-F 2023 llega al paddock ya armada con lo aprendido en los anteriores campeonatos y con un arsenal de armas totalmente nuevo. Es el momento de ampliar la sala de trofeos.', 450, 11375, 5),
(13, 'Yamaha YZ250F', 'images\\yz 250f.png', 'La YZ250F ganadora de múltiples campeonatos domina en la pista de carreras, en los tiroteos y básicamente en todos los lugares a los que va.', 250, 8599, 4),
(14, 'Yamaha YZ450F', 'images\\yz 450f.png', '\'Recién salido de títulos profesionales consecutivos de Motocross y Supercross, Yamaha tomó la YZ450F líder en su clase y la mejoró aún más: ¡más potente, más liviana, más delgada, con una estabilidad general mejorada y más agilidad que nunca! Presentamos la nueva Yamaha YZ450F 2023, porque lo mejor no descansa.', 450, 9899, 4),
(15, 'Yamaha YZ450F Monster Energy', 'images\\yz 450f monster edition.png', 'Obtenga el aspecto y la sensación de un paseo de fábrica de Yamaha con su propio YZ450F completamente nuevo inspirado en Monster Energy.', 450, 10099, 4),
(16, 'Husqvarna FC 250', 'images\\HUSQVARNA FC 250.png', 'Aclamada como la máquina de motocross de 250 cc y 4 tiempos de mayor rendimiento del mercado, la última generación de la FC 250 recibe múltiples actualizaciones técnicas para 2023 con el fin de mantener su posición de cabeza. Alojado en un chasis totalmente nuevo, el compacto motor, más ligero y rediseñado cuenta con un cambio de marchas Pankl revisada que garantiza un funcionamiento más suave, con un nuevo Quickshifter que facilita aún más subir de marchas, incluso a pleno gas. Un nuevo cilindro y un pistón CP han permitido aumentar la relación de compresión a 14,5:1 para mejorar el par y el rendimiento en circuito. Completando las novedades 2023, se han aplicado unos llamativos gráficos en blanco, amarillo y gris aplicados mediante tecnología en molde para un acabado excepcional y duradero.', 250, 9399, 6),
(17, 'Husqvarna FC 350', 'images\\HUSQVARNA FC 350.png', 'Con la agilidad de una 250 y una relación peso-potencia similar a una 450, la FC 350 brilla por su competitivo equilibrio entre potencia y manejabilidad. Esto atrae tanto a pilotos profesionales como a aficionados, creando una experiencia de pilotaje más aprovechable en todas las condiciones. Con una extensa serie de revisiones en motor y parte ciclo, la FC 350 mantiene cómodamente su posición como una de las motos de motocross más polivalentes del mercado. Con una nueva combinación de colores de inspiración sueca en blanco, amarillo y gris, aplicados a una rediseñada carrocería, la llamativa estética, la mejora de la ergonomía y el perfil más plano del asiento muestran a las claras el continuo desarrollo de la FC 350.', 350, 10679, 6),
(18, 'Husqvarna FC 450', 'images\\HUSQVARNA FC 450.png', 'Con múltiples actualizaciones técnicas en 2023 con el fin de mantener su rendimiento líder en los circuitos, la FC 450 sigue siendo la máquina más destacada de la gama de motocross de Husqvarna Motorcycles. Un nuevo motor no sólo produce una amplia y controlable curva de potencia, sino que sitúa la disposición de sus ejes internos en el centro de gravedad ideal, beneficiando enormemente el comportamiento. A esta sensación de agilidad contribuye la nueva parte ciclo, desarrollada y fabricada utilizando técnicas de ingeniería avanzadas para ayudar a reposicionar las masas giratorias y ofrecer un mejor efecto anti-squat para mejorar el comportamiento. Manteniendo la electrónica avanzada y los componentes de alta calidad en todo el conjunto, la FC 450 está acabada con una nueva y funcional carrocería decorada con gráficos blancos, amarillos y grises, inspirados en la herencia sueca de la marca.', 450, 11769, 6),
(21, 'Suzuki RM-Z250', 'images\\SUZUKI RM 250.png', 'Prestaciones ganadoras en competición a punto para ti. Un motor de 249 cc con inyección electrónica y un impresionante par motor a bajo y medio régimen y una excitante potencia a altas revoluciones. Una parte ciclo revisada con todo lo aprendido en las carreras. Una imagen agresiva, esbelta y atractiva. La RM-Z250, la perfecta moto de competición para los pilotos de motocross de todo el mundo.', 250, 8700, 8),
(22, 'Suzuki RM-Z450', 'images\\SUZUKI RM 450.png', 'La Suzuki RM-Z450 son palabras mayores. La más potente y la más emocionante. Ofrece una entrada y salida de las curvas con precisión y estabilidad gracias a sus amortiguaciones hidráulicas.Toda la potencia con el nuevo refinado de motor de 4 tiempos y el escape que la dotan de un altísimo nivel de prestaciones y la convierten en una máquina a la altura de los campeones.', 450, 9039, 8),
(24, 'GAS GAS MC 450F TROY LEE DESIGNS', 'images\\gasgas450FtroyLeeDesign.jpg', '¡Estamos superorgullosos de nuestra completamente nueva MC 450F Troy Lee Designs de motocross! La demanda de una moto de motocross réplica GASGAS Factory Racing ha sido enorme, por lo que hemos cogido un número limitado de nuestras máquinas MC 450F, les hemos inyectado un poco de BAM BAM, hemos mejorado la potencia, el comportamiento y el confort, y hemos creado la impresionante réplica MC 450F Troy Lee Designs.', 450, 11659, 14),
(25, 'GAS GAS MC 250F', 'images\\GASGAS250F.jpg', '¡Nuestra \"pequeña\" 4 tiempos es grande en diversión y la garantía de dibujar la mayor sonrisa en tu rostro! Preparada para la competición, la MC 250F se adapta a una gran variedad de pilotos, así que tanto si estás empezando a rodarte en circuitos locales como si luchas por quedar campeón, ¡esta es tu moto! Con un motor compacto que genera su potencia máxima a 14.000 rpm, no hace falta decir que esta cosa es una auténtica locura.', 250, 8199, 14),
(26, 'GAS GAS MC 350F', 'images\\GASGAS350F.jpg', 'La MC 350F es sin duda alguna la moto de motocross definitiva para el piloto de hoy en día. Ofreciendo a los pilotos de todos los niveles lo mejor de todo, ofrece el equilibrio perfecto entre una potencia arrasadora, comportamiento ligero y una frenada superior vuelta tras vuelta. Suena como algo increíble, ¿verdad? ¡Pues es verdad!', 350, 10799, 14),
(27, 'KAWASAKI KX 250', 'images\\KAWASAKI KX 250.png', 'La KX250 es la máquina probada en campeonatos que hemos construido para que tú puedas ser el siguiente. Sé el próximo campeón. Sé el próximo héroe. Sé la próxima leyenda. Sé el próximo pionero de toda una generación de grandeza. En la KX250, tu momento es ahora. Con: nuevo motor de 4 tiempos más potente de 249 cc, nuevo embrague hidráulico de disco cónico, nuevo arranque eléctrico, nuevo y delgado bastidor perimetral de aluminio.', 250, 9399, 7),
(28, 'KAWASAKI KX 450', 'images\\KAWASAKI KX 450.png', 'Con más campeonatos de Supercross y Motocross que cualquier otro fabricante, el nombre KX es sinónimo de victoria. La KX450 representa el buque insignia de la gama KX, construida con el único propósito de dominar la pista. Durante las últimas cuatro décadas, hemos aprendido lo que se necesita para ganar y mantenerse en la cima. Nuestra dedicación a la construcción de la máquina definitiva es innegable, y la KX450 lo representa al máximo.', 450, 12399, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `password`) VALUES
('admin@admin.com', '$2y$10$11Primwk3ClsaJLvLZU4ru9cppaYvTCi7WDI3WQdBQ3af2.PryfZ2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`id_moto`),
  ADD KEY `fk_marca_id` (`id_marca_fk`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `motos`
--
ALTER TABLE `motos`
  MODIFY `id_moto` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `motos`
--
ALTER TABLE `motos`
  ADD CONSTRAINT `id_marca_fk` FOREIGN KEY (`id_marca_fk`) REFERENCES `marcas` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
