amena
À propos
amena est une plateforme innovante conçue pour révolutionner le secteur du transport de colis. En facilitant une interaction directe entre les clients et les transporteurs, amena permet une gestion plus efficace et personnalisée des envois. Développée avec le framework Symfony, cette solution offre une expérience utilisateur améliorée tout en assurant la sécurité et la fiabilité des transactions.

Fonctionnalités
Choix du transporteur: Les clients peuvent choisir leur transporteur préféré pour l'envoi de colis.
Suivi en temps réel: Consultation de l'état et de l'emplacement du colis en direct.
Gestion flexible des envois: Possibilité de refuser un transporteur et d'assigner le colis à un autre.
Interface intuitive: Une expérience utilisateur fluide tant pour les clients que pour les transporteurs.
Installation
Prérequis
PHP 7.4 ou supérieur
Composer
Symfony CLI
Une base de données (MySQL, PostgreSQL, etc.)
Étapes
Clonage du dépôt

bash
Copy code
git clone https://github.com/aymenzouaoui/pidevweb.git
Installation des dépendances

bash
Copy code
cd mon-projet
composer install
Configuration de la base de données

Éditez le fichier .env pour configurer les paramètres de votre base de données.

Création de la base de données

bash
Copy code
php bin/console doctrine:database:create
Migrations

bash
Copy code
php bin/console doctrine:migrations:migrate
Démarrage du serveur

Copy code
symfony serve
Accédez à l'application via l'URL fournie par Symfony.

Utilisation
Après avoir démarré le serveur, connectez-vous à l'interface web d'amena pour commencer à gérer vos envois et livraisons. Utilisez le tableau de bord pour suivre, assigner ou modifier les statuts des colis.

Contribuer
Nous accueillons chaleureusement les contributions de la communauté! Si vous souhaitez contribuer à amena, veuillez consulter notre fichier CONTRIBUTING.md pour plus d'informations sur comment soumettre des bugs, des fonctionnalités ou des pull requests.

Licence
Ce projet est sous licence MIT. Pour plus de détails, voir le fichier LICENSE.md.

Contact
Pour toute question ou suggestion, n'hésitez pas à contacter Aymen Zouaoui.