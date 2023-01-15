# Webpack assembly

Базовый сборщик `webpack 5` для верстки многостраничных или одностраничных сайтов. Использует `webpack-merge`, что позволяте
создавать любые сборки через систему конфигов. Все `plugins` и `loaders` вынесены и описаны для переиспользования во
всех конфигах

## Поддерживает

* SCSS/SASS - Препроцессор css
* SVG Sprite, создание спрайтов svg иконок
* Pug templates - Поддержка языка pug
* HTML loader - Поддержка HTML
* Javascript (babel) - Компиляция и минификация js кода
* Fonts loader - Загрузка своих шрифтов
* Images loader - Загрзучик картинок

* Включен в сборку SWIPER

## Для старта

```shell
    cd ./prfoject-folder
    git clone https://github.com/smiledie-hub/webpack-assembly .
    yarn
```

## Комманды

```shell
    yarn build
    yarn build:dev
    yarn dev
```


## Структура проекта
* `src`
    * `assets` - Хранение SASS/SCSS/CSS и JS файлов
      * `js`
        * `spec`
            * `index.js` - Входной файл для подключения специфичных функции
            * `icons.js` - Файл для подключения SVG иконок для преобразования в sprite лист
        * `fixes`
          * `index.js` - Входной файл для подключения фиксов
          * `vh-fix.js` - Фикс высоты для мобильных устройст
        * `index.js` - Корневой файл
      * `scss`
        * `components` - Компоненты
        * `layout` - Стили каркаса страницы
        * `spec` - Глобальные стили (а так же миксины, функции и переменные)
          * `_autoload.scss` - Служит для подключения внешних стилей ( к примеру стили swiper )
          * `_reset.scss` - Сброс стандарных браузерных стилей
        * `main.scss` - Точка входа
    * `public` - Хранение статичиских файлов (картинки, иконки, шрифты)
      * `images` - Изображения (PNG, JPG, SVG и тп), SVG не будут собраны в sprite лист из этой папки
      * `fonts` - Просто статическая папка с шрифтами
      * `icons` - Собирает из этой папки все svg в sprite лист
    * `views` - HTML/PUG Шаблоны
      * `components` - Компоненты страниц (актуально для PUG)
        * `mixins` - Миксины
          * `icon.pug` - Встраивание иконок SVG из sprite листа
          * `loop.pug` - Альтернатива циклу (Нужна для упращения верстки повторяющихся элементов)
      * `layout` - Шаблоны страниц (актуально для PUG)
      * `pages` - Хранит страницы проекта (после добавления или удаления, нужно перезапустить сборку)
    * `index.js` - Подключение корневых файлов