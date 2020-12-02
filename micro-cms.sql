-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: aws_page_1
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `pay_link` text COLLATE utf8mb4_unicode_ci,
  `service` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'doloribus a sunt sequi laborum','<p style=\"text-align: center;\"><strong>Pol&iacute;tica de privacidad</strong></p><p><strong>1. Pol&iacute;tica de Privacidad: </strong><br />&nbsp;</p><p>Awslatinoamerica.com informa a los usuarios del sitio web sobre su pol&iacute;tica respecto del tratamiento y protecci&oacute;n de los datos de car&aacute;cter personal de los usuarios y clientes que puedan ser recabados por la navegaci&oacute;n o contrataci&oacute;n de servicios a trav&eacute;s de su sitio web.</p><p>En este sentido, Awslatinoamerica.com garantiza el cumplimiento de la normativa vigente en materia de protecci&oacute;n de datos personales, reflejada en la Ley Org&aacute;nica 15/1999 de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal y en el Real Decreto 1720/2007, de 21 diciembre, por el que se aprueba el Reglamento de Desarrollo de la LOPD.<br />El uso de esta web implica la aceptaci&oacute;n de esta pol&iacute;tica de privacidad.</p><p><strong>2. Recogida, finalidad y tratamientos de datos:</strong></p><p>Awslatinoamerica.com tiene el deber de informar a los usuarios de su sitio web acerca de la recogida de datos de car&aacute;cter personal que pueden llevarse a cabo, bien sea mediante el env&iacute;o de correo electr&oacute;nico o al cumplimentar los formularios incluidos en el sitio web. En este sentido, Empresa A ser&aacute; considerada como responsable de los datos recabados mediante los medios anteriormente descritos.</p><p>A su vez awslatinoamerica.com informa a los usuarios de que la finalidad del tratamiento de los datos recabados contempla: La atenci&oacute;n de solicitudes realizadas por los usuarios, la inclusi&oacute;n en la agenda de contactos, la prestaci&oacute;n de servicios, la gesti&oacute;n de la relaci&oacute;n comercial y otras finalidades. (INDICAR)</p><p>Las operaciones, gestiones y procedimientos t&eacute;cnicos que se realicen de forma automatizada o no automatizada y que posibiliten la recogida, el almacenamiento, la modificaci&oacute;n, la transferencia y otras acciones sobre datos de car&aacute;cter personal, tienen la consideraci&oacute;n de tratamiento de datos personales.</p><p>Todos los datos personales, que sean recogidos a trav&eacute;s del sitio web de awslatinoamerica.com, y por tanto tenga la consideraci&oacute;n de tratamiento de datos de car&aacute;cter personal, ser&aacute;n incorporados en los ficheros declarados ante la Agencia Espa&ntilde;ola de Protecci&oacute;n de Datos por awslatinoamerica.com.</p><p><strong>3. Comunicaci&oacute;n de informaci&oacute;n a terceros:</strong></p><p>Awslainoamerica.com informa a los usuarios de que sus datos personales no ser&aacute;n cedidos a terceras organizaciones, con la salvedad de que dicha cesi&oacute;n de datos est&eacute; amparada en una obligaci&oacute;n legal o cuando la prestaci&oacute;n de un servicio implique la necesidad de una relaci&oacute;n contractual con un encargado de tratamiento. En este &uacute;ltimo caso, s&oacute;lo se llevar&aacute; a cabo la cesi&oacute;n de datos al tercero cuando awslatinoamerica.com disponga del consentimiento expreso del usuario.</p><p><strong>4. Derechos de los usuarios:</strong></p><p>La Ley Org&aacute;nica 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal concede a los interesados la posibilidad de ejercer una serie de derechos relacionados con el tratamiento de sus datos personales.</p><p>En tanto en cuanto los datos del usuario son objeto de tratamiento por parte de awslatinoamerica.com. Los usuarios podr&aacute;n ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de acuerdo con lo previsto en la normativa legal vigente en materia de protecci&oacute;n de datos personales.</p><p>El ejercicio de derechos deber&aacute; ser realizado por el propio usuario. No obstante, podr&aacute;n ser ejecutados por una persona autorizada como representante legal del autorizado. En tal caso, se deber&aacute; aportar la documentaci&oacute;n que acredite esta representaci&oacute;n del interesado.</p><p>&nbsp;</p>','https://lorempixel.com/600/200/?35722',NULL,'aliquid deleniti et et id',NULL,1),(2,'qui ut omnis explicabo quasi','<p style=\"text-align: center;\"><strong>Pol&iacute;tica de privacidad</strong></p><p><strong>1. Pol&iacute;tica de Privacidad: </strong><br />&nbsp;</p><p>Awslatinoamerica.com informa a los usuarios del sitio web sobre su pol&iacute;tica respecto del tratamiento y protecci&oacute;n de los datos de car&aacute;cter personal de los usuarios y clientes que puedan ser recabados por la navegaci&oacute;n o contrataci&oacute;n de servicios a trav&eacute;s de su sitio web.</p><p>En este sentido, Awslatinoamerica.com garantiza el cumplimiento de la normativa vigente en materia de protecci&oacute;n de datos personales, reflejada en la Ley Org&aacute;nica 15/1999 de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal y en el Real Decreto 1720/2007, de 21 diciembre, por el que se aprueba el Reglamento de Desarrollo de la LOPD.<br />El uso de esta web implica la aceptaci&oacute;n de esta pol&iacute;tica de privacidad.</p><p><strong>2. Recogida, finalidad y tratamientos de datos:</strong></p><p>Awslatinoamerica.com tiene el deber de informar a los usuarios de su sitio web acerca de la recogida de datos de car&aacute;cter personal que pueden llevarse a cabo, bien sea mediante el env&iacute;o de correo electr&oacute;nico o al cumplimentar los formularios incluidos en el sitio web. En este sentido, Empresa A ser&aacute; considerada como responsable de los datos recabados mediante los medios anteriormente descritos.</p><p>A su vez awslatinoamerica.com informa a los usuarios de que la finalidad del tratamiento de los datos recabados contempla: La atenci&oacute;n de solicitudes realizadas por los usuarios, la inclusi&oacute;n en la agenda de contactos, la prestaci&oacute;n de servicios, la gesti&oacute;n de la relaci&oacute;n comercial y otras finalidades. (INDICAR)</p><p>Las operaciones, gestiones y procedimientos t&eacute;cnicos que se realicen de forma automatizada o no automatizada y que posibiliten la recogida, el almacenamiento, la modificaci&oacute;n, la transferencia y otras acciones sobre datos de car&aacute;cter personal, tienen la consideraci&oacute;n de tratamiento de datos personales.</p><p>Todos los datos personales, que sean recogidos a trav&eacute;s del sitio web de awslatinoamerica.com, y por tanto tenga la consideraci&oacute;n de tratamiento de datos de car&aacute;cter personal, ser&aacute;n incorporados en los ficheros declarados ante la Agencia Espa&ntilde;ola de Protecci&oacute;n de Datos por awslatinoamerica.com.</p><p><strong>3. Comunicaci&oacute;n de informaci&oacute;n a terceros:</strong></p><p>Awslainoamerica.com informa a los usuarios de que sus datos personales no ser&aacute;n cedidos a terceras organizaciones, con la salvedad de que dicha cesi&oacute;n de datos est&eacute; amparada en una obligaci&oacute;n legal o cuando la prestaci&oacute;n de un servicio implique la necesidad de una relaci&oacute;n contractual con un encargado de tratamiento. En este &uacute;ltimo caso, s&oacute;lo se llevar&aacute; a cabo la cesi&oacute;n de datos al tercero cuando awslatinoamerica.com disponga del consentimiento expreso del usuario.</p><p><strong>4. Derechos de los usuarios:</strong></p><p>La Ley Org&aacute;nica 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal concede a los interesados la posibilidad de ejercer una serie de derechos relacionados con el tratamiento de sus datos personales.</p><p>En tanto en cuanto los datos del usuario son objeto de tratamiento por parte de awslatinoamerica.com. Los usuarios podr&aacute;n ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de acuerdo con lo previsto en la normativa legal vigente en materia de protecci&oacute;n de datos personales.</p><p>El ejercicio de derechos deber&aacute; ser realizado por el propio usuario. No obstante, podr&aacute;n ser ejecutados por una persona autorizada como representante legal del autorizado. En tal caso, se deber&aacute; aportar la documentaci&oacute;n que acredite esta representaci&oacute;n del interesado.</p><p>&nbsp;</p>','https://lorempixel.com/600/200/?37743',NULL,'quo atque consequuntur ut quia',NULL,1),(3,'eveniet incidunt sequi possimus repudiandae','<p style=\"text-align: center;\"><strong>Pol&iacute;tica de privacidad</strong></p><p><strong>1. Pol&iacute;tica de Privacidad: </strong><br />&nbsp;</p><p>Awslatinoamerica.com informa a los usuarios del sitio web sobre su pol&iacute;tica respecto del tratamiento y protecci&oacute;n de los datos de car&aacute;cter personal de los usuarios y clientes que puedan ser recabados por la navegaci&oacute;n o contrataci&oacute;n de servicios a trav&eacute;s de su sitio web.</p><p>En este sentido, Awslatinoamerica.com garantiza el cumplimiento de la normativa vigente en materia de protecci&oacute;n de datos personales, reflejada en la Ley Org&aacute;nica 15/1999 de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal y en el Real Decreto 1720/2007, de 21 diciembre, por el que se aprueba el Reglamento de Desarrollo de la LOPD.<br />El uso de esta web implica la aceptaci&oacute;n de esta pol&iacute;tica de privacidad.</p><p><strong>2. Recogida, finalidad y tratamientos de datos:</strong></p><p>Awslatinoamerica.com tiene el deber de informar a los usuarios de su sitio web acerca de la recogida de datos de car&aacute;cter personal que pueden llevarse a cabo, bien sea mediante el env&iacute;o de correo electr&oacute;nico o al cumplimentar los formularios incluidos en el sitio web. En este sentido, Empresa A ser&aacute; considerada como responsable de los datos recabados mediante los medios anteriormente descritos.</p><p>A su vez awslatinoamerica.com informa a los usuarios de que la finalidad del tratamiento de los datos recabados contempla: La atenci&oacute;n de solicitudes realizadas por los usuarios, la inclusi&oacute;n en la agenda de contactos, la prestaci&oacute;n de servicios, la gesti&oacute;n de la relaci&oacute;n comercial y otras finalidades. (INDICAR)</p><p>Las operaciones, gestiones y procedimientos t&eacute;cnicos que se realicen de forma automatizada o no automatizada y que posibiliten la recogida, el almacenamiento, la modificaci&oacute;n, la transferencia y otras acciones sobre datos de car&aacute;cter personal, tienen la consideraci&oacute;n de tratamiento de datos personales.</p><p>Todos los datos personales, que sean recogidos a trav&eacute;s del sitio web de awslatinoamerica.com, y por tanto tenga la consideraci&oacute;n de tratamiento de datos de car&aacute;cter personal, ser&aacute;n incorporados en los ficheros declarados ante la Agencia Espa&ntilde;ola de Protecci&oacute;n de Datos por awslatinoamerica.com.</p><p><strong>3. Comunicaci&oacute;n de informaci&oacute;n a terceros:</strong></p><p>Awslainoamerica.com informa a los usuarios de que sus datos personales no ser&aacute;n cedidos a terceras organizaciones, con la salvedad de que dicha cesi&oacute;n de datos est&eacute; amparada en una obligaci&oacute;n legal o cuando la prestaci&oacute;n de un servicio implique la necesidad de una relaci&oacute;n contractual con un encargado de tratamiento. En este &uacute;ltimo caso, s&oacute;lo se llevar&aacute; a cabo la cesi&oacute;n de datos al tercero cuando awslatinoamerica.com disponga del consentimiento expreso del usuario.</p><p><strong>4. Derechos de los usuarios:</strong></p><p>La Ley Org&aacute;nica 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal concede a los interesados la posibilidad de ejercer una serie de derechos relacionados con el tratamiento de sus datos personales.</p><p>En tanto en cuanto los datos del usuario son objeto de tratamiento por parte de awslatinoamerica.com. Los usuarios podr&aacute;n ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de acuerdo con lo previsto en la normativa legal vigente en materia de protecci&oacute;n de datos personales.</p><p>El ejercicio de derechos deber&aacute; ser realizado por el propio usuario. No obstante, podr&aacute;n ser ejecutados por una persona autorizada como representante legal del autorizado. En tal caso, se deber&aacute; aportar la documentaci&oacute;n que acredite esta representaci&oacute;n del interesado.</p><p>&nbsp;</p>','https://lorempixel.com/600/200/?55743',NULL,'est iste consequatur enim laboriosam',NULL,1),(4,'nihil culpa error velit modi','<p style=\"text-align: center;\"><strong>Pol&iacute;tica de privacidad</strong></p><p><strong>1. Pol&iacute;tica de Privacidad: </strong><br />&nbsp;</p><p>Awslatinoamerica.com informa a los usuarios del sitio web sobre su pol&iacute;tica respecto del tratamiento y protecci&oacute;n de los datos de car&aacute;cter personal de los usuarios y clientes que puedan ser recabados por la navegaci&oacute;n o contrataci&oacute;n de servicios a trav&eacute;s de su sitio web.</p><p>En este sentido, Awslatinoamerica.com garantiza el cumplimiento de la normativa vigente en materia de protecci&oacute;n de datos personales, reflejada en la Ley Org&aacute;nica 15/1999 de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal y en el Real Decreto 1720/2007, de 21 diciembre, por el que se aprueba el Reglamento de Desarrollo de la LOPD.<br />El uso de esta web implica la aceptaci&oacute;n de esta pol&iacute;tica de privacidad.</p><p><strong>2. Recogida, finalidad y tratamientos de datos:</strong></p><p>Awslatinoamerica.com tiene el deber de informar a los usuarios de su sitio web acerca de la recogida de datos de car&aacute;cter personal que pueden llevarse a cabo, bien sea mediante el env&iacute;o de correo electr&oacute;nico o al cumplimentar los formularios incluidos en el sitio web. En este sentido, Empresa A ser&aacute; considerada como responsable de los datos recabados mediante los medios anteriormente descritos.</p><p>A su vez awslatinoamerica.com informa a los usuarios de que la finalidad del tratamiento de los datos recabados contempla: La atenci&oacute;n de solicitudes realizadas por los usuarios, la inclusi&oacute;n en la agenda de contactos, la prestaci&oacute;n de servicios, la gesti&oacute;n de la relaci&oacute;n comercial y otras finalidades. (INDICAR)</p><p>Las operaciones, gestiones y procedimientos t&eacute;cnicos que se realicen de forma automatizada o no automatizada y que posibiliten la recogida, el almacenamiento, la modificaci&oacute;n, la transferencia y otras acciones sobre datos de car&aacute;cter personal, tienen la consideraci&oacute;n de tratamiento de datos personales.</p><p>Todos los datos personales, que sean recogidos a trav&eacute;s del sitio web de awslatinoamerica.com, y por tanto tenga la consideraci&oacute;n de tratamiento de datos de car&aacute;cter personal, ser&aacute;n incorporados en los ficheros declarados ante la Agencia Espa&ntilde;ola de Protecci&oacute;n de Datos por awslatinoamerica.com.</p><p><strong>3. Comunicaci&oacute;n de informaci&oacute;n a terceros:</strong></p><p>Awslainoamerica.com informa a los usuarios de que sus datos personales no ser&aacute;n cedidos a terceras organizaciones, con la salvedad de que dicha cesi&oacute;n de datos est&eacute; amparada en una obligaci&oacute;n legal o cuando la prestaci&oacute;n de un servicio implique la necesidad de una relaci&oacute;n contractual con un encargado de tratamiento. En este &uacute;ltimo caso, s&oacute;lo se llevar&aacute; a cabo la cesi&oacute;n de datos al tercero cuando awslatinoamerica.com disponga del consentimiento expreso del usuario.</p><p><strong>4. Derechos de los usuarios:</strong></p><p>La Ley Org&aacute;nica 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal concede a los interesados la posibilidad de ejercer una serie de derechos relacionados con el tratamiento de sus datos personales.</p><p>En tanto en cuanto los datos del usuario son objeto de tratamiento por parte de awslatinoamerica.com. Los usuarios podr&aacute;n ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de acuerdo con lo previsto en la normativa legal vigente en materia de protecci&oacute;n de datos personales.</p><p>El ejercicio de derechos deber&aacute; ser realizado por el propio usuario. No obstante, podr&aacute;n ser ejecutados por una persona autorizada como representante legal del autorizado. En tal caso, se deber&aacute; aportar la documentaci&oacute;n que acredite esta representaci&oacute;n del interesado.</p><p>&nbsp;</p>','https://lorempixel.com/600/200/?58709',NULL,'corrupti et eos quas officia',NULL,1),(5,'asperiores iste autem voluptas mollitia','<p style=\"text-align: center;\"><strong>Pol&iacute;tica de privacidad</strong></p><p><strong>1. Pol&iacute;tica de Privacidad: </strong><br />&nbsp;</p><p>Awslatinoamerica.com informa a los usuarios del sitio web sobre su pol&iacute;tica respecto del tratamiento y protecci&oacute;n de los datos de car&aacute;cter personal de los usuarios y clientes que puedan ser recabados por la navegaci&oacute;n o contrataci&oacute;n de servicios a trav&eacute;s de su sitio web.</p><p>En este sentido, Awslatinoamerica.com garantiza el cumplimiento de la normativa vigente en materia de protecci&oacute;n de datos personales, reflejada en la Ley Org&aacute;nica 15/1999 de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal y en el Real Decreto 1720/2007, de 21 diciembre, por el que se aprueba el Reglamento de Desarrollo de la LOPD.<br />El uso de esta web implica la aceptaci&oacute;n de esta pol&iacute;tica de privacidad.</p><p><strong>2. Recogida, finalidad y tratamientos de datos:</strong></p><p>Awslatinoamerica.com tiene el deber de informar a los usuarios de su sitio web acerca de la recogida de datos de car&aacute;cter personal que pueden llevarse a cabo, bien sea mediante el env&iacute;o de correo electr&oacute;nico o al cumplimentar los formularios incluidos en el sitio web. En este sentido, Empresa A ser&aacute; considerada como responsable de los datos recabados mediante los medios anteriormente descritos.</p><p>A su vez awslatinoamerica.com informa a los usuarios de que la finalidad del tratamiento de los datos recabados contempla: La atenci&oacute;n de solicitudes realizadas por los usuarios, la inclusi&oacute;n en la agenda de contactos, la prestaci&oacute;n de servicios, la gesti&oacute;n de la relaci&oacute;n comercial y otras finalidades. (INDICAR)</p><p>Las operaciones, gestiones y procedimientos t&eacute;cnicos que se realicen de forma automatizada o no automatizada y que posibiliten la recogida, el almacenamiento, la modificaci&oacute;n, la transferencia y otras acciones sobre datos de car&aacute;cter personal, tienen la consideraci&oacute;n de tratamiento de datos personales.</p><p>Todos los datos personales, que sean recogidos a trav&eacute;s del sitio web de awslatinoamerica.com, y por tanto tenga la consideraci&oacute;n de tratamiento de datos de car&aacute;cter personal, ser&aacute;n incorporados en los ficheros declarados ante la Agencia Espa&ntilde;ola de Protecci&oacute;n de Datos por awslatinoamerica.com.</p><p><strong>3. Comunicaci&oacute;n de informaci&oacute;n a terceros:</strong></p><p>Awslainoamerica.com informa a los usuarios de que sus datos personales no ser&aacute;n cedidos a terceras organizaciones, con la salvedad de que dicha cesi&oacute;n de datos est&eacute; amparada en una obligaci&oacute;n legal o cuando la prestaci&oacute;n de un servicio implique la necesidad de una relaci&oacute;n contractual con un encargado de tratamiento. En este &uacute;ltimo caso, s&oacute;lo se llevar&aacute; a cabo la cesi&oacute;n de datos al tercero cuando awslatinoamerica.com disponga del consentimiento expreso del usuario.</p><p><strong>4. Derechos de los usuarios:</strong></p><p>La Ley Org&aacute;nica 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal concede a los interesados la posibilidad de ejercer una serie de derechos relacionados con el tratamiento de sus datos personales.</p><p>En tanto en cuanto los datos del usuario son objeto de tratamiento por parte de awslatinoamerica.com. Los usuarios podr&aacute;n ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de acuerdo con lo previsto en la normativa legal vigente en materia de protecci&oacute;n de datos personales.</p><p>El ejercicio de derechos deber&aacute; ser realizado por el propio usuario. No obstante, podr&aacute;n ser ejecutados por una persona autorizada como representante legal del autorizado. En tal caso, se deber&aacute; aportar la documentaci&oacute;n que acredite esta representaci&oacute;n del interesado.</p><p>&nbsp;</p>','https://lorempixel.com/600/200/?97730',NULL,'consequatur qui totam id quo',NULL,1);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nickname` text COLLATE utf8mb4_unicode_ci,
  `href` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Prof. Cletus Jenkins','Maiores autem incidunt quibusdam odit maxime est.','reymundo.bernhard','http://bradtke.com/'),(2,'Princess Cummerata','Error libero tempore et voluptatem delectus.','rebecca.braun','http://www.runolfsdottir.org/quod-ut-sit-adipisci-facere-ea-similique.html'),(3,'Casandra Pollich','Fugit dolores voluptatem assumenda eius recusandae.','dschaefer','http://www.schaden.com/et-ratione-a-odio-ut-quisquam-voluptatem');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `big` tinyint(1) DEFAULT '0',
  `href` text COLLATE utf8mb4_unicode_ci,
  `link_name` text COLLATE utf8mb4_unicode_ci,
  `section` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'¿Quienes somos?','explicabo labore vel sed dicta aliquam mollitia qui quibusdam perspiciatis et libero aut libero pariatur sed atque facilis repudiandae ipsum illum quia tenetur et numquam perspiciatis id aut placeat adipisci aperiam quia itaque ut dolor mollitia dolorum veniam eum omnis quidem dignissimos perferendis quisquam rerum suscipit non delectus nesciunt exercitationem nulla nobis quis neque laborum tempore non fugit voluptatem nobis neque voluptatem delectus expedita aut voluptatibus itaque sed temporibus dolorem odio non voluptas non iure consequatur voluptas vel dicta ea nostrum in voluptates et sunt et mollitia aperiam vitae iure similique voluptatibus dolor veritatis officia id dolorum atque est similique','fa fa-database fa-4x',1,'#contact-form-id','Más informacion',1),(2,'nesciunt qui deleniti','sed ipsum accusamus vitae eos est voluptatibus nesciunt quo natus enim qui magnam odio est aliquam velit odio perferendis similique consequatur quia aliquid inventore quis','fas fa-server fa-4x',0,'/blog/1/ducimus','Más informacion',1),(3,'molestias fugiat odio','eos error rerum vero quo enim modi cum ut sint aut architecto ea sunt dignissimos atque aut non id consectetur alias maiores soluta rerum harum','fas fa-box fa-4x',0,'/blog/1/ducimus','Más informacion',1),(4,'voluptatem ut provident','in quo ea et totam autem ipsam sed corporis minus exercitationem repellendus fuga dolores ut a eos vel quia dicta earum omnis magni maxime voluptas','fas fa-power-off fa-4x',0,'/blog/1/ducimus','Más informacion',1),(5,'ex repellendus omnis','ut maiores aperiam distinctio itaque aut distinctio qui quia impedit aperiam numquam doloribus ut quidem nihil iure praesentium et recusandae iste voluptatum nihil quibusdam et','fas fa-upload fa-4x',0,'/blog/1/ducimus','Más informacion',1),(6,'nostrum et laudantium','et ea deleniti dolores sunt asperiores doloremque sit qui non asperiores totam quia dolores qui et dicta libero reiciendis nihil quaerat porro praesentium rerum id','fa fa-calendar fa-4x',0,'/blog/1/ducimus','Más informacion',1),(7,'rerum quo omnis','qui rerum laborum nihil et corrupti eum eveniet iste eaque unde molestias ipsa doloribus aut consectetur sint accusamus et magnam assumenda porro aut quia accusantium','fas fa-tablet-alt fa-4x',0,'/blog/1/ducimus','Más informacion',1);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci,
  `status` enum('available','unavailable') COLLATE utf8mb4_unicode_ci DEFAULT 'available',
  `limit` int(11) DEFAULT NULL,
  `type` enum('amount','percentage') COLLATE utf8mb4_unicode_ci DEFAULT 'percentage',
  `amount` double DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `web` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `href` text COLLATE utf8mb4_unicode_ci,
  `navbar` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'info@test.com','fa fa-envelope icon-left','/#contact-form-id',1),(2,' 55 5555 555 55','fa fas fa-phone','/#contact-form-id',1),(3,'Contacto','','/#contact-form-id',0),(4,'Servicios','','/#contact-form-id',0),(5,'Nosotros','','/#contact-form-id',0),(6,'Clientes','','/#contact-form-id',0);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=757 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (739,'2020_11_30_084705_create_blog_table',1),(740,'2020_11_30_084705_create_comments_table',1),(741,'2020_11_30_084705_create_content_table',1),(742,'2020_11_30_084705_create_coupons_table',1),(743,'2020_11_30_084705_create_customers_table',1),(744,'2020_11_30_084705_create_menu_table',1),(745,'2020_11_30_084705_create_message_table',1),(746,'2020_11_30_084705_create_notifications_table',1),(747,'2020_11_30_084705_create_password_resets_table',1),(748,'2020_11_30_084705_create_popupads_table',1),(749,'2020_11_30_084705_create_quick_pay_table',1),(750,'2020_11_30_084705_create_services_table',1),(751,'2020_11_30_084705_create_settings_table',1),(752,'2020_11_30_084705_create_sliders_table',1),(753,'2020_11_30_084705_create_suscribers_table',1),(754,'2020_11_30_084705_create_templates_table',1),(755,'2020_11_30_084705_create_transactions_table',1),(756,'2020_11_30_084705_create_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `popupads`
--

DROP TABLE IF EXISTS `popupads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `popupads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `href` text COLLATE utf8mb4_unicode_ci,
  `continent` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `popupads`
--

LOCK TABLES `popupads` WRITE;
/*!40000 ALTER TABLE `popupads` DISABLE KEYS */;
INSERT INTO `popupads` VALUES (1,'Publicidad 1','https://lorempixel.com/600/600/?53870','http://www.durgan.com/illum-voluptatem-ratione-qui-fugiat-dolor-sint-nihil-rerum.html','EU','USD');
/*!40000 ALTER TABLE `popupads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quick_pay`
--

DROP TABLE IF EXISTS `quick_pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `quick_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `id_agent` int(11) DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quick_pay`
--

LOCK TABLES `quick_pay` WRITE;
/*!40000 ALTER TABLE `quick_pay` DISABLE KEYS */;
/*!40000 ALTER TABLE `quick_pay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `price` double DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `href` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'est','beatae doloremque quis',249,'adipisci temporibus labore fugiat quasi','soluta quibusdam ut vitae veniam alias possimus temporibus','1'),(2,'qui','nihil qui deserunt',897,'magnam sint optio voluptatibus quia','vitae maxime adipisci omnis accusantium aut quia natus','1'),(3,'deleniti','quaerat sit consequatur',394,'molestiae veritatis facilis est illo','nobis id earum tempore ut id a mollitia','1'),(4,'sequi','id error vel',816,'minus quos esse labore error','amet sunt animi repellendus odit veritatis at libero','1'),(5,'omnis','nihil et ea',678,'nesciunt est quo provident quos','repudiandae necessitatibus sit sed dolores vel eius reiciendis','1'),(6,'est','sapiente vero qui',625,'occaecati dicta nam cupiditate necessitatibus','in fugiat architecto similique qui ratione occaecati officiis','1');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sett_key` text COLLATE utf8mb4_unicode_ci,
  `sett_value` text COLLATE utf8mb4_unicode_ci,
  `enabled` tinyint(1) DEFAULT '0',
  `meta` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'description','Micro CSM, Experto en desarrollo tecnológico tanto en back como en frontend. 8 años de experiencia trabajando para numerosas empresas actualmente liderando un equipo. https://github.com/leifermendez',0,1),(2,'title','Micro CSM | Blog creado con Laravel y MySQL Gratis www.codigoencasa.com . https://github.com/leifermendez',0,0),(3,'email','youremail@gmail.com',0,0),(4,'email_name','Ey tienes un mensaje',0,0),(5,'email_subject','Contacto desde mi pagina',0,0),(6,'email_from','no-reply@awslatinoamerica.com',0,0),(7,'og:image','https://avatars3.githubusercontent.com/u/15802366?s=460&u=59125ba37dfb5f0e87ee5f8c83280c88129a8881&v=4',0,1),(8,'theme-color','#2c3645',0,1),(9,'google','<script></script>',1,1);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `href` text COLLATE utf8mb4_unicode_ci,
  `name_link` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'slider1','<mark>SITIO WEB</mark> asombroso','Esto es open source, colabora con nuestro repositorio en https://github.com/leifermendez','https://github.com/leifermendez',NULL,'https://demo.serifly.com/cloudhub/html/uploads/server-shared.png');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suscribers`
--

DROP TABLE IF EXISTS `suscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `suscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `web` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suscribers`
--

LOCK TABLES `suscribers` WRITE;
/*!40000 ALTER TABLE `suscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `suscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `email_title` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `templates`
--

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text COLLATE utf8mb4_unicode_ci,
  `amount` double DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `currency` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `id_agent` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `coupon` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` enum('admin','agent','user') COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `phone` text COLLATE utf8mb4_unicode_ci,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `skype` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','admin@admin.com','$2y$10$ZQYSvnsksexm/dWHyC8FNumdlN8BgUgXDmzBFt4jCIK9SSMOHihde',NULL,NULL,NULL,'admin','667-912-0659 x9795','https://lorempixel.com/100/100/?80727','dolores41'),(2,'Agente','agente@agente.com','$2y$10$YelJ8qPbA76E91lYQPafLu8w2MZkOLP.zKEqnjraZkR4aTGi1EKty',NULL,NULL,NULL,'agent','1-280-590-2342','https://lorempixel.com/100/100/?59379','herman.walter'),(3,'Usuario','user@user.com','$2y$10$0YOLhm5n/4kZfbuZUAoy5eaqNTqks7gk7e.mapVF7srOILYMoLany',NULL,NULL,NULL,'user','(984) 674-0387 x9483','https://lorempixel.com/100/100/?16906','wisoky.cortney');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-02 21:04:27
