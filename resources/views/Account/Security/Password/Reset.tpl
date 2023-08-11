{extends file="Layouts/Account.tpl"}


{block name="page_css"}
    <link rel="stylesheet" href="/static/css/Account/Security/Password/Reset.css">
{/block}

{block name="page_js"}
    <script src="/static/js/Account/Security/Password/Reset.js"></script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels">
                <div class="panel">
                    <form class="el text-nlh" disabled>
                        <div class="header">
                            <img src="{icon icon='lock'}" alt="" class="icon icon-pixel">
                            <div class="text-vlg">Смена пароля</div>
                        </div>
                        <div class="err text-warning text-rus text-lg text-center"></div>
                        <div class="body">
                            <input type="password" class="input primary-input text-rus text-vlg" placeholder="Старый пароль" name="Old_pass">
                            <input type="password" class="input primary-input text-rus text-vlg" placeholder="Новый пароль" name="New_pass">
                            <input type="password" class="input primary-input text-rus text-vlg" placeholder="Повторите пароль" name="Re_new_pass">
                        </div>
                        <button type="submit" class="button primary-flat-button pointer text-vlg text-rus">Сменить пароль</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{/block}