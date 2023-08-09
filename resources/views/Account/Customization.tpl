{extends file="Layouts/Account.tpl"}


{block name="page_css"}

{/block}

{block name="page_js"}
    <script>$('.nav-bar > .nav-bar-fixed > #Customization').addClass('active')</script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels">

                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Одежда</div>
                        <div class="text-rus text-vsm text-secondary">Персонализация вашего героя</div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='hat'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Головной убор</div>
                            <div class="text-vsm text-secondary">Изменить головной убор</div>
                        </div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='shirt'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Футблока</div>
                            <div class="text-vsm text-secondary">Изменить футболку</div>
                        </div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='pants'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Штаны</div>
                            <div class="text-vsm text-secondary">Изменить штаны</div>
                        </div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='boots'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Обувь</div>
                            <div class="text-vsm text-secondary">Изменить обувь</div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Аккаунт</div>
                        <div class="text-rus text-vsm text-secondary">Персонализация вашего аккаунта</div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='star'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Статус</div>
                            <div class="text-vsm text-secondary">Изменить статус</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}