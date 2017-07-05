/* LES JOINTURES permettent d'appeler des informations
 * qui résident dans différentes tables en une seule
 * requête!
 */
 
 # Ici on joint les tables user et commande à travers
 # le mot clé LEFT JOIN et ON. LEFT JOIN veut dire
 # que la première table déclaré sera la référence
 # et celle qui est jointe sera celle qui sera annexée
 # Ce qui veut dire que tout les résultats de la table référente
 # seront affiché et s'il n'y a pas de correspondance il y aura
 # des colonnes null pour la table annexée
 # ATTENTION: Plusieurs ligne de la table référente apparaitrons
 # si il y a plusieurs rentrées en provenance de la table annexées
 # Exemple:
 # 		USERNAME	EMAIL			COMMANDE NUMERO			DATECOMMANDE
 # 		Alfonso		deb@yahoo.com		23654X				31-12-2017
 #		Alfonso		deb@yahoo.com		21874X				30-06-2017
 #		Alfonso		deb@yahoo.com		23566X				22-03-2017
 #		Manuel		manu@gmail.com		NULL				NULL
 #		Bernard		Bibou@gmail.com		NULL				NULL
 
 # Ici on voit que Alfonso a trois commande donc il sera répété 3 fois
 # Manuel et Bernard n'ont aucune commande et par conséquent il y aura
 # des valeurs NULL dans les colonnes de la table commande
 # Voyez la commande suivante:
 
 SELECT u.*,c.* FROM user AS u
 LEFT JOIN commande AS c ON c.userId=u.id;
 # Cette requête est représenté dans le fichier shema_sql_jointure.png
 # (dans le dossier EcoleDuNum\13_basededonnees) tout en haut à gauche
 # Notez que u.* veut dire donnez moi les colonnes de u qui est en fait
 # un alias de user (user AS u) de même pour commande (commande AS c)
 
 
 ########################################################
 #
 # Avec un RIGHT JOIN la table référente sera la deuxième
 # ici commande(la table) donc on affichera toutes les commandes
 # qu'elles aient un utilisateur ou non (dans le cas
 # présent ce n'est pas possible mais on va imaginer que les commandes
 # puisse ne pas être engendré par des utilisateurs (par des robots) 
 # ou par plusieurs utilisateurs)
 #
 # Exemple:
 # 		USERNAME	EMAIL			COMMANDE NUMERO			DATECOMMANDE
 # 		Alfonso		deb@yahoo.com		23654X				31-12-2017
 #		Rafael		nadal@yahoo.com		23654X				31-12-2017
 #		NULL		NULL				23566X				04-03-2017
 #		NULL		NULL				34287W				17-04-2017
 #		NULL		NULL				4665WT				27-05-2017
 
 # Donc on constate ici que les commandes peuvent avoir plusieurs utilisateurs
 # ou aucun et dans ce cas les cellules de la tables user seront égale à NULL
 # c'est à dire l'inverse de ce qu'on a dit précédemment
SELECT u.*,c.* FROM user AS u
RIGHT JOIN commande AS c ON c.userId=u.id;
 # Illustré tout à droite en haut dans le fichier shema_sql_jointure.png


 #########################################################
 #
 # Avec un INNER JOIN on est plus restrictif on affichera
 # que les user et commande qui coincident  
 # entre eux seulement
 SELECT u.*,c.* FROM user AS u
INNER JOIN commande AS c ON c.userId=u.id;

 # Illustré dans le document shema_sql_jointure.png par l'image qui est au milieu


###############################################
#Ici on vient de rajouter la clause 
# WHERE c.userId is NULL ce qui nous donnera tous les
# utilisateurs qui n'ont pas passés de commande 
# Exemple:
# 		USERNAME	EMAIL			COMMANDE NUMERO			DATECOMMANDE
#		Manuel		manu@gmail.com		NULL				NULL
#		Bernard		Bibou@gmail.com		NULL				NULL
SELECT u.*,c.* FROM user AS u
LEFT JOIN commande AS c ON c.userId=u.id
WHERE c.userId is NULL;
 # Illustré dans le document shema_sql_jointure.png par l'image qui est à gauche
 # deuxième en partant du haut
 
 ############################
 #  On peut avoir l'inverse avec un RIGHT JOIN qui est la deuxième image en partant
 # du haut tout à droite dans le doc shema_sql_jointure.png
 # Exemple:
 # 		USERNAME	EMAIL			COMMANDE NUMERO			DATECOMMANDE
 #		NULL		NULL				23566X				04-03-2017
 #		NULL		NULL				34287W				17-04-2017
 #		NULL		NULL				4665WT				27-05-2017
SELECT u.*,c.* FROM user AS u
LEFT JOIN commande AS c ON c.userId=u.id
WHERE c.userId is NULL;
# Je remarque à nouveau que ces résultat sont purement hypothétique car
# dans notre cas réel une commande est forcément passé par un user
# Appelez-moi si vous ne comprenez pas cette phrase



#####################################################
# la commande suivante simule la commande FULL OUTER
# JOIN qui existe dans des bases comme oracle et autre SQL,
# mais n'existe pas en MySQL donc il faut la convertir avec UNION
# du coup on aura tous les users qui n'ont pas de de commande
# tout les user qui ont passé une commande et les commande qui n'ont 
# pas été passé par un user
# Exemple:
# 		USERNAME	EMAIL			COMMANDE NUMERO			DATECOMMANDE
#		NULL		NULL				23566X				04-03-2017
#		NULL		NULL				34287W				17-04-2017
#		NULL		NULL				4665WT				27-05-2017
# 		Alfonso		deb@yahoo.com		23654X				31-12-2017
#		Alfonso		deb@yahoo.com		21874X				30-06-2017
#		Alfonso		deb@yahoo.com		23541X				22-03-2017
#		Manuel		manu@gmail.com		NULL				NULL
#		Bernard		Bibou@gmail.com		NULL				NULL

SELECT u.*,c.* FROM USER AS u
LEFT JOIN commande AS c ON c.userId=u.id
UNION
SELECT u.*,c.* FROM USER AS u
RIGHT JOIN commande AS c ON c.userId=u.id;
 # Illustré dans le document shema_sql_jointure.png par l'image qui est à gauche
 # tout en bas


#################################################
#
# Pour enlever l'intersection entre les deux
# càd pour soustraire le User Inter Commande
 # Illustré dans le document shema_sql_jointure.png par l'image qui est à droite
 # tout en bas

SELECT u.*,c.* FROM USER AS u
LEFT JOIN commande AS c ON c.userId=u.id
WHERE c.userId IS NULL
UNION
SELECT u.*,c.* FROM USER AS u
RIGHT JOIN commande AS c ON c.userId=u.id
WHERE u.id IS NULL
;

# Exemple:
# 		USERNAME	EMAIL			COMMANDE NUMERO			DATECOMMANDE
#		NULL		NULL				23566X				04-03-2017
#		NULL		NULL				34287W				17-04-2017
#		NULL		NULL				4665WT				27-05-2017
#		Manuel		manu@gmail.com		NULL				NULL
#		Bernard		Bibou@gmail.com		NULL				NULL




# Cas pratique creer une table produit
# la linker avec la table commande (la nouvelle)
# faire une requête qui joigne la table commande
# avec la table produit (un left join suffira)
