***************************************************************
******************PROJET FORUM DE DISCUSSIONS *****************
***************************************************************

Pour ce projet il va falloir créer un forum standard de discussions
Nous nous servirons de ce projet pour nous entrainer. On commencera
et chacun à son rythme avancera jusqu'au point ou il pourra.

1) Pour ce dossier vous allez créer un répo GIT que vous allez partager
avec moi pour que je fasse des révisions. (À la hateur de mes possibilités
physiques) En effet je ne pourrai peut-être pas revoir dans le détail
tous les projets. Soyez conscients de ceci.

2) Vous allez utiliser des styles CSS de votre choix. Je vous conseille néanmoins
bootstrap ou un framework css qui permettent de vous lancer rapidement.

3) Pour ce projet nous utiliserons l'architecture MVC comme nous
avons vu dans le dossier 15_MVC

4) Ce projet aura au moins les entités utilisateurs, categories et postes évidemment.
-Une categories peut contenir plusieurs posts mais un post ne peut avoir qu'une seule
catégorie.
-Si vous y arriver une entités messages pour des messages privés (pas la peine de faire
un chat dynamique pensez simple à moins que vous ayez de l'avance). Un message ne peut
avoir qu'un seul interlocuteur.
-Entités tags si vous y arriver. Les tags peuvent concerner plusieurs postes et un poste
peut avoir plusieurs tags.
-Vous pourrez changer votre base de données selon vos besoins.

5) Donc les utilisateurs pourrons s'enregistrer, se connecter et récupérer leurs password
(on va ignorer l'envoie d'email pour l'instant)
Il faut vérifier que
- le mot de passe a au moins 8 caractères de long.
- lors de l'enregistrement il faut répété le mot de passe pour le confirmer dans un autre champ
- Username au moins 4 caractères de long,
- que les mail a bien la structure XX@XX.xxx .
- Il faut s'assurer que le username est unique! et que l'email
n'a pas été déjà inséré en base de données.

5bis) Il faut un profil utilisateur qui affiche la photo de l'utilisateur, et le pseudo
la date d'inscription et ceci est éditable pour l'utilisateur (sauf le pseudo).
 Il faut donc vérifier les restriction qu'on a vu au point 5
 (Si vous êtes trop en retard laisser l'upload de la photo pour
 après).

6) Il nous faut créer des sujet avec des catégories prédéfini. Il nous faut une page "créer un sujet".
-Le sujet doit avoir un titre
-Le sujet doit avoir longeur minimum de 20 caractères
-Le sujet peut avoir une photo (pareil faite ceci si vous avez de l'avance) ou non (en base de données enregistrez juste son chemin d'accès exemple: dans la colonne "path" = "/uploads/maphoto.jpg")

6) Une fois arrivé dans la page accueil il faut voir la liste avec les titres des sujets
et une partie du contenu avec une mention "...lire" plus à la fin. Il faut également
Une photo miniature mais la photo n'est pas obligatoire
(Si vous arrivez ici c'est déjà bien)


7) Il faut un système de filtre par sujet

8) Un système de messagerie (pour ceux qui sont vraiment avancé) avec lequel on peut contacter avec un utilisateur sur un sujet
précis. (C'est comme une discussion forum mais avec un seul utilisateur)

9) Une barre de recherche. Typiquement sur presque toutes les pages.

10) Utilisez des requêtes AJAX si vous êtes en forme sinon des method "post" depuis un formulaire html me vont très bien

11) Chaque soumission(requête HTTP) aura son propre service (donc ne les mélangez pas)
Chaque page aura un css dissocié de l'html (si nécessaire)
et Chaque page aura son propre js (si nécessaire).
Car maintenant le but est de coder un peu plus proprement.

12) Créez moi un fichier log qui enregistrera les addresses IP des utilisateur ainsi que
leur pseudo.

13) Créez une liste des utilisateurs qui sont inscrit également

14) Si vous le pouvez créez une liste d'utilisateur "amis".
