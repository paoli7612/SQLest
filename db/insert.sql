INSERT INTO temi (colore) VALUES
    ('red'),
    ('green'),
    ('blue'),
    ('yellow');

INSERT INTO persone (nome, cognome, nascita) VALUES
    ('Tommaso', 'Paoli', '20000521'),
    ('Luca', 'Poretti', '20000721'),
    ('Noemi', 'Storti', '19980725'),
    ('Cristina', 'Guarini', '19980711'),
    ('Giovanna', 'Fermi', '19980221'),
    ('Paola', 'Polla', '20020701'),
    ('Tommaso', 'Lundini', '20020021');

INSERT INTO utenti (idpersona, email, `password`) VALUES
    (1, 'paoli7612@gmail.com', 'qwerty'),
    (1, 'tommaso@gmail.com', 'qwerty'),
    (2, 'lucapo@gmail.com', 'qwerty'),
    (3, 'nomina@gmail.com', 'qwerty'),
    (4, 'cristina@gmail.com', 'qwerty'),
    (4, 'guarini@gmail.com', 'qwerty'),
    (5, 'fermigiovanna@gmail.com', 'qwerty'),
    (6, 'polliona@gmail.com', 'qwerty'),
    (6, 'paolona@gmail.com', 'qwerty'),
    (7, 'tommalundini@gmail.com', 'qwerty');

INSERT INTO modelliMacchine (marca, nome) VALUES
    ('Fiat', 'Stilo'),
    ('Fiat', 'Albea'),
    ('Fiat', 'Ducato'),
    ('Audi', 'A1'),
    ('Audi', 'A2'),
    ('Audi', 'A4');

INSERT INTO macchine (colore, matricola, idModello) VALUES
    ('red', '1726384726384928', 1),
    ('black', '1726314726284928', 3),
    ('blue', '1726374776374978', 4),
    ('white', '1726384323383938', 6),
    ('red', '9926384323383938', 6),
    ('red', '1726111116184928', 2);

INSERT INTO abitazioni (idPersona, indirizzo, valore) VALUES
    (1, 'Via Luigi Carlo Farini, 12, 41121 Modena MO', 150000),
    (3, 'Via Luigi Carlo Farini, 14, 41121 Modena MO', 180000),
    (1, 'Via Luigi Carlo Farini, 15, 41121 Modena MO', 170000),
    (5, 'Via Luigi Carlo Farini, 16, 41121 Modena MO', 160000);