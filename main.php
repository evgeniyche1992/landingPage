<div class="wrapper" id="laptop">
    <section id="main">
        <div>
            <h2>ГЛАВНАЯ</h2>
            <span>
                Как при помощи хеша ловить вирусы?
                Примерно так же, как звукозаписывающие лейблы и кинопрокатные компании защищают свой контент, сообщество
                создает списки зловредов (многие из них доступны публично), а точнее, списки их хешей. Причем это может
                быть хеш не всего зловреда целиком, а лишь какого-либо его специфического и хорошо узнаваемого
                компонента. С одной стороны, это позволяет пользователю, обнаружившему подозрительный файл, тут же
                внести его хеш-код в одну из подобных открытых баз данных и проверить, не является ли файл вредоносным.
                С другой — то же самое может сделать и антивирусная программа, чей «движок» использует данный метод
                детектирования наряду с другими, более сложными.
                Криптографические хеш-функции также могут использоваться для защиты от фальсификации передаваемой
                информации. Иными словами, вы можете удостовериться в том, что файл по пути куда-либо не претерпел
                никаких изменений, сравнив его хеши, снятые непосредственно до отправки и сразу после получения. Если
                данные были изменены даже всего на 1 байт, хеш-коды будут отличаться, как мы уже убедились в самом
                начале статьи. Недостаток такого подхода лишь в том, что криптографическое хеширование требует больше
                вычислительных мощностей или времени на вычисление, чем алгоритмы с отсутствием криптостойкости. Зато
                они в разы надежнее.
                Кстати, в повседневной жизни мы, сами того не подозревая, иногда пользуемся простейшими хешами.
                Например, представьте, что вы совершаете переезд и упаковали все вещи по коробкам и ящикам. Погрузив их
                в грузовик, вы фиксируете количество багажных мест (то есть, по сути, количество коробок) и запоминаете
                это значение. По окончании выгрузки на новом месте, вместо того чтобы проверять наличие каждой коробки
                по списку, достаточно будет просто пересчитать их и сравнить получившееся значение с тем, что вы
                запомнили раньше. Если значения совпали, значит, ни одна коробка не потерялась.

            </span>
        </div>
    </section>

    <section id="work" >
        <h2>ПРИМЕРЫ</h2>
        <section id="slider_bl_css">
            <ul class="slides">
                <input type="radio" name="radio-btn" id="img-1" checked />
                <li class="slide-container">
                    <div class="slide">
                        <img class="minimized" src="img/bck.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-4" class="prev">&#x2039;</label>
                        <label for="img-2" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-2" />
                <li class="slide-container">
                    <div class="slide">
                        <img class="minimized" src="img/bck2.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-1" class="prev">&#x2039;</label>
                        <label for="img-3" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-3" />
                <li class="slide-container">
                    <div class="slide">
                        <img class="minimized" src="img/bck3.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-2" class="prev">&#x2039;</label>
                        <label for="img-4" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-4" />
                <li class="slide-container">
                    <div class="slide">
                        <img class="minimized" src="img/bck4.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-3" class="prev">&#x2039;</label>
                        <label for="img-1" class="next">&#x203a;</label>
                    </div>
                </li>


                <li class="nav-dots">
                    <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                    <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                    <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                    <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                </li>
            </ul>
        </section>
        


<div id="slider">
<figure>
<img src="img/bck.jpg" alt>
<img src="img/bck2.jpg" alt>
<img src="img/bck3.jpg" alt>
<img src="img/bck4.jpg" alt>
<img src="img/bck5.jpg" alt>
</figure>
</div>


        <section id="contacts">
            <h2>ОБРАТНАЯ СВЯЗЬ</h2>
            <form method="POST" id="formContacts">
                <input class="inputContacts" id="phone" type="text" name="phone" placeholder="+375 (ХХ) ХХХ-ХХ-ХХ"
                    required></input>
                <input class="inputContacts" id="name" type="text" name="name" placeholder="Имя" required></input>
                <input class="inputContacts" id="mail" type="text" name="mail" placeholder="E-mail"
                    required></input><br>
                <input class="inputSubmit" type="submit" value="ОТПРАВИТЬ" name="submitButton"></input>
            </form>
        </section>

        
        <section id="about">
            <div>
                <h2>О НАС</h2>
                https://www.coursera.org/learn/html-css-javascript-for-web-developers/lecture/CoBFV/development-environment-setup-part-1
                - курсы по HTML,CSS,JS <br><br>
                https://nnmclub.to/forum/viewtopic.php?t=1401806 - OTUS network engineer<br><br>
                https://edu-cisco.org/free-education/ - курсы бесплатные и видеоинструкции<br><br>
            </div>
        </section>
        
<div class="cart-overlay">
    <!-- cart-overlay-open -->
    <div class="cart">
        <h1>Заглушка</h1>
    </div>
    <button class="cart__btn-close"></button>
</div>
</div>

</div>

<div class="wrapper" id="mobile">
    <section id="main">
        <div>
            <h2>ГЛАВНАЯ</h2>
            <span>
                Как при помощи хеша ловить вирусы?
                Примерно так же, как звукозаписывающие лейблы и кинопрокатные компании защищают свой контент, сообщество
                создает списки зловредов (многие из них доступны публично), а точнее, списки их хешей. Причем это может
                быть хеш не всего зловреда целиком, а лишь какого-либо его специфического и хорошо узнаваемого
                компонента. С одной стороны, это позволяет пользователю, обнаружившему подозрительный файл, тут же
                внести его хеш-код в одну из подобных открытых баз данных и проверить, не является ли файл вредоносным.
                С другой — то же самое может сделать и антивирусная программа, чей «движок» использует данный метод
                детектирования наряду с другими, более сложными.
                Криптографические хеш-функции также могут использоваться для защиты от фальсификации передаваемой
                информации. Иными словами, вы можете удостовериться в том, что файл по пути куда-либо не претерпел
                никаких изменений, сравнив его хеши, снятые непосредственно до отправки и сразу после получения. Если
                данные были изменены даже всего на 1 байт, хеш-коды будут отличаться, как мы уже убедились в самом
                начале статьи. Недостаток такого подхода лишь в том, что криптографическое хеширование требует больше
                вычислительных мощностей или времени на вычисление, чем алгоритмы с отсутствием криптостойкости. Зато
                они в разы надежнее.
                Кстати, в повседневной жизни мы, сами того не подозревая, иногда пользуемся простейшими хешами.
                Например, представьте, что вы совершаете переезд и упаковали все вещи по коробкам и ящикам. Погрузив их
                в грузовик, вы фиксируете количество багажных мест (то есть, по сути, количество коробок) и запоминаете
                это значение. По окончании выгрузки на новом месте, вместо того чтобы проверять наличие каждой коробки
                по списку, достаточно будет просто пересчитать их и сравнить получившееся значение с тем, что вы
                запомнили раньше. Если значения совпали, значит, ни одна коробка не потерялась.

            </span>
        </div>
    </section>

    <section id="work" >
        <h2>ПРИМЕРЫ</h2>
        DDDDD
        <section id="contacts">
            <h2>ОБРАТНАЯ СВЯЗЬ</h2>
            <form method="POST" id="formContacts">
                <input class="inputContacts" id="phone" type="text" name="phone" placeholder="+375 (ХХ) ХХХ-ХХ-ХХ"
                    required></input>
                <input class="inputContacts" id="name" type="text" name="name" placeholder="Имя" required></input>
                <input class="inputContacts" id="mail" type="text" name="mail" placeholder="E-mail"
                    required></input><br>
                <input class="inputSubmit" type="submit" value="ОТПРАВИТЬ" name="submitButton"></input>
            </form>
        </section>

        
        <section id="about">
            <div>
                <h2>О НАС</h2>
                https://www.coursera.org/learn/html-css-javascript-for-web-developers/lecture/CoBFV/development-environment-setup-part-1
                - курсы по HTML,CSS,JS <br><br>
                https://nnmclub.to/forum/viewtopic.php?t=1401806 - OTUS network engineer<br><br>
                https://edu-cisco.org/free-education/ - курсы бесплатные и видеоинструкции<br><br>
            </div>
        </section>
        

</div>
<?php
include ('connectdatabase.php');
if(isset($_REQUEST['submitButton'])){
include_once('send.php');
    $sqlRequest = "INSERT INTO `lending_data` (`id`, `phone`, `name`, `e-mail`) VALUES (NULL, '$inputPhone', '$inputName', '$inputMail');"; //запрос sql
    $resultSQL = mysqli_query($conn,$sqlRequest);
    };
?>


