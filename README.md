                PROJET MINI BLOG SINGLE PAGE THIERNO HASSANE BARRY
1.	Description du projet
Dans le cadre de mon cours de programmation côté serveur que je suis à l'UGA, je réalise un mini Blog à l'aide du Framework PHP Laravel.
Le Blog est composé :
•	d'une page d’Accueil affichant un texte de bienvenue et les 3 derniers articles
•	La page Articles, qui affiche une liste de tous les articles
•	La page d’un article, qui s'affiche après qu’on ai cliqué dans la liste sur la page d’accueil.
•	Une page de contact avec un formulaire
•	Toutes les pages utilisent le même en-tête (header) et pied de page (footer).
•	J'ai crée un dossier partials contenant les composants navbar, main (master ici) et footer
•	Vous pouvez rajouter des éléments supplémentaires au footer si vous le souhaitez.
2.	Pré-requis pour utiliser le projet
Pour installer et exécuter le projet sur votre ordinateur, il vous faudra disposer des programmes suivants : 
•	Laravel version >= 7.0
•	PHP >= 7.2.5
•	BCMath PHP Extension
•	Ctype PHP Extension
•	Fileinfo PHP extension
•	JSON PHP Extension
•	Mbstring PHP Extension
•	OpenSSL PHP Extension
•	PDO PHP Extension
•	Tokenizer PHP Extension
•	XML PHP Extension
•	sqlite
•	Nodjs, npm
Il faudra vérifier que ces extensions sont décommentées sur php.ini et modifier vérifier aussi votre variable d'environnement sur le système de configuration de votre ordinateur.
3.	Installation
Pour installer ce programme, vous pouvez soit :
•	le cloner via l'icone "clone or download"
•	télécharger le zip 
Choisissez bien le répertoire dans lequel installer le programme et prenez soins que les programmes requis soient reconnus dans ce répertoire/dossier.
4.	Parties implémentées
Pour tester les parties et fonctionnalités que j'ai implémentées, veuillez démarrer tout d'abord votre serveur local en tapant sur votre consol depuis le répertoire de l'application Blog, la commande : php artisan serve puis visiter le lien  http://127.0.0.1:8000
Vous allez vous trouver sur la page d'accueil du blog. Les fonctionnalités que j'ai implémentées sont :
•	La page d'accueil : qui affiche un texte de bienvenue et les 3 derniers articles publiés. elle est composée d'une template html home.blade
•	la page liste des articles/posts : affichant une liste des titres de tous les articles publiés. Il suffit de cliquer sur un titre pour accéder à l'article complet.
•	une page posts :  qui affiche un article lorsqu'on clique sur le titre figurant sur la liste des posts. Il s'agit de la template posts.blade
•	une page de contact : avec un formulaire de contact. Pour la tester, il vous faut un compte mailtrap.io, si vous en avez pas, inscrivez-vous c'est très simple en suivant les instructions. Ensuite copiez le username et le mot de passe pour les renseigner sur votre fichier env. configurez votre fichier .env de comme ceci :
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME='lk5021a6dfdsf'
MAIL_PASSWORD='jds9aa3e61esdfd'
MAIL_ENCRYPTION=null
MAIL_FROM_NAME="${APP_NAME}"
Ensuite, faites le test en renseignant le formulaire comme c'est requis et envoyer. On utilise ici le protocole smtp pour l'envoi des mails. Vous recevrez le mail dans votre compte mailtrap et dans votre base de données sqlite (oubliez pas de configurez la partie database du fichier .env de sorte que vous puissiez accéder à votre base de donnée, et lancer les migrations avec php artisan migrate Vous pouvez configurer phpLiteAdmin en visitant ce lien : http://127.0.0.1:8000/phpliteadmin.php
Tous les boutons du menu et les liens de toutes les pages sont fonctionnelles.
5.	Fonctionnalités implémentées
5.1.	Tests-Unitaires
J'ai pu réaliser quelques tests unitaires, notamment le formulaire de contact par exemple, la classe Maillable et le Markdown.
Vous pouvez essayer les tests en commentant ceux qui ne marchent pas (les dusks, homepage et Database par exemple) et lancer la commande vendor\bin\phpunit
5.2.	Intégration graphique responsive avec Laravel Mix, Sass de Bootstrap
utilisation : précisez que vous voulez compiler du CSS ou du JS :
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
  .sass('resources/sass/main.scss', 'public/css');


 Ensuite, si vous utilisez du style css dans le fichier main.scss, lancez en mode dev via la commande :  npm run dev
Puis le mode watch afin de compiler le css via la commande : npm run watch
Le processus est le même pour le JavaScript.
6.	Difficultés/Remarques :
Je n'ai pas pu utiliser la page de validation des requêtes ContactFormRequest qui hérite des classes FormRequest et Request. J'ai donc directement injecté la requête de validation dans le controller. Par contre, le maillable avec le markdown fonctionnent bien.
Cependant, je n'ai pas pu réaliser certains tests car je n'ai pas pu appliquer le mock.
Le Dusk aussi n'a pas fonctionné, notamment la version 81.
Je compte améliorer cette partie car mon stage porte sur un projet de développement, migration et tests unitaires sur laravel.
Ce projet m'a aussi permis de découvrir le framework Bootstrap et d'avoir une idée sur Vue.js et React.js.



