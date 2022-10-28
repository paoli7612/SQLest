use my_tomaoli;

CREATE TABLE `temi`(
    `id` int(16) PRIMARY KEY AUTO_INCREMENT,
    `colore` varchar(16) UNIQUE NOT NULL
);

CREATE TABLE `persone` (
    `id` int(16) PRIMARY KEY AUTO_INCREMENT,
    `nome` varchar(16) NOT NULL,
    `cognome` varchar(16) NOT NULL,
    `nascita` date
);

CREATE TABLE `utenti`(
    `id` int(16) PRIMARY KEY AUTO_INCREMENT,
    `idPersona` int(16) NOT NULL,
    `email` varchar(32) UNIQUE NOT NULL,
    `password` char(64),
    `idTema` int(16) DEFAULT ('1'),
    `isAmministratore` bit(1) NOT NULL DEFAULT 0,
    FOREIGN KEY (`idTema`)
        REFERENCES `temi` (`id`)
        ON DELETE SET NULL,
    FOREIGN KEY (`idPersona`)
        REFERENCES `persone` (`id`)
        ON DELETE CASCADE
);

CREATE TABLE `modelliMacchine` (
    `id` int(16) PRIMARY KEY AUTO_INCREMENT,
    `marca` varchar(32) NOT NULL,
    `nome` varchar(16) UNIQUE NOT NULL
);

CREATE TABLE `macchine` (
    `id` int(16) PRIMARY KEY AUTO_INCREMENT,
    `colore` enum('red', 'black', 'white', 'yellow', 'green'),
    `matricola` char(16) UNIQUE NOT NULL,
    `idModello` int(16) NOT NULL,
    FOREIGN KEY (`idModello`)
        REFERENCES `modelliMacchine` (`id`)
);

CREATE TABLE `personaPossiedeMacchina` (
    `id` int(16) PRIMARY KEY AUTO_INCREMENT,
    `idPersona` int(16) NOT NULL,
    `idMacchina` int(16) UNIQUE NOT NULL,
    FOREIGN KEY (`idPersona`)
        REFERENCES `persone` (`id`),
    FOREIGN KEY (`idMacchina`)
        REFERENCES `macchine` (`id`)
);

CREATE TABLE `abitazioni` (
    `id` int(16) PRIMARY KEY AUTO_INCREMENT,
    `idPersona` int(16) NOT NULL,
    `indirizzo` varchar(64) NOT NULL,
    `valore` float,
    FOREIGN KEY (`idPersona`)
        REFERENCES `persone` (`id`)
);

