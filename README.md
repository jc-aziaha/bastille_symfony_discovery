# Découverte de symfony

## Pour connaitre les bonnes pratiques (PSR)
- https://www.php-fig.org/psr/

## Pour installer symfony
- symfony new --webapp nom_du_projet
- cd nom_du_projet

## Pour démarrer le serveur
- symfony server:start
- Ctrl C (Pour couper le serveur)
- symfony server:stop (Pour arrêter le serveur)

## Pour créer un contrôleur: (C'est en créant le con trôleur que nous générons les routes qu'il gère)
- symfony console make:controller ExampleController

## Le moteur de template
- https://twig.symfony.com/
- Twig est un moteur de gabarit intégré au framework Symfony, avec une syntaxe claire et sécurisée par défaut.
- Chaque fichier twig fini par l'extension ".twig"
- En gros : 
    - Il nous permet de mieux séparer du code html,css du code php 
    - Il nous permet également d'alléger la syntaxe de la vue
    - De mieux sécuriser l'affichage des données

## Pour créer une base de données
- Configurer les variables d'environnement
    - Duppliquer le fichier .env
    - Le renommer en .env.local
    - Y configurer les pilotes du système de gestion de base de données sélectionné
- Créer la base de données
    - symfony console doctrine:database:create
    - Ou le raccourci symfony console d:d:c

## Pour créer une table de la base de données
- Créer l'entité et son Repository symfony (Player représente le nom de l'entité)
    - console make:entity Player
- Faire une migration (Générer le code SQL à exécuter en me basant sur l'entité générée)
    - symfony console make:migration
- Migrer les données (Exécuter le code SQL  qui a été généré)
    - symfony console doctrine:migrations:migrate
