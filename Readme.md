
************************************************
******************Comment tester le projet******

le dossier test comprend le projet symfony qui est utilisé comme backend
il expose une API REST
si nous supposons que vous lancez le serveur symfony sur le port 8000,
**************nous avons comme endpoind http://127.0.0.1:8000
******* 1 /companies  en GET
permet de récupérer le listing de toutes les companies 
******* 2 /company/{company}/{date} en GET 
permet de récupérer toutes les companies ayant la sous-chaine 'company' 
dans leur nom 
******* 3 /users en GET 
permet de récupérer la liste des utilisateurs 
******* 4 /users en POST
permet de créer un nouvel utilisateur

***************************************************************
le dossier client_test contient l'application client qui permet 
de tester notre api à l'exception de l'insertion des utilisateurs 
noté que pour que le client fonctionne, le backend doit être lancé
sur à l'adresse http://127.0.0.1:8000