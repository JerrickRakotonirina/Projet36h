create database takalo;
use takalo;

create table membre(
    id_membre int PRIMARY KEY auto_increment,
    nom varchar(40) NOT NULL,
    email varchar(40) NOT NULL UNIQUE,
    mdp varchar(20) NOT NULL,
    est_Admin int NOT NULL
);

create table categorie(
    id_categorie int PRIMARY KEY auto_increment,
    nom_categorie varchar(40) NOT NULL
);

create table objet(
    id_objet int PRIMARY KEY auto_increment,
    id_categorie int NOT NULL,
    id_membre int NOT NULL,
    titre varchar(40) NOT NULL,
    photo varchar(40) NOT NULL,
    prix_estimatif float NOT NULL,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre) 
);

create table proposition(
    id_proposition int PRIMARY KEY auto_increment,
    id_objet1 int NOT NULL,
    id_Objet2 int NOT NULL,
    confirmation BOOLEAN NOT NULL,
    FOREIGN KEY (id_objet1) REFERENCES objet(id_objet),
    FOREIGN KEY (id_objet2) REFERENCES objet(id_objet)
);

create table historique(
    id_historique int PRIMARY KEY auto_increment,
    id_ancien_proprietaire int,
    id_nv_proprietaire int,
    date_echange DATETIME,
    FOREIGN KEY (id_ancien_proprietaire) REFERENCES membre(id_membre),
    FOREIGN KEY (id_nv_proprietaire) REFERENCES membre(id_membre)

);

INSERT INTO membre VALUES (NULL,'RAKOTOBE','rakotobe@gmail.com','1234','1');
INSERT INTO membre VALUES (NULL,'RAKOTOSON','rakotoson@gmail.com','1234','0');
INSERT INTO membre VALUES (NULL,'RAKOTOARISOA','rakotoarisoa@gmail.com','1234','0');


INSERT INTO categorie VALUES (NULL,'Vetements');
INSERT INTO categorie VALUES (NULL,'Livre');
INSERT INTO categorie VALUES (NULL,'DVD');
INSERT INTO categorie VALUES (NULL,'Autre');

INSERT INTO objet VALUES (NULL,1,2,'T-Shirt','t_shirt.webp',10000);
INSERT INTO objet VALUES (NULL,1,3,'Polo','polo.webp',15000);
INSERT INTO objet VALUES (NULL,2,2,'BD','bd_spider.png',5000);
INSERT INTO objet VALUES (NULL,2,3,'Roman','roman.png',7000);
INSERT INTO objet VALUES (NULL,3,2,'FIFA 23','fifa.png',150000);
INSERT INTO objet VALUES (NULL,3,3,'NBA 2k23','nba.png',130000);
INSERT INTO objet VALUES (NULL,4,2,'Stylo','stylo.png',1000);
INSERT INTO objet VALUES (NULL,4,3,'Gourde','gourde.png',3000);

INSERT INTO proposition VALUES (NULL,1,2,true);
INSERT INTO proposition VALUES (NULL,5,6,false);


-- select p.id_proposition, p.id_objet1, m1.nom, p.id_objet2, m2.nom from proposition p join objet o1 on p.id_objet1=o1.id_objet join objet o2 on p.id_objet2=o2.id_objet join membre m1 on o1.id_membre=m1.id_membre join membre m2 on o2.id_membre=m2.id_membre where confirmation=0 and o1.id_membre='$id_user'
