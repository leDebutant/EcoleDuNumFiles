###########################################
# On peut trier les résultat d'une requête
# avec les mots clés ORDER BY xxx  ASC ou DESC

SELECT * FROM user ORDER BY id DESC;

# Nous aurons les résultat trier par le champ id
# de façon descendante

# Cette commande permet également de trier par
# ordre alphabétique quand la colonne est une chaine
# de caractère ou par date si la colonne a un format
# date

# Exemple alphabétique:
SELECT * FROM user ORDER BY username DESC;

# Exemple par date:
SELECT * FROM user ORDER BY datecreate DESC;

# En SQL il existe des fonctions qu'on peut utiliser
# en combinaison avec nos requêtes 
# Exemple:

# Ceci nous donne le nombre d'Utilisateur! Ceci ne
# Concerne que l'affichage!
SELECT COUNT(*) as nombreDeUser FROM user;


# Ceci nous donnera le max id. Si on avait une
# Colonne âge ça nous donnera le plus âgé
SELECT MAX(id) as monMax FROM user;

