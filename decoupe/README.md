# workflow

> Basic workflow

* * *

**workflow** is an educational project.

**Note:** the school where the course is given, the [HEPL](http://www.provincedeliege.be/hauteecole) from Liège, Belgium, is a french-speaking school. From this point, the instructions will be in french. Sorry.

* * *

## Tâches Grunt

### Plugins

Notre workflow utilise [5 plugins grunt](http://gruntjs.com/plugins).

* [grunt-sass](https://www.npmjs.com/package/grunt-sass), qui compile les fichiers _scss_ vers _css_.
* [grunt-eslint](https://www.npmjs.com/package/grunt-eslint), qui analyse nos fichiers javascript avec [eslint](http://eslint.org/) (les règles en application se trouvent dans le fichier [.eslintrc.json](./.eslintrc.json)).
* [grunt-contrib-watch](https://www.npmjs.com/package/grunt-contrib-watch), qui observe les changements sur nos fichiers pour déclancher des tâches à la volée.
* [grunt-browser-sync](https://www.npmjs.com/package/grunt-browser-sync), qui peut créer un serveur de prévisualisation, ou un _serveur proxy_, pour recharger notre navigateur à chaque changement. Plus de détails sur le [site de browser-sync](https://browsersync.io/docs/grunt/).
* [grunt-cowsay](https://www.npmjs.com/package/grunt-cowsay), qui affiche un petit message en fin de certaines tâches.

### Tâches

Notre workflow définit 6 tâches & 4 raccourcis.

#### Tâches

* **sass:styles**, qui compile les fichiers scss présents dans le dossier _sass/_, vers le fichier _css/styles.css_.
* **eslint:scripts**, qui soumet à _eslint_ les fichiers javascripts présents dans le dossier _scripts/_
* **watch:styles**, observe les changements sur les fichiers _scss_ présents dans le dossier _sass/_ et la la tâche **sass:styles**.
* **watch:scripts**, observe les changements sur les fichiers _js_ présents dans le dossier _scripts/_ et la la tâche **eslint:scripts**.
* **browserSync:preview**, lance un serveur proxy vers _localhost:12345_ (**à modifier selon votre configuration**).
* **cowsay:done**, affiche le message "_I'm done!_"

#### Raccourcis

* **build** (`grunt build`), qui lance la tâche **sass:styles**.
* **analyse** (`grunt analyse`), qui lance la tâche **eslint:scripts**.
* **default** (`grunt default` ou `grunt`), qui lance les tâches **build**, **analyse** & **cowsay:done**.
* **work** (`grunt work`), qui lance les tâches **build**, **analyse**, **browserSync:preview** & les tâches **watch:styles** et **watch:scripts**.
