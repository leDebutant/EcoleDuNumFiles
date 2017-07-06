/* Ici on va taper nos requêtes */
# Les hashtags commentent aussi
/* ON VA CRÉER UNE BASE DE DONNÉE!!! */
/* LA COMMANDE CTRL+ENTER EXECUTE LA REQUÊTE OU
LE POINTEUR SE TROUVE */

CREATE DATABASE ecoledunum;

/* SUPPRIMER LA BASE */
DROP DATABASE ecoledunum;


/* CREER TABLE USER */
CREATE TABLE user(
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255),
email VARCHAR(255),
uPassword VARCHAR(255),
active CHAR(2),
datecreate DATETIME
);

/* CREER TABLE COMMANDE */
CREATE TABLE commande(
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
datecommande DATETIME,
nombreProduit INT(255),
produitId INT(255),
userId INT(255),

FOREIGN KEY (userId) REFERENCES user(id)
);

DROP TABLE commande;


INSERT INTO commande (datecommande,nombreProduit,
libelle,userId)
VALUES (NOW(),1,'Ecran',6);



/* INSERER DES INFORMATION DANS UNE TABLE */
INSERT INTO user (username,email,uPassword,active,datecreate)
VALUES ('le_debutant','le_deb@gmail.com','myPass',1,NOW());
/*Notez que nous avons inséré un entier dans la colonne
active alors qu'on l'avait défini comme CHAR(2).
SQL transforme le 1 entier en Caractère (CHAR)
*/

/* VERSION 2, INSERER INFORMATION */

INSERT INTO user SET username="apocalypse", 
email="apoca@gmail.com",
uPassword="myPassword",active=1,datecreate=NOW();


/* REQUETE POUR SELECTIONNER TOUS LES UTILISATEURS */
SELECT * FROM user;

/* UTILISER L'ASTERISQUE EST CONSIDERE COMME MAUVAIS
	CAR PARFOIS LES TABLES CHANGES ET PEUVENT AVOIR 
    BEAUCOUP DE CHAMPS CE QUI FERA RAMER LE SYSTEME
    LA BONNE PRATIQUE EST DE NOMMER LES CHAMPS
 */
 SELECT id,username,email,active,datecreate FROM user;
 
 /* ON PEUT EGALEMENT RAJOUTER DES FILTRE/CONDITION */
  SELECT id,username FROM user
  WHERE id=1;
 
/* ON PEUT CUMULER LES CONDITIONS AVEC LE MOT CLÉ AND */
  SELECT id,username FROM user
  WHERE id=1 AND username="le_debutant";
  #ON PEUT RAJOUTER AUTANT DE CONDITION A TRAVERS
  # "AND" QUE L'ON VEUT PAR CONTRE N'EST VALIDE QUE POUR
  # LA PREMIERE
  
  /* UPDATE: NOUS ALLONS VOIR QU'IL EST POSSIBLE
		DE METTRE À JOURS UNE RENTRÉE À TRAVERS LA 
        COMMANDE UPDATE
  */
  UPDATE user SET uPassword="nimp" WHERE id=1;
  # IL EST IMPORTANT DE METTRE "LE WHERE id=1" SINON ON AURAIT
  # MIS À JOURS TOUTES LES LIGNES DE LA TABLE!!!!
 

/* EFFACER: MOT CLÉ DELETE
	ON PEUT EFFACER DES RENTRÉES DE LA BASE À TRAVERS
    LE MOT CLÉ DELETE
*/
DELETE FROM USER WHERE id=1;
# DOUBLE WARNING! LE WHERE EST IMPORTANT SINON ON EFFACE
# LA TABLE DANS SON ENTÉRITÉ

# CREATE / SELECT / UPDATE / DELETE
			
# CRUD





DELETE FROM USER WHERE id=1;

/* prochaine session SQL */
/* 
	MODIFIER les colonnes, les effacer les rajouter
*/
/* 
	les jointures pour la prochaine fois
*/

INSERT INTO user SET
username="Paul",
email="myEmail@gmail.com",
uPassword="monPassword";



