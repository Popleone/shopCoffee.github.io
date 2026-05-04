<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- шапка  -->
    <div class="container-hat-sale">
        <video autoplay muted loop playsinline class="video-bg">
            <source src="seed.mp4" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>

        <div class="content">

            <header>
                <a href="index.php">Главная</a>
                <a href="coffee.php">Товар</a>
                <a href="delivery.php">Заказы</a>
                <a href="job.php">Обучение</a>
                <a href="history.php">История</a>
            </header>
            <div class="lineRed"></div>

            <div class="columns-container">

                <div class="oneSt">
                    <h1>Рио <br> Де Кофе</h1>
                    <h3>Оформляйте большие заказы с большими скидками</h3>
                </div>

                <div class="line-sale-hat"></div>
                <div class="line-sale-hat2"></div>

            </div>


        </div>
    </div>
    <a href="#sale">
        <div class="Str">
            <img src="img/str.png" alt="">
        </div>
    </a>

    <div class="sale" id="sale">
        <h2 class="saleTxt">Мы доставляем наш кофе по всей России</h2>

        <div class="block-advantage">
            <div class="block">
                <img src="img/sale1.png" alt=""> <br>
                <span>Доставляем свежеобжаренный<br>кофе в 80+ городов России.<br>
                    <p style="color: #e32222;">Присоединяйтесь!</p>
                </span>
            </div>

            <div class="block">
                <img src="img/sale2.jpg" alt=""> <br>
                <span style="color: #1a1a1a;">Отправка в течение<span style="color: #e32222;">24 часов.</span> <br> Собственная служба доставки для вас.<br>
                    выбирайте удобный способ.</span>
            </div>

            <div class="block">
                <img src="img/sale3.jpg" alt=""> <br>
                <span style="color: #1a1a1a;">Не любим, когда кофе теряет <br> вкус на складе. Поэтому обжариваем <br><span style="color: #e32222;"> под заказ и сразу</span> отправляем. </span>
            </div>
        </div>

    </div>
    <div class="But-sale">
        <img src="img/Group42.png" alt="">
        <a href="#formDelivery"><button class="contact-btn">Связаться для подробностей</button></a>
    </div>

    <div class="Had-Clocks">
        <h1>Просто попробуй!</h1>
    </div>

    <div class="cards-for-sale">
        <div class="card">
            <img src="img/Cash.png" alt=""> <br>
            <span>Вы можете оформить
                заказ на сумму от 600 ₽, мы доставим его в
                любой город до пункта выдачи или до двери.</span>
        </div>
        <div class="card">
            <img src="img/Jeep.png" alt=""> <br>
            <span>Стоимость доставки рассчитывается и зависит
                от вашего города, суммы и веса заказа.
                Почти всегда доставляем бесплатно.</span>
        </div>

    </div>

    <h2 class="h2-for-sale">Лучшее кофе для вашего бизнеса <br> Просто оформи анкету и наше сотрудничество <br>
        не составит себя долго ждать!</h2>
    <div class="form-sale">

        <form action="" id="formDelivery">
            <div class="input-img">
                <div class="inputs-group">
                    <input type="text" placeholder="ФИО/наименование организации">
                    <input type="email" placeholder="Эл. почта">
                    <input type="number" placeholder="Номер телефона">
                    <input type="text" placeholder="Адрес доставки">
                </div>
                <img src="img/formImg.png" alt="">
            </div>
            <p>Количество товара (указано в кг)</p>

            <div class="range-wrapper">
                <input type="range" min="1" max="100" value="10" class="range" id="quantity-range">
                <span class="range-value" id="range-value">10 кг</span>
            </div>

            <div class="consent-block">
                <input type="checkbox" id="consent" class="checkbox" required>
                <label for="consent">
                    Принимаю <a href="#" class="consent-link">Политику конфиденциальности</a>
                    и <a href="#" class="consent-link">Правила обработки персональных данных</a>
                </label>
            </div>

            <div class="text-block">

                <div class="block-for-text">
                    <p>Скидка на первый заказ 60%</p>
                    <img src="img/Cafe.png" alt="">
                </div>


                <div class="block-for-text">
                    <img src="img/Documents.png" alt="">
                    <p>Вышлем прайс-лист на почту</p>
                </div>
            </div>
            <h2>Наш оператор свяжется с вами</h2>
            <button type="submit" class="contact-btn">Отправить</button>
        </form>
    </div>
    <!-- подвал -->
    <div class="footer">
        <div class="Line"></div>
        <p>+23 32 1123 134 13 <br>
            г. Арбитраж д. 413 5 этаж <br>
            RioDeCaffeno@gmail.com
        </p>
        <span>2026 г. Разработано Мной</span>
    </div>

    <script>
        let rangeInput = document.getElementById('quantity-range');
        let rangeValue = document.getElementById('range-value');

        rangeInput.addEventListener('input', function() {
            rangeValue.textContent = this.value + ' кг';
        });

         // появление текста

        document.addEventListener('DOMContentLoaded', function(){
            let elements = document.querySelectorAll('.saleTxt, .h2-for-sale');
            let observer = new IntersectionObserver((entries) =>{
                entries.forEach(entry =>{
                    if (entry.isIntersecting){
                        entry.target.classList.add('show');
                    }
                });
            }, {threshold: 0.5 });
            elements.forEach(el => observer.observe(el));
        })
    </script>

</body>

</html>