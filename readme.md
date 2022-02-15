## À propos de Welcome week

Welcome week est une application web interactive développée spécialement pour le compte de l'association des étudiants de l'école nationale de commerce et de gestion (ENCG) à casablanca

### Démonstration

Démonstration sur la page facebook de l'association des étudiants

[![VIDEO FACEBOOK](https://i.ibb.co/x8mRy5X/fb-thumbnail.png)](https://web.facebook.com/255749561139327/videos/754529468609163)

# Installation

## Laravel

Il s'agit d'une application développée en laravel. Alors, pour pouvoir l'installer en localhost il faut avoir quelques pré-requis :

- Installer XAMPP (pour Windows, Linux ou OS X) : https://www.apachefriends.org/download.html
- Installer Composer (pour Windows) : https://getcomposer.org/Composer-Setup.exe
- Installer Composer (pour Linux ou OS X) : https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
- Mettre cette application au répertoire du XAMPP `htdocs`
- Créer le fichier `.env` (vous pouvez copier/coller `.env.example`) et configurer sa base de données, par exemple :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=encgc
DB_USERNAME=root
DB_PASSWORD=
```
- Exécuter la commande :
```
php artisan key:generate
```
- Et enfin migrer la base de données via la commande :
```
php artisan migrate
```
Le serveur pourrait démarrer en exécutant :
```
php artisan serve
```

# Documentation fonctionnelle

Il s'agit d'une application dédiée spécialement à la semaine d'intégration de l'école nationale de commerce et de gestion (ENCG) à Casablanca qui cible toutes et tous les étudiants de l'école notamment les nouveaux arrivants.
Et Elle permet chaque étudiant de :
- S'authentifier via son email et un mot de passe.
- Changer son mot de passe
- S'inscrire aux clubs de l'école.
- S'inscrire aux jeux de la semaine d'intégration.
- Naviguer dans une galerie contenant les différents endroits de son école.
- Regarder des séminaires.
- Contacter l'association des étudiants via un formulaire 

Par conséquence, la base de données était déjà alimentée à partir d'un fichier excel contenant les données de tous les étudiants de l'école et il suffisait de remplir son email
et son code national de l'étudiant (CNE) comme mot de passe par défaut pour que l'étudiant soit authentifié.
Après, on laisse le laisse la possibilité de changer son mot de passe et on le pousse à remplir son numéro de téléphone qui sera obligatoire.

# Documentation technique

### Modèle de données

![MODELE DONNEES](https://i.ibb.co/ZYQYNNT/CONCEPTION-BASE-DONNEE.png)

- Remarque 1 : les tables `migrations` et `password_resets` sont des tables du framework permtettant de gérer les migrations et la réinitialisation des mots de passe respectivement.
- Remarque 2 : la table `attachments` est dédiée aux stockage des différents attachements vidéos et images..etc

### Architecture du code source

![CODE SOURCE](https://i.ibb.co/tPkgy1n/CODE-SOURCE.png)

Le code source de l'application se base principalement sur deux designs patterns :

- `MVC` : Model-View-Controller qui est imposé par le framework lui-même. Où, le modèle ici désigne les classes du répertoire `App\Models`
et la vue désigne le côté frontend `\resources\views` et le contrôleur désigne le répertoire '\App\Http\Controllers'

- `Repository design pattern` : implémenté dans le répertoire repositories, il s'agit d'une couche entre le modèle et le contrôleur permettant de centraliser les requêtes qui seront faites sur les entités de l'application
si, la requête serait appliquée sur plusieurs entités. On la déclare dans `DefaultRepository`. Sinon, dans l'interface du repository concerné comme le cas de `AttachmentRepositoryInterface`.

Pour plus d'information sur la création des Modèles/Vues/Contrôleurs ou encore les service providers, veuillez consulter la documentation officielle du framework : https://laravel.com/docs/5.8

# Equipe

- UI/UX design + Intégration : [Zakaria MRABTI](https://www.linkedin.com/in/zakaria-mrabti-ux-ui-designer/)
- Développement Backend : [Achraf BELLAALI](https://www.linkedin.com/in/bellaali-achraf/)
