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
<!--  -->