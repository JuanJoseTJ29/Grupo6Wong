/* Delimitador cambiado a ; */
/* Conectando a localhost por MariaDB or MySQL (TCP/IP), usuario root, usando contraseña: No ... */
SELECT CONNECTION_ID();
/* Conectado. ID de Hilo: 8 */
/* Juego de caracteres: utf8mb4 */
SHOW STATUS;
SELECT NOW();
SHOW VARIABLES;
SHOW DATABASES;
SHOW OPEN TABLES FROM shs WHERE `in_use`!=0;
USE `shs`;
/* Entrando a la sesión "Laragon" */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='shs';
SHOW TABLE STATUS FROM `shs`;
SHOW FUNCTION STATUS WHERE `Db`='shs';
SHOW PROCEDURE STATUS WHERE `Db`='shs';
SHOW TRIGGERS FROM `shs`;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='information_schema';
SHOW TABLE STATUS FROM `information_schema`;
SHOW FUNCTION STATUS WHERE `Db`='information_schema';
SHOW PROCEDURE STATUS WHERE `Db`='information_schema';
SHOW TRIGGERS FROM `information_schema`;
SHOW EVENTS FROM `information_schema`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='shs';
/* Loading file "C:\Users\Juan Jose Tirado\Downloads\consulta1.sql" (1,0 KiB) into query tab #1 ... */
SHOW CREATE TABLE `shs`.`servicios`;
SHOW COLLATION;
SHOW ENGINES;