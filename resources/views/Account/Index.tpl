{extends file="Layouts/Account.tpl"}


{block name="page_css"}

{/block}

{block name="page_js"}
    <script>$('.nav-bar > .nav-bar-fixed > #Main').addClass('active')</script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels">
                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Информация</div>
                        <div class="text-rus text-vsm text-secondary">Основная информация</div>
                    </div>

                    <div class="el" disabled> 
                        <div class="text">Логин: Anvil</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Счёт: 10</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Статус: Игрок</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}