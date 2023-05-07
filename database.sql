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


CREATE TABLE historiqueImage (
  id int(30) NOT NULL AUTO_INCREMENT,
  cle varchar(50) DEFAULT NULL,
  reponse text DEFAULT NULL,
  PRIMARY KEY (id)
);


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

-- categorie des options en texte
insert into categorie values (null,'personne','text');
insert into categorie values (null,'activite','text');
insert into categorie values (null,'endroit','text');
insert into categorie values (null,'temps','text');
insert into categorie values (null,'emotion','text');
insert into categorie values (null,'reve','text');

-- categorie des images
insert into categorie values (null,'couleur','image');
insert into categorie values (null,'forme','image');
insert into categorie values (null,'animal','image');
insert into categorie values (null,'endroit','image');


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

--pour les images

--couleur
insert into souscategorie values (null,'noir','7','desespoir|le noir symbolise le mystère, l\'inconscient, la mort, la peur, l\'obscurité,l\'anxiété');
insert into souscategorie values (null,'rouge','7','confusion|le rouge symbolise l\'amour, la passion, l\'énergie positive ou négative, l\'amour, la colère, l\'excitation ou encore le danger');
insert into souscategorie values (null,'bleu','7','en paix|le bleu symbolise la tranquillité, la sérénité, la paix, la confiance, l\'harmonie ou la spiritualité');
insert into souscategorie values (null,'blanc','7','confiance|le blanc symbolise la pureté, l\'innocence, la paix, la clarté, la spiritualité et la lumière.');
insert into souscategorie values (null,'vert','7','chanceux|le vert représente la santé et guérison, une lueur d\'espoir mais surtout la chance');

--forme
insert into souscategorie values (null,'rond','8','desespoir|le cercle représente la sensation d\'être pris au piège, de tourner en rond sans espoir de trouver une solution ou un soulagement. Il symbolise une impasse, une stagnation et une absence de perspectives positives');
insert into souscategorie values (null,'carré','8','confiance|le carré représenter la stabilité, l\'ordre, la structure et la rigueur. Il peut également évoquer des concepts tels que la logique, la rationalité et l\'organisation');
insert into souscategorie values (null,'triangle','8','confusion|le triangle symbolise le changement, la progression et la croissance. Mais cela peut être positif ou négatif, une progression ou une régression');
insert into souscategorie values (null,'coeur','8','en paix|le coeur est souvent associée aux émotions, à l\'amour, à la passion et aux relations affectives. Il peut représenter des sentiments de désir ou d\'affection envers quelqu\'un ou quelque chose.');
insert into souscategorie values (null,'etoile','8','chanceux| L\'étoile est souvent associée à la lumière, à la clarté et à la guidance. Elle représente une source d\'orientation, de vérité et d\'inspiration dans l\'obscurité.');

--animal
insert into souscategorie values (null,'chat','9','chanceux|le chat est associé à l\'indépendance, la souplesse, la curiosité et la perception. Il peut aussi être associé à des idées de ruse, de manipulation ou de secrets');
insert into souscategorie values (null,'requin','9','confusion|le requin est associé à des idées de peur, de danger, de force et de prédateur. Il peut également représenter l\'agilité');
insert into souscategorie values (null,'lion','9','confiance|le lion est souvent associé à des qualités de force, de courage, de leadership et de fierté. Il symbolise également la force intérieure et confiance en soi');
insert into souscategorie values (null,'loup','9','desespoir|le loup est souvent associé à la peur et à la solitude. Il peut représenter des instincts primitifs, des peurs internes et une méfiance envers les autres.');
insert into souscategorie values (null,'colombe','9','en paix|la colombe est associée à des messages de tranquillité, de réconciliation et de cessation des hostilités');

--endroit
insert into souscategorie values (null,'foret','10','desespoir|la forêt représente les parties cachées de l\'esprit et les aspects profonds de soi-même. Elle représente également le mystère et l\'inconnu, représente aussi le danger');
insert into souscategorie values (null,'plage','10','confiance|la plage représente la liberté et l\'ouverture, un équilibre émotionnel ainsi que la détente et la tranquillité');
insert into souscategorie values (null,'ville','10','confusion|la ville est associée à l\'interaction sociale et vie sociale, mais aussi l\'anxiété et le désordre');
insert into souscategorie values (null,'campagne','10','en paix|la campagne représente le calme, la simplicité et l\'authenticité');
insert into souscategorie values (null,'eglise','10','chanceux|l\'eglise représente le spirituel et le calme ou tu peux avoir de nouvelle chance selon ta foi');


--answer
insert into historiqueImage values (null,'desespoir','Dans votre prochaine situation amoureuse, vous pourriez vous sentir emprisonné dans une relation toxique, sans pouvoir trouver une issue positive');
insert into historiqueImage values (null,'desespoir','');
insert into historiqueImage values (null,'desespoir','');
insert into historiqueImage values (null,'desespoir','');
insert into historiqueImage values (null,'desespoir','');

insert into historiqueImage values (null,'confusion','Malgré vos efforts pour trouver l\'amour et la connexion, vous vous retrouvez sans réponse claire, ni oui ni non, vous etes confus.');
insert into historiqueImage values (null,'confusion','');
insert into historiqueImage values (null,'confusion','');
insert into historiqueImage values (null,'confusion','');
insert into historiqueImage values (null,'confusion','');

insert into historiqueImage values (null,'en paix','Dans votre prochaine situation amoureuse, vous trouverez une harmonie profonde dans vos relations, vous auriez ainsi une situation stable');
insert into historiqueImage values (null,'en paix','');
insert into historiqueImage values (null,'en paix','');
insert into historiqueImage values (null,'en paix','');
insert into historiqueImage values (null,'en paix','');

insert into historiqueImage values (null,'confiance','Vous serez entouré d\'un partenaire aimant et attentionné, avec qui vous partagerez une connexion sincère et profonde');
insert into historiqueImage values (null,'confiance','');
insert into historiqueImage values (null,'confiance','');
insert into historiqueImage values (null,'confiance','');
insert into historiqueImage values (null,'confiance','');

insert into historiqueImage values (null,'chanceux','Dans votre prochaine situation amoureuse, vous n\'aurez pas à chercher l\'amour mais cela viendra automatiquement');
insert into historiqueImage values (null,'chanceux','');
insert into historiqueImage values (null,'chanceux','');
insert into historiqueImage values (null,'chanceux','');
insert into historiqueImage values (null,'chanceux','');


situation amoureuse
travail
famille
sante
voyage


