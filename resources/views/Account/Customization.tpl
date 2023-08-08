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
                        <div class="text-rus text-sm">Персонаж</div>
                        <div class="text-rus text-vsm text-secondary">Персонализация вашего героя</div>
                    </div>
                    <div class="el pointer text-nlh">
                        <img src="{icon icon='shirt'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text">Одежда</div>
                            <div class="text-vsm text-secondary">Изменить одежду</div>
                        </div>
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