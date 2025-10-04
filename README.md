Guide d'Installation pour Votre Site Web (Laravel)
Suivez ces étapes pour lancer votre site web avec Laravel.

Étape 1 : Prérequis
Assurez-vous d'avoir un environnement de développement PHP local. Le plus simple est d'installer Laravel Herd (pour Mac) ou Laragon (pour Windows). Vous aurez également besoin de Composer.

Étape 2 : Créer le Projet Laravel
Ouvrez votre terminal (ou 'Command Prompt' sur Windows).

Naviguez jusqu'au dossier où vous voulez créer votre projet.

Lancez la commande suivante pour créer un nouveau projet Laravel.

composer create-project laravel/laravel mon-site-najla

Naviguez dans le dossier de votre nouveau projet :

cd mon-site-najla

Ouvrez ce dossier dans Visual Studio Code :

code .

Étape 3 : Copier-Coller les Fichiers
Maintenant, créez ou remplacez les fichiers suivants dans votre projet Laravel avec le code que je vous ai fourni dans la conversation précédente.

Créer le Controller

Dans votre terminal, lancez cette commande pour créer le PageController :

php artisan make:controller PageController

Ouvrez le fichier app/Http/Controllers/PageController.php et remplacez tout son contenu par le code du fichier que j'ai fourni.

Mettre à jour les Routes

Ouvrez le fichier routes/web.php et remplacez son contenu par le code du fichier web.php que j'ai fourni.

Créer les Vues (Blade Templates)

Allez dans le dossier resources/views/.

Créez un dossier nommé layouts.

À l'intérieur de layouts, créez un nouveau dossier partials.

Dans resources/views/layouts/, créez le fichier app.blade.php.

Dans resources/views/layouts/partials/, créez les fichiers navbar.blade.php et footer.blade.php.

Créez un dossier nommé pages dans resources/views/.

À l'intérieur de pages, créez les cinq fichiers suivants : home.blade.php, products.blade.php, about.blade.php, blog.blade.php, et contact.blade.php.

Copiez le contenu de chaque fichier correspondant que j'ai fourni.

Vous pouvez supprimer le fichier welcome.blade.php qui est créé par défaut.

Ajouter le CSS

Allez dans le dossier public/. Créez un dossier css s'il n'existe pas.

À l'intérieur de public/css/, créez un fichier app.css et copiez le code CSS que j'ai fourni.

Étape 4 : Lancer le Site
Retournez dans votre terminal (assurez-vous d'être dans le dossier mon-site-najla).

Lancez le serveur de développement avec cette commande :

php artisan serve

Votre site est maintenant en ligne ! Le terminal vous donnera une adresse locale (généralement http://127.0.0.1:8000). Ouvrez-la dans votre navigateur pour voir votre site web fonctionner.