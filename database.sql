CREATE TABLE user (
  id int(30) NOT NULL AUTO_INCREMENT,
  nom varchar(100) DEFAULT NULL,
  prenom varchar(100) DEFAULT NULL,
  mail varchar(150) DEFAULT NULL,
  mdp varchar(200) DEFAULT NULL,
  role varchar(30) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE historique (
  id int(30) NOT NULL AUTO_INCREMENT,
  iduser int NOT NULL,
  question varchar(500) DEFAULT NULL,
  reponse varchar(500) DEFAULT NULL,
  options varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


create table categorie(
    id int auto_increment primary key,
    nom varchar(300),
    type varchar(30)
);

create table souscategorie(
    id int auto_increment primary key,
    nom varchar(300),
    idcategorie int,
    description varchar(300),
    foreign key(idcategorie) references categorie (id)
);

insert into categorie values (null,'personne','text');
insert into categorie values (null,'activite','text');
insert into categorie values (null,'endroit','text');
insert into categorie values (null,'temps','text');
insert into categorie values (null,'emotion','text');
insert into categorie values (null,'reve','text');

-- personne
insert into souscategorie values (null,'inconnu','1',null);
insert into souscategorie values (null,'ex','1',null);
insert into souscategorie values (null,'partenaire','1',null);
insert into souscategorie values (null,'membre de la famille','1',null);
insert into souscategorie values (null,'ami','1',null);
insert into souscategorie values (null,'ennemi','1',null);
insert into souscategorie values (null,'voisin','1',null);
insert into souscategorie values (null,'connaissance','1',null);
insert into souscategorie values (null,'rencontre sur les réseaux','1',null);
insert into souscategorie values (null,'mentor/enseignant','1',null);
insert into souscategorie values (null,'collegue','1',null);
insert into souscategorie values (null,'seul','1',null);


-- activite
insert into souscategorie values (null,'se balader','2',null);
insert into souscategorie values (null,'marcher','2',null);
insert into souscategorie values (null,'courir','2',null);
insert into souscategorie values (null,'manger','2',null);
insert into souscategorie values (null,'boire','2',null);
insert into souscategorie values (null,'fumer','2',null);
insert into souscategorie values (null,'regarder un film','2',null);
insert into souscategorie values (null,'chill','2',null);
insert into souscategorie values (null,'rien','2',null);


-- endroit
insert into souscategorie values (null,'dans une maison','3',null);
insert into souscategorie values (null,'dans une voiture','3',null);
insert into souscategorie values (null,'dehors','3',null);
insert into souscategorie values (null,'dans un restaurant','3',null);
insert into souscategorie values (null,'dans une foret','3',null);
insert into souscategorie values (null,'sur un bateau','3',null);
insert into souscategorie values (null,'à la salle de cinéma','3',null);
insert into souscategorie values (null,'pas précis','3',null);


-- temps
insert into souscategorie values (null,'dans la journée','4',null);
insert into souscategorie values (null,'le soir','4',null);
insert into souscategorie values (null,'la nuit','4',null);
insert into souscategorie values (null,'pas précis','4',null);

-- emotion
insert into souscategorie values (null,'content','5',null);
insert into souscategorie values (null,'triste','5',null);
insert into souscategorie values (null,'en colère','5',null);
insert into souscategorie values (null,'peur','5',null);
insert into souscategorie values (null,'surpris','5',null);
insert into souscategorie values (null,'amoureux','5',null);
insert into souscategorie values (null,'excite','5',null);
insert into souscategorie values (null,'decu','5',null);
insert into souscategorie values (null,'pas précis','5',null);

-- reve
insert into souscategorie values (null,'lucide','6',null);
insert into souscategorie values (null,'cauchemar','6',null);
insert into souscategorie values (null,'supernaturel','6',null);
insert into souscategorie values (null,'créatif','6',null);
insert into souscategorie values (null,'récurrent','6',null);
insert into souscategorie values (null,'normal','6',null);


ALTER TABLE historique MODIFY COLUMN question TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL NULL;
ALTER TABLE historique MODIFY COLUMN reponse TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL NULL;
ALTER TABLE historique MODIFY COLUMN `options` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL NULL;

ALTER TABLE historique ADD is_specifique INT NULL;

