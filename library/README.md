
# Laravel
## Documentation
Retrouvez de la doc utile sur :
- le site de [Laravel](https://laravel.com/docs/8.x)
- le site du [sillo](https://laravel.sillo.org/laravel-8/)
## Récupérer rapidement ce projet
```bash
git clone https://github.com/jperaudon/laravel_g4.git .
composer install
cp .env.example .env
```
## Configutation du serveur
### Box Vagrant à utiliser
> ubuntu/bionic64
### Installation des paquets
```bash
sudo apt update
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install 
sudo apt install apache2 php8.0 libapache2-mod-php8.0 mysql-server php8.0-mysql php8.0-mbstring php8.0-dom zip
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
composer create-project laravel/laravel .
```
### Activer la ré-écriture d'URL
```bash
sudo a2enmod rewrite
```
Changer le DocumentRoot pour faire pointer le serveur sur le dossier __*public*__ :
```bash
sudo nano /etc/apache2/sites-available/000-default
```
Ajouter, dans ce même fichier, les lignes suivantes :
```
<Directory /var/www/html>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Require all granted
</Directory>
```
Vous trouverez [ici](https://www.digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-16-04) un site explicatif sur la question.
### Changer les permissions
Changer les ```www-data``` par ```vagrant``` dans le fichier :
```bash
sudo nano /etc/apache2/envvars
```
### Recharger apache2
```bash
sudo service apache2 restart
```
### Autoriser l'accès à Mysql depuis un outil tier
Utiliser le script interne de mysql :
```bash
sudo mysql_secure_installation
```
Lors de ce script, accepter de paramétrer le composant *VALIDATE PASSWORD* et suivre la procédure.  
Puis :
```bash
sudo mysql
```
```mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '00000000';
FLUSH PRIVILEGES;
```
Retrouver toutes ces infos [ici](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-20-04-fr).
Pour se connecter à mysql :
```bash
mysql -u root -p
```
Puis rentrer votre mot de passe.
# Exo
## Exo 1
Créer une nouvelle vue (par exemple de contacts), et faire en sorte qu'elle soit accessible via l'url : ```192.168.33.10/contacts```.  
Pour faire ça, il faudra : 
- créer une nouvelle vue (chercher ce qu'est "blade")
- ajouter une nouvelle route (web.php)
## Exo 2
Faire en sorte que si je vais sur l'url ```192.168.33.10/jon```, j'arrive sur une vue qui me dit :
> Bonjour, jon ! 
## Exo 3 : mise en place de la base du site
Thème du site : une librairie qui nous servira à gérer notre collection de livre.
Mettre en place :
- 1 page d'accueil
- 1 menu de navigation : 
    - 1 lien pour l'accueil
    - 1 lien sur la page d'ajout de livre
Tip : regarder les "layouts".
## Exo 4 : les controllers
Reprendre la navigation actuelle en intégrant un controller qui fera la passerelle entre le _**web.php**_ et les _**vues**_.  
Ce controller se nommera : ```NavController```.
Petite info : ne tenez pas compte du terme "invokable".
## Exo 5 : les Migrations
Mettre en place une migration pour créer une table ```books```.  
Cette table contiendra :
- id
- title (string)
- author (string)
- publication (integer)
- genre (string)
- synopsis (string)
## Exo 6 : les Seeders
Utliser les seeders pour intégrer 3 livres dans la base de donnée.
## Exo 7 : CRUD - Read
Nous allons maintenant afficher la liste de tous nos livres dans une vue.  
Pour arriver à ça, il nous faudra :
- créer un Model
- modifier le controlleur utilisé (NavController)
- modifier le controlleur utilisé (NavController)

## Exo 8 : détail des livres
Depuis la liste des livres, si l'on clique sur un titre de livre, on bascule sur une _nouvelle page_ qui affiche toutes les informations du livre en question.

## Exo 9 : CRUD - Create
Mettre en place l'insertion de nouveau livre.  
Dans un premier temps, nous allons devoir créer un formulaire. Et donc :
- Mettre à jour le menu de navigation
- 1 route
- 1 méthode dns le ```NavController```
- 1 vue (avec mon formulaire)
Enregistrer le nouveau livre :
- 1 route
- 1 méthode dans ```ActionController```

# Exo 10 : CRUD - Delete
Nous allons ajouter une nouvelle colonne à notre liste de livres.  Dans cette nouvelle cellule, nous aurons un bouton qui permettra de supprimer directement le livre lié.

## Exo 11 : CRUD - Update
Construire tous les fichiers/routes/logiques nécessaire à la mise en place de la mise à jour des livres, depuis le listing de ces derniers.


## Exo 12 : clé étrangère
Nous allons maintenant distinguer les livres des auteurs, et créer un nouvelle table ```authors```.
Nous allons maintenant distinguer les livres des auteurs, et créer une nouvelle table ```authors```.
Les auteurs auront :
- Un ID
- Un nom
Pour l'exercice, nous partirons du principe que chaque livre n'est lié qu'à un seul auteur, mais que les auteurs peuvent avoir écris plusieurs livres.
Nous en profiterons aussi pour améliorer le front en ajouter un menu déroulant pour l'intégration de ces derniers.  
Bien entendu, nous ajouterons aussi migration et seeder pour cette nouvelle table.
A créer : 
- 1 migration
- 1 seeder
- 1 model
- Plein de modifications dans les fichiers déjà existants