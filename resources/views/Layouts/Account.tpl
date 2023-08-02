<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {include file="Includes/Main_CSS.tpl"}
    
    <link rel="stylesheet" href="/static/css/Account/Main.css">
    <link rel="stylesheet" href="/static/css/Account/Header.css">
    {block name="page_css"}{/block}

    <title>{env param="APP_NAME"}</title>
</head>
<body>
    <div class="root" data-theme="dark">
        <div class="header">
            <div class="wrapper">
                <div class="logo">
                    <img src="/assets/icons/icon.png" alt="" class="icon-lg">
                    <div class="title text-ten text-lg">Crate</div>
                </div>
                <div class="avatar">
                    <img src="/assets/Users/Default/Avatar.png" alt="" class="icon-lg icon-pixel">
                </div>
            </div>
        </div>
        {block name="root"}{/block}
    </div>
</body>
</html>
{include file="Includes/Main_JS.tpl"}
{block name="page_js"}{/block}