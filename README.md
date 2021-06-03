Pour faire fonctionner le projet :

Faire un 'composer install'
Ensuite un 'npm install'

Creer un fichier .env a la racine du dossier et y copier le contenue du dossier .env.exemple de dans

Creer une base de donner manuellement et ajoute les informations de connection dans les champs DB du fichier .env

Taper la command 'php artisan key:generate' dans un terminal

Taper la command 'php artisan migrate:refresh --seed' dans un terminal

Dans un autre taper la commande 'npm run dev'

Et encore dans un autre terminal taper la commande 'php artisan serve' 


Le site est full responsive et rajout du seeder pour la reservation.
