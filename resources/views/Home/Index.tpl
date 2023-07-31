{extends file="Layouts/Home.tpl"}


{block name="page_css"}
    <link rel="stylesheet" href="/static/css/Home/Index/Main.css">
{/block}

{block name="page_js"}
    <script src="/static/js/Home/Index/Main.js"></script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            <form action="/" method="POST" class="primary-form signup">
                <div class="header">
                    <div class="title text-ten">Регистрация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Почта">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Пароль">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Повтор пароля">

                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="button primary-flat-button text-ten text-vlg pointer" id="Login">Войти в аккаунт</div>
                    </div>
                </div>
                <div class="footer">
                    <a href="/" class="button accent-button text-ten text-vlg pointer">Подробнее ></a>
                </div>
            </form>

            <form action="/" method="POST" class="primary-form login" style="display: none;">
                <div class="header">
                    <div class="title text-ten">Авторизация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Пароль">
                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="button primary-flat-button text-ten text-vlg pointer" id="Signup">Регистрация</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
{/block}