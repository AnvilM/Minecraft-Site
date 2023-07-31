<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {include file="Includes/Main.tpl"}

    {block name="page_css"}{/block}

    <title>{env param="APP_NAME"}</title>
</head>
<body>
    <div class="root" data-theme="dark">
        {block name="root"}{/block}
    </div>
</body>
</html>

{block name="page_js"}{/block}