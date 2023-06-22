DROP TABLE IF EXISTS Auteurs ;
CREATE TABLE Auteurs (
idAuteur int AUTO_INCREMENT NOT NULL,
NomAuteur VARCHAR(250),
PrenomAuteur VARCHAR(250),
PRIMARY KEY (idAuteur) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Livres ;
CREATE TABLE Livres (idLivre int AUTO_INCREMENT NOT NULL,
Titre VARCHAR(250),
idRayon INT,
imgpath VARCHAR(250),
PRIMARY KEY (idLivre) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Rayons ;
CREATE TABLE Rayons (idRayon int AUTO_INCREMENT NOT NULL,
NomRayon VARCHAR(250),
PRIMARY KEY (idRayon) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Adherents ;
CREATE TABLE Adherents (idAdherent int AUTO_INCREMENT NOT NULL,
NomAdherent VARCHAR(250),
PrenomAdherent VARCHAR(250),
PRIMARY KEY (idAdherent) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Motcles ;
CREATE TABLE Motcles (idMotCle int AUTO_INCREMENT NOT NULL,
MotCle VARCHAR(250),
PRIMARY KEY (idMotCle) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Bibliotheques ;
CREATE TABLE Bibliotheques (idBibliotheque int AUTO_INCREMENT NOT NULL,
PRIMARY KEY (idBibliotheque) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Exemplaires ;
CREATE TABLE Exemplaires (idExemplaire int AUTO_INCREMENT NOT NULL,
idLivre INT NOT NULL,
PRIMARY KEY (idExemplaire) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Correspond ;
CREATE TABLE Correspond (idAuteur int AUTO_INCREMENT NOT NULL,
idLivre INT NOT NULL,
PRIMARY KEY (idAuteur,
 idLivre) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Rechercher ;
CREATE TABLE Rechercher (idLivre int AUTO_INCREMENT NOT NULL,
idMotCle INT NOT NULL,
PRIMARY KEY (idLivre,
 idMotCle) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Emprunter ;
CREATE TABLE Emprunter (idAdherent int AUTO_INCREMENT NOT NULL,
idExemplaire INT NOT NULL,
PRIMARY KEY (idAdherent,
 idExemplaire) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Detient ;
CREATE TABLE Detient (idExemplaire int AUTO_INCREMENT NOT NULL,
idBibliotheque INT NOT NULL,
PRIMARY KEY (idExemplaire,
 idBibliotheque) ) ENGINE=InnoDB;

ALTER TABLE Livres ADD CONSTRAINT FK_Livres_idRayon FOREIGN KEY (idRayon) REFERENCES Rayons (idRayon);

ALTER TABLE Exemplaires ADD CONSTRAINT FK_Exemplaires_idLivre FOREIGN KEY (idLivre) REFERENCES Livres (idLivre);

ALTER TABLE Correspond ADD CONSTRAINT FK_Correspond_idAuteur FOREIGN KEY (idAuteur) REFERENCES Auteurs (idAuteur);
ALTER TABLE Correspond ADD CONSTRAINT FK_Correspond_idLivre FOREIGN KEY (idLivre) REFERENCES Livres (idLivre);

ALTER TABLE Rechercher ADD CONSTRAINT FK_Rechercher_idLivre FOREIGN KEY (idLivre) REFERENCES Livres (idLivre);

ALTER TABLE Rechercher ADD CONSTRAINT FK_Rechercher_idMotCle FOREIGN KEY (idMotCle) REFERENCES Motcles (idMotCle);

ALTER TABLE Emprunter ADD CONSTRAINT FK_Emprunter_idAdherent FOREIGN KEY (idAdherent) REFERENCES Adherents (idAdherent);

ALTER TABLE Emprunter ADD CONSTRAINT FK_Emprunter_idExemplaire FOREIGN KEY (idExemplaire) REFERENCES Exemplaires (idExemplaire);

ALTER TABLE Detient ADD CONSTRAINT FK_Detient_idExemplaire FOREIGN KEY (idExemplaire) REFERENCES Exemplaires (idExemplaire);

ALTER TABLE Detient ADD CONSTRAINT FK_Detient_idBibliotheque FOREIGN KEY (idBibliotheque) REFERENCES Bibliotheques (idBibliotheque);

--nuke
delete from Adherents;
alter table Adherents AUTO_INCREMENT = 1;
delete from auteurs;
alter table auteurs AUTO_INCREMENT = 1;
delete from Bibliotheques;
alter table Bibliotheques AUTO_INCREMENT = 1;
delete from correspond;
alter table correspond AUTO_INCREMENT = 1;
delete from detient;
alter table detient AUTO_INCREMENT = 1;
delete from Emprunter;
alter table Emprunter AUTO_INCREMENT = 1;
delete from exemplaires;
alter table exemplaires AUTO_INCREMENT = 1;
delete from livres;
alter table livres AUTO_INCREMENT = 1;
delete from motcles;
alter table motcles AUTO_INCREMENT = 1;
delete from rayons;
alter table rayons AUTO_INCREMENT = 1;
delete from rechercher;
alter table rechercher AUTO_INCREMENT = 1;

--ajout données:
-- d'abord ajout d'un rayon
INSERT INTO Rayons(NomRayon)
VALUES
('Poesie'),
('Exploration'),
('Fantastique');

--ajout de livre
INSERT INTO Livres (Titre,idRayon,imgpath)
VALUES
('Demain les chats','1','./Images/BW-LesChats.jpg'),
('Demain une oasis','2','./Images/A-DemainUneOasis.jfif'),
('La horde du contrevent','3','./Images/AD-LaHordeDuContrevent.jpg'),
('Autre monde','2','./Images/MC-AutreMonde.jpeg'),
('Les arcanes du chaos','3','./Images/MC-LesArcanesDuChaos.jpg'),
('Le manuscrit inachevé','3','./Images/FT-LesManuscritInacheve.jpg');

--ajout d'auteur
INSERT INTO Auteurs (NomAuteur,PrenomAuteur)
VALUES
('WERBER','Bernard'),
('AYERDAHL',NULL),
('DAMASIO','ALAIN'),
('CHATAM','MAXIME'),
('THILLIEZ','FRANCK');

--correspondance auteur<->livre
INSERT INTO correspond(idAuteur,idLivre)
VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(4,5),
(5,6);

--procédure pour ajout dans le noeud )livre( :
ajout rayon(si aucun existant au préalable, ou si livre correspondant à rayon non existant)
ajout [livre,rayon] 
ajout auteur
ajout correspondance livre<->auteur

--procédure pour suppression dans le noeud livre :
supprimer correspondance livre<->auteur
suppression livre
suppression auteur

requete suppression :


alter table Livres add imgpath varchar(250);