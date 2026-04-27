<footer class="footer">
    <div class="footer__top">
        <div class="footer__container">

            <div class="footer__logo">
                <img src="{{ asset('images/logo.svg') }}" alt="KOMEK">
            </div>

            <div class="footer__contact">
                <span class="footer__email">admin@example.com</span>
                <span class="footer__email">ticket@example.com</span>
                <span class="footer__address">улица Тестовая 1</span>
            </div>

            <div class="footer__phone">
                <span class="footer__number">+7 (775) 000 00 01</span>
                <span class="footer__label">Касса</span>
            </div>

            <div class="footer__schedule">
                <span class="schedule__time">08:00 - 22:00 с пн.-пт.</span>
                <span class="schedule__label">График работы</span>
            </div>

        </div>
    </div>

    <div class="footer__middle">
        <div class="footer__container">

            <div class="footer__menu">
                <span class="footer__title">Меню</span>
                <ul class="footer__list">
                    <li><a href="#" class="footer__link"></a>Афиша</li>
                    <li><a href="#" class="footer__link"></a>Сеансы</li>
                    <li><a href="#" class="footer__link"></a>Пушкинская карта</li>
                    <li><a href="#" class="footer__link"></a>Кинотеатр</li>
                    <li><a href="#" class="footer__link"></a>Контакты</li>
                </ul>
            </div>

            <div class="footer__payment">
                <span class="footer__title">Способы оплаты:</span>
                <div class="payment__icons">
                    <img src="{{ asset('images/Mastercard.svg') }}" alt="Mastercard">
                    <img src="{{ asset('images/Visa.svg') }}" alt="Visa">
                </div>
                <p class="footer__text">
                    Все сеансы начинаются с рекламно-информационного блока. <br>
                    Точную продолжительность сеансов можно уточнить в кинотеатре.
                </p>
            </div>

        </div>
    </div>

    <div class="footer__bottom">
        <div class="footer__container">
            <div class="header__socials">
                <a href="#" class="icon facebook">
                    <img src="{{ asset('images/facebook.svg') }}" alt="Facebook">
                </a>
                <a href="#" class="icon instagram">
                    <img src="{{ asset('images/instagram.svg') }}" alt="Instagram">
                </a>
                <a href="#" class="icon youtube">
                    <img src="{{ asset('images/youtube.svg') }}" alt="YouTube">
                </a>
                <a href="#" class="icon vk">
                    <img src="{{ asset('images/vk.svg') }}" alt="VK">
                </a>
            </div>
             <p class="footer__copyright">© 2025 Все права защищены</p>
        </div>
    </div>
</footer>