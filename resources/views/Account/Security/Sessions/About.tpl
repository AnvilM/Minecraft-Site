{extends file="Layouts/Account.tpl"}


{block name="page_css"}
    <link rel="stylesheet" href="/static/css/Account/Security/Sessions/About.css">
{/block}

{block name="page_js"}
    
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels">
                <div class="panel">
                    <div class="el text-nlh" disabled>
                        <div class="header">
                            {if {isMobile device=$vars.session.0.5}}
                                {if $vars.session.0.7 == 1}<img src="{icon icon='phone-active'}" alt="" class="icon icon-pixel">
                                {else}<img src="{icon icon='phone'}" alt="" class="icon icon-pixel">
                                {/if}
                            {else}
                                {if $vars.session.0.7 == 1}<img src="{icon icon='pc-active'}" alt="" class="icon icon-pixel">
                                {else}<img src="{icon icon='pc'}" alt="" class="icon icon-pixel">
                                {/if}
                            {/if}
                            <div class="text">
                                <div class="text-vlg">{$vars.session.0.5}</div>
                                <div class="text text-secondary">{$vars.session.0.3|date_format:"%e.%m в %H:%M"}</div>
                            </div>
                        </div>
                        <div class="h-line-separate"></div>
                        <div class="body">
                            <div class="el">
                                <div class="text-sm text-secondary">Место</div>
                                <div class="text-lg">{$vars.session.0.4}</div>
                            </div>

                            <div class="el">
                                <div class="text-sm text-secondary">Дата и Время</div>
                                <div class="text-lg">{$vars.session.0.3|date_format:"%e.%m в %H:%M"}</div>
                            </div>

                            <div class="el">
                                <div class="text-sm text-secondary">Приложение</div>
                                <div class="text-lg">{$vars.session.0.6}</div>
                            </div>

                            <div class="el">
                                <div class="text-sm text-secondary">IP-адресс</div>
                                <div class="text-lg">{$vars.session.0.8}</div>
                            </div>
                        </div>
                        <div class="h-line-separate"></div>
                        {if $vars.session.0.7 == 1}<div class="button warning-flat-button pointer text-vlg" href="/Account/Security/Sessions/Close?session_id={$vars.session.0.1}">Завершить сеанс</div>
                        {else} Сеанс Завершён
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}