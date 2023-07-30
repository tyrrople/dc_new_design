# Инструкция

Должно работать на любом линуксе или в windows через wsl. Если на чистом windows, то скачать ноду https://nodejs.org/en/download , с ней поставится npm.

Потом в текщей папке выполнить

    npm install

Это установит sass и gulp. После этого будет трансляция в обычный css из `./sass/` в `./build/css/`. Править нужно файлы в `./sass` . Перед правкой запустить

    ./node_modules/.bin/gulp

Эта штука будет следить за обновлениями в файлах scss и компилировать их в css.

Для запуска сервера, который вживую будет отображать изменения верстки нужен php, любая версия. После его установки перейти в папку build и набрать в консоли:

    php -S localhost:1099

После этого можно в локальном броузере открывать адрес `http://localhost:1099` и там будут сразу все изменения, которые сделаны в файлах php и верстке. Знание php не требуется - он там только для подключения виджетов в основную страницу, чтобы не копипастить все руками.


# Соглашения по именам классов

`w-*` - все что задумано использовать как самостоятельные виджеты

`m-*` - модификаторы, применяются вместе с `w-*` если нужно придать специчичные для страницы свойства для общего виджета

`s-*` - все что связано с состояниями виджета, рассчитано что классы с этим префиксом будут активно меняться из кода на клиенте и сервере, обеспечивая поведение виджета при разных состояниях


# Виджеты

Серверные куски виджетов лежат в `build/partials/` . Клиентские, в виде JS лежат в `build/js/`. Править прямо в этих папках.
