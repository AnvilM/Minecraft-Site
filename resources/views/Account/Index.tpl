{extends file="Layouts/Account.tpl"}


{block name="page_css"}

{/block}

{block name="page_js"}
    <script>$('.nav-bar > #Main').addClass('active')</script>
{/block}

{block name="root"}
    <div class="app">
        <div class="wrapper">
            {include file="Includes/Account/Navbar.tpl"}
            <div class="panels"></div>
        </div>
    </div>
{/block}