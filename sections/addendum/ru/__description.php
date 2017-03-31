<h2 class="item5">Полезная информация</h2>

<p align="justify">OpenCart — это многофункциональное, быстрое и понятное пользователю решение для электронной коммерции с
    привлекательным дизайном. Это идеальное решение для онлайн магазина. Стандартный пакет содержит все необходимые
    модуля и расширения для успешной торговли. Открытый исходный код предоставляет поистине выдающиеся возможности для
    Ваших клиентов.</p>

<h4>Дополнительная информация:</h4>
<ul class="marked-list">
    <li>
        <a target="_blank" href="http://www.opencart.com/">Официальный сайт OpenCart</a>
    </li>
    <li>
        <a target="_blank" href="http://forum.opencart.com/">Форум сообщества</a>
    </li>
    <li>
        <a href="/help/ru/ecommerce/opencart/opencart-tutorials/" target="_blank">OpenCart туториалы
        </a>
    </li>
</ul>

<h4>Не удается загрузить Google Fonts:</h4>
<ol class="index-list">
    <li>Откройте <strong>catalog\view\theme\themeXXX\stylesheet\stylesheet.css</strong> файл. </li>

    <li><p>Найдите следующую строку: </p>
        <code>//fonts.googleapis.com/css?family=[---your_web_font_name---]</code>
    </li>
    <li><p>Замените её следующим: </p>
        <code>//fonts.useso.com/css?family=[---your_web_font_name---]</code>
    </li>
</ol>

<h4>Валидация</h4>

<p align="justify" class="alert alert-info">В наших шаблонах мы придерживаемся семантических правил написания кода HTML-разметки и
    CSS-стилей. Однако, некоторые ошибки все же могут возникать при W3C валидации. Создание 100-процентно правильного
    кода, согласно стандартам консорциума W3C, ограничивает использование современных технологий создания сайтов, таких
    как спецификация CSS3 и разметка HTML5. Целью нашей компании является предоставление богатого пользовательского
    опыта с высококачественными шаблонами, и иногда нам приходится нарушать некоторые правила.</p>


<h4>Переводы языковых файлов</h4>
<p align="justify">После установки нового языкового пакета необходимо проверить, 
были ли модифицированны языковые файлы английского пака. Для этого зайдите в папки
 system\storage\modification\{admin,catalog}\language\en-gb и проверьте, есть ли в этой папке языковые файлы. Если файлы есть, необходимо сверить их файлами нового языка
  и дописать соответствующие модификации для каждого из них. Все модификации языков находятся в .ocmod.xml файлах, в папке с расширениями (themeXXX-extensions).</p>