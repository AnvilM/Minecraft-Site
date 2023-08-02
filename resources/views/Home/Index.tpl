{extends file="Layouts/Home.tpl"}


{block name="page_css"}
    <link rel="stylesheet" href="/static/css/Home/Index/Main.css">
    <link rel="stylesheet" href="/static/css/Home/Index/ConfirmCode.css">

{/block}

{block name="page_js"}
    <script src="/static/js/Home/Index/Main.js"></script>
    <script src="/static/js/Home/Index/ConfirmCode.js"></script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            <form action="/Signup" method="POST" class="primary-form signup">
                <div class="header">
                    <div class="title text-ten">Регистрация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="err text-warning text-rus text-lg text-center"></div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм" name="Login">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Почта" name="Email">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Пароль" name="Password">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Повтор пароля" name="Re_Password">

                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="link text-rus text text-secondary self-left pointer" id="Login">Уже есть аккаунт</div>
                    </div>
                </div>
                <div class="footer">
                    <a href="/" class="button accent-button text-ten text-vlg pointer">Подробнее ></a>
                </div>
            </form>

            <form class="primary-form login" style="display: none;">
                <div class="header">
                    <div class="title text-ten">Авторизация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="err text-warning text-rus text-lg text-center"></div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм" name="Login">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Пароль" name="Password">
                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="link text-rus text text-secondary self-left pointer">Забыли пароль?</div>
                        <div class="link text-rus text text-secondary self-left pointer" id="Signup">Ещё нет аккаунта</div>
                    </div>
                </div>
            </form>

            <form class="primary-form confirm" style="display: none;">
                <div class="header">
                    <div class="title text-ten">Подтверждение</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <div class="text-lg text-center text-attention">
                        Для подтверждения регистрации, введите код, отправленнй вам на электронную почту 
                    </div>
                    <fieldset name='number-code' data-number-code-form>
                        <input autofocus type="number" min='0' max='9' name='number-code-0' data-number-code-input='0' required  />
                        <input type="number" min='0' max='9' name='number-code-1' data-number-code-input='1' required  />
                        <input type="number" min='0' max='9' name='number-code-2' data-number-code-input='2' required  />
                        <input type="number" min='0' max='9' name='number-code-3' data-number-code-input='3' required  />
                    </fieldset>
                </div>
                <div class="footer">
                    <a href="http://gmail.com" target="_blank" type="submit" class="button primary-button text-ten text-vlg pointer">Открыть почту</a>
                </div>
            </form>
        </div>
    </div>
{/block}