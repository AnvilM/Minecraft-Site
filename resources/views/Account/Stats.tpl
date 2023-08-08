{extends file="Layouts/Account.tpl"}


{block name="page_css"}

{/block}

{block name="page_js"}
    <script>$('.nav-bar > .nav-bar-fixed > #Stats').addClass('active')</script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels">

                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Статистика</div>
                        <div class="text-rus text-vsm text-secondary">Ваша статистика на сервере</div>
                    </div>
                    <div class="el" disabled> 
                        <div class="text">Время в игре: 57 мин.</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Пройденное расстояние: 7 км.</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Сообщений в чат: 0</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Выстрелов сделано: 11</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Смертей: 1</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Убито игроков: 3</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Убито зомби: 24</div>
                    </div>
                </div>
                
                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Репутация</div>
                        <div class="text-rus text-vsm text-secondary">Ваша репутация на сервере</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text text-nlh">
                            <div class="text">Бан: Отсутствует</div>
                            <div class="text-rus text-vsm text-secondary">Игровая блокировка</div>
                        </div>
                    </div>

                    <div class="el" disabled>
                        <div class="text text-nlh">
                            <div class="text">Мут: Отсутствует</div>
                            <div class="text-rus text-vsm text-secondary">Блокировка чата</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}