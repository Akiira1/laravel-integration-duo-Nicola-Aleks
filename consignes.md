 Exercice Middleware
Partie 1
- Créez un middleware : RoleVerification
- Si on est pas connecté on ne peut aller que sur la page Admin
- Si on est connecté que l'on peut aller sur les pages que sur la page contact dans le back
- Si on est connecté et que l'on a le role admin on peut aller partout


Partie 2
- Créez deux middleware : AdminVerification et WebmasterVerification
- Vous allez retirer le middleware RoleVerification de votre route
- Si on n'est pas connectés, on ne peut aller dans le back
- Si on est connectés et que l'on a le role admin, on peut aller partout
- Si on est connectés et que l'on a le role webmaster, on ne peut aller que dans testimonials et contact dans le back 

Partie 3
- Vous devez trouver la façon de créer des groupes Middleware pour ne pas répéter plusieurs fois le même nom du middleware

Exercice 1 Policies
- Vous allez retirer tous les middleware de vos routes
- Vous allez créer un fichier policy pour chaque controller
- Services : 
       - Create : Admin et Webmaster
       - Update : Admin
       - Delete : Admin
       - Vous devez cacher les boutons des CRUD
- Testimonials : 
       - Create : Tous les roles peuvent créer
       - Update : Admin et Webmaster
       - Delete : Admin
Exercice 2 Policies
- Vous allez devoir créer une blade pour rediriger les personnes qui n'ont pas de droits à faire des manipulations dans cette blade
Exercice 3 Policies
- Empecher la manipulation de l'id via l'inspecteur

Exercice 4 Policies
- Vous allez créer une relation entre les users et les testimonials (one to many), et vous allez faire en sorte qu'un utilisateur ne peut modifier ou supprimer que le testimonial qu'il a créé