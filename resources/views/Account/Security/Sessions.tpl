{extends file="Layouts/Account.tpl"}


{block name="page_css"}

{/block}

{block name="page_js"}
    
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels">
                <div class="panel">

                    <div class="title text-nlh">
                        <div class="text-rus text-secondary">Текущий сеанс</div>
                    </div>

                    <div class="el pointer text-nlh">
                        {if {isMobile device=$vars.sessions.c_session.0.5}}<img src="{icon icon='phone-active'}" alt="" class="icon icon-pixel">
                        {else}<img src="{icon icon='pc-active'}" alt="" class="icon icon-pixel">
                        {/if}
                        <div class="text">
                            <div class="text">{$vars.sessions.c_session.0.5}</div>
                            <div class="text-sm text-secondary">{$vars.sessions.c_session.0.6}</div>
                            <div class="text-vsm text-secondary">{$vars.sessions.c_session.0.4} • Активный</div>
                        </div>
                    </div>

                    <div class="el pointer text-nlh" href="/Account/Security/Sessions/Close_All">
                        <img src="{icon icon='exit-warning'}" alt="" class="icon icon-pixel">
                        <div class="text">
                            <div class="text text-warning">Завершить сеансы</div>
                            <div class="text-vsm text-secondary">Завершить все другие сеансы</div>
                        </div>
                    </div>

                </div>

                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-secondary">Другие сеансы</div>
                    </div>
                    {foreach from=$vars.sessions.o_sessions item=session}
                        <div class="el pointer text-nlh">
                            {if {isMobile device=$session.5}}
                                {if $session.7 == 1}<img src="{icon icon='phone-active'}" alt="" class="icon icon-pixel">
                                {else}<img src="{icon icon='phone'}" alt="" class="icon icon-pixel">
                                {/if}
                            {else}
                                {if $session.7 == 1}<img src="{icon icon='pc-active'}" alt="" class="icon icon-pixel">
                                {else}<img src="{icon icon='pc'}" alt="" class="icon icon-pixel">
                                {/if}
                            {/if}
                            <div class="text">
                                <div class="text">{$session.5}</div>
                                <div class="text-sm text-secondary">{$session.6}</div>
                                <div class="text-vsm text-secondary">{$session.4}, {$session.3|date_format:"%e.%m в %H:%M"}{if $session.7 == 0} • Завершён{/if}</div>
                            </div>
                        </div>
                    {/foreach}
                </div>

            
            </div>
        </div>
    </div>
{/block}