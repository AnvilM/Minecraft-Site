{extends file="Layouts/Account.tpl"}


{block name="page_css"}

{/block}

{block name="page_js"}
    <script>$('.nav-bar > .nav-bar-fixed > #Security').addClass('active')</script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels">
                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Данные аккаунта</div>
                        <div class="text-rus text-vsm text-secondary">Видны только вам</div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='mail'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Основная почта</div>
                            <div class="text-vsm text-secondary">21***@gmail.com</div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Способы входа</div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='lock'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Пароль</div>
                            <div class="text-vsm text-secondary">Сменить пароль</div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Сеансы</div>
                        <div class="text-rus text-vsm text-secondary">Ваши сеансы</div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='phone'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Список сеансов</div>
                            <div class="text-vsm text-secondary">Открыть список сессий</div>
                        </div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='exit-warning'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text text-warning">Завершить сеансы</div>
                            <div class="text-vsm text-secondary">Завершить все другие сеансы</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}