drop database if exists gestion_stag;
create database if not exists gestion_stag;
use gestion_stag;

create table stagiaire(
    idStagiaire int(4) auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
    civilite varchar(1),
    organisme varchar(80),
    direction varchar(80),
    photo varchar(100),
    idFiliere int(4)
);

create table filiere(
    idFiliere int(4) auto_increment primary key,
    nomFiliere varchar(50),
    niveau varchar(50)
);

create table utilisateur(
    iduser int(4) auto_increment primary key,
    login varchar(50),
    email varchar(255),
    role varchar(50),   -- admin ou visiteur
    etat int(1),        -- 1:activé 0:desactivé
    pwd varchar(255)
);

Alter table stagiaire add constraint 
    foreign key(idFiliere) references filiere(idFiliere);

INSERT INTO filiere(nomFiliere,niveau) VALUES
	('Base de données','TS'),
	('Réseaux','TS'),
	('Maintenance','TS'),
	('Comptabilité','TS'),
	('GRH','TS');	
	
	
INSERT INTO utilisateur(login,email,role,etat,pwd) VALUES 
    ('admin','admin@gmail.com','ADMIN',1,md5('admin2024')),
    ('user1','user1@gmail.com','Gestionnaire',0,md5('12345'));
   
ALTER TABLE stagiaire
ADD date_debut DATE,
ADD duree INT;

DELETE FROM stagiaire;

INSERT INTO stagiaire(nom, prenom, civilite, organisme, direction, photo, idFiliere, date_debut, duree) VALUES
('KHALDI', 'FATIMA ZOHRA', 'F', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 1, '2024-05-24', 30),
('SI AHMED', 'HAFSA', 'F', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 1, '2024-05-01', 15),
('DAROUICHE', 'AMINA', 'F', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 2, '2024-03-26', 15),
('GUENINE', 'ROUMAISSA', 'F', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 2, '2024-01-27', 30),
('BELHAFIANE', 'YOUSRA', 'F', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 2, '2024-04-28', 15),
('CHERIFI', 'AYA MALAK', 'F', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 1, '2024-03-29', 30),
('FARSI', 'ROUMAISSA', 'F', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 3, '2024-04-30', 30),
('OUKIL', 'HICHEM', 'M', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 1, '2024-05-31', 30),
('LABIOD', 'ZAKARIA', 'M', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 1, '2024-03-01', 30),
('OUAHRANI', 'ABDELILLAH', 'M', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 3, '2024-04-02', 15),
('BETTAYEB', 'ISSAM EDDINE', 'M', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 2, '2024-05-03', 30),
('BENTAIB', 'IMED EDDINE', 'M', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 2, '2024-04-04', 15),
('BENSAHA', 'ABDEL MADJID', 'M', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 1, '2024-05-05', 30),
('TOUILEB', 'MOHAMED', 'M', 'CFPA EL HAMRI', 'D.Digitalisation et Numérisation', 'user1.jpg', 1, '2024-03-06', 15);
    
    
  

select * from filiere;
select * from stagiaire;
select * from utilisateur;


