/* LES JOINTURES permettent d'appeler des informations
 * qui résident dans différentes tables en une seule
 * requête!
 */
 
 # Ici on joint les tables user et commande à travers
 # le mot clé LEFT JOIN et ON. LEFT JOIN veut dire
 # que la première table déclaré sera la référence
 # 
 SELECT u.*,c.* FROM user AS u
 INNER JOIN commande AS c ON c.userId=u.id;
 
 # Avec un RIGHT JOIN la table référente sera la deuxième
 # ici commande donc on affichera toutes les commandes
 # qu'elles aient un utilisateur ou non ( mais dans le cas
 # présent ce n'est pas possible
 
 # Avec un INNER JOIN on est plus restrictif on affichera
 # que les user et commande qui coincident  
 # entre eux seulement
 


#Ici on vient de rajouter la clause 
# WHERE c.userId is NULL ce qui nous donnera tous les
# utilisateurs qui n'ont pas passés de commande 
SELECT u.*,c.* FROM user AS u
LEFT JOIN commande AS c ON c.userId=u.id
WHERE c.userId is NULL;

# Cas pratique creer une table produit
# la linker avec la table commande (la nouvelle)
# faire une requête qui joigne la table commande
# avec la table produit (un left join suffira)

# la commande suivante simule la commande FULL OUTER
# JOIN qui existe dans des bases comme oracle,
# du coup on aura tous les users qui n'ont pas de 
SELECT u.*,c.* FROM USER AS u
LEFT JOIN commande AS c ON c.userId=u.id
UNION
SELECT u.*,c.* FROM USER AS u
RIGHT JOIN commande AS c ON c.userId=u.id;

# Pour enlever l'intersection entre les deux
# càd pour soustraire le User Inter Commande

SELECT u.*,c.* FROM USER AS u
LEFT JOIN commande AS c ON c.userId=u.id
WHERE c.userId IS NULL
UNION
SELECT u.*,c.* FROM USER AS u
RIGHT JOIN commande AS c ON c.userId=u.id
WHERE u.id IS NULL
;
