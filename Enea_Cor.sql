-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2013 a las 18:17:07
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `academia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Enea_Cor`
--

CREATE TABLE IF NOT EXISTS `Enea_Cor` (
  `Eneatipo` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Desc` text COLLATE utf8_spanish2_ci NOT NULL,
  `Pregunta` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Ventajas` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `Desventajas` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Eneatipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Enea_Cor`
--

INSERT INTO `Enea_Cor` (`Eneatipo`, `Titulo`, `Desc`, `Pregunta`, `Ventajas`, `Desventajas`) VALUES
(1, 'Perfeccionista', 'Soy muy exigente en lo que se refiere al comportamiento y considero responsabilidad mía y de los demás estar a la altura de mis exigencias. Me cuesta poco reparar en lo malo o lo incorrecto de una situación, así como en el modo de mejorar las cosas. Se me puede considerar exigente o crítico en exceso, pero no soporto que las cosas no se hagan bien. Me llena de satisfacción asumir responsabilidades, y poseo un sentido de la perfección refinado y estético. Cuando digo que voy a hacer algo, me aseguro de hacerlo bien. Si otra persona se comporta de forma injusta o irresponsable, me ofendo, aunque intento que no se note.', '¿Oigo en mi interior una voz o un mensaje que, como si fuera una grabación me critica continuamente por todo lo que hago mal?', 'Trabajador, Disciplinado', 'Enjuiciador, Inflexible'),
(2, 'Altruista', 'Mi punto fuerte es la sensibilidad hacia las necesidades ajenas, a veces incluso hacia personas que no conozco. Es como si poseyera una antena invisible capaz de captar tales demandas, a menudo antes incluso de que los demás reparen en ellas. Me gusta considerarme una persona cálida, amigable y generosa. Las buenas relaciones son importantes para mí; me esfuerzo mucho en cultivarlas. A veces me cuesta no ayudar a los demás, incluso cuando la situación me sobrepasa o soy yo quien necesita ayuda. En esos momentos, puedo sentir que se me deja de lado o que mis esfuerzos no se valoran, y puedo dejarme llevar por la emoción o abrumar al otro.', '¿Sé por intuición lo que necesitan los demás pero me cuesta mucho expresar mis necesidades incluso para mis adentros?', 'Cariñoso, En sintonía con los sentimientos ajenos', 'Velado, Excesivamente acomodaticio'),
(3, 'Triunfador', 'Me motiva el éxito, alcanzar mis objetivos, ser el mejor. En general, siempre me las he arreglado bien con cualquier meta que me he propuesto. Me siento muy identificado con el trabajo y pienso que el valor de una persona se basa fundamentalmente en lo que consigue. Como estoy tan ocupado, a menudo dejo a un lado los sentimientos o la introspección. Me siento frustrado cuando alguien me hace perder el tiempo, y también con las personas que no están a la altura de una tarea determinada. Aunque soy competitivo, también se me da bien trabajar en equipo (¡Aunque suelo estar yo al mando!).', '¿Hago lo que hago para que los demás me valoren y me respeten?', 'Seguro de sí mismo, Centrado en los resultados', 'Competitivo, Adicto al trabajo'),
(4, 'Romántico', 'Soy una persona sensible que halla riqueza y significado en las relaciones auténticas con los demás. Dado que me atraen las expresiones estéticas simbólicas, es posible que sea aficionado a diversas formas de arte. Poseo un sentido artístico que disfruta con lo singular y sofisticado. A menudo tengo la sensación de que los demás no me comprenden, lo que puede provocar en mí fuertes reacciones de ira o tristeza. Estoy contento sobre todo cuando me siento especial y en sintonía con otra persona, pero no me asusta experimentar las partes más tristes de la vida; de hecho me atrae la melancolía. Muchas veces me aburre la normalidad y me atrae lo distante o inalcanzable.', 'Cuando estoy convencido de algo, ¿me apego a mis emociones durante largos períodos de tiempo, volviendo a menudo sobre mis pensamientos, sentimientos y sensaciones?', 'Creativo, Expresivo', 'Exagerado, Acomplejado'),
(5, 'Observador', 'Me considero una persona analítica que necesita pasar tiempo a solas para recuperar energías. Me gusta observar las situaciones más que implicarme en ellas, y no me gusta que me exijan demasiado. Me gusta meditar sobre mis propias experiencias cuando estoy a solas para poder disfrutarlas, comprenderlas y a veces revivirlas. Dado que poseo una vida mental tan activa, nunca me aburro cuando estoy solo. Me gustaría tener una vida sencilla, sin complicaciones y ser tan autosuficiente como fuera posible.', 'Cuando una situación se vuelve emotiva o intensa, ¿Soy capaz de desconectarme fácilmente de lo que estoy sintiendo y volver a conectarme más tarde donde y cuando quiero?', 'Analítico, Objetivo', 'Distante, Poco firme'),
(6, 'Escéptico Leal', 'Uno de mis puntos fuertes es mi mente aguda e incisiva, que funciona a tope cuando imagino que algo amenaza mi seguridad o mi tranquilidad. Mi mente inquisitiva también me aporta perspicacia e intuición. Considero primordial la confianza en los demás, y a menudo hago un repaso de mi entorno para comprobar si surge alguna amenaza. Aunque desconfío de la autoridad, soy leal y me comprometo con la organización a la que pertenezco. O bien evito el peligro o bien lo afronto sin rodeos y suelo ser un activo defensor de las causas perdidas.', '¿Me preocupo constantemente pensando en lo que puede ir mal y tratando de hacer planes para que esas posibilidades negativas no se hagan realidad?', 'Leal, Responsable', 'Sufridor, Alerta en exceso'),
(7, 'El Entusiasta', 'Soy una persona optimista que disfruta cuando encuentra cosas nuevas e interesantes que hacer. Tengo una mente muy activa que va y viene constantemente de una idea a otra. Me gusta formarme una imagen global de cómo encajan esas ideas, y me entusiasmo cuando consigo conectar  conceptos que en principio no parecían relacionados. Me gusta trabajar en cosas que me interesan, y poseo mucha energía para dedicarles. Lo paso mal cuando me veo obligado a llevar a cabo tareas repetitivas o poco gratificantes. Si algo me entristece, prefiero desviar la atención a cosas más placenteras. Para mí, es importante contar con múltiples posibilidades, de lo contrario, me siento atrapado.', '¿Busco constantemente gente, ideas o sucesos nuevos y estimulates para llevar una vida emocionante y activa?', 'Espontáneo, Mente sintética', 'Disperso, Rebelde'),
(8, 'Líder', 'Otorgo un gran valor al hecho de ser fuerte, honesto y de fiar, y abordo de cara los temas importantes. Me gusta que los demás sean fuertes y directos, y normalmente me doy cuenta cuando alguien no me está diciendo la verdad o lleva segundas intenciones. Protejo a las personas inocentes, sobre todo cuando se ha cometido una injusticia, y sin embargo me cuesta tolerar la debilidad ajena. Si no estoy de acuerdo con aquellos que ostentan la autoridad o si nadie se pone al frente, doy un paso adelante y tomo el mando. Me cuesta no expresar mis sentimientos cuando estoy enfadado y normalmente estoy dispuesto a dar la cara por mis amigos y mi familia.', '¿Doy una imagen muy dura, tanto que a veces intimida a los demás (intencionadamente o no), pero que oculta un fondo menos visible pero vulnerable?', 'Directo, Firme', 'Dominante, Desmesurado'),
(9, 'Pacificador', 'Puesto que por lo general advierto y comprendo todos los puntos de vista, se me da bien ayudar a los demás a resolver sus conflictos. Esta capacidad para ver lo bueno de todo el mundo me aporta ecuanimidad, pero me hace parecer indeciso. No me gustan los conflictos, y me cuesta mostrar enfado. Disfruto participando en distintas actividades y a veces me involucro tanto que puedo olvidarme de otras cosas que debería estar haciendo. De trato fácil y agradable, busco una vida cómoda, armoniosa, y sin conflictos.', '¿Conecto de forma automática con la energía positiva de los demás, pero me afecta mucho encontrarme con reacciones negativas, ira y conflicto?', 'Afable, Acogedor', 'Aplaza las cosas, Evita el conflicto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
