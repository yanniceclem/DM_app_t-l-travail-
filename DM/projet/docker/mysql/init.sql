CREATE TABLE Employe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    poste VARCHAR(50),
    email VARCHAR(100)
);

CREATE TABLE ModeTravail (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_employe INT,
    type ENUM('presentiel', 'teletravail'),
    jour VARCHAR(20),
    FOREIGN KEY (id_employe) REFERENCES Employe(id) ON DELETE CASCADE
);

INSERT INTO Employe (nom, prenom, poste, email) VALUES
('Dupont', 'Jean', 'Developpeur', 'jean.dupont@example.com'),
('Martin', 'Claire', 'RH', 'claire.martin@example.com');

INSERT INTO ModeTravail (id_employe, type, jour) VALUES
(1, 'presentiel', 'Lundi'),
(1, 'teletravail', 'Mardi'),
(2, 'teletravail', 'Mercredi');
