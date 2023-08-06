<?php
/* Smarty version 4.3.1, created on 2023-08-06 15:19:39
  from 'D:\Devs\Minecraft\Minecraft-Site\resources\views\Layouts\Account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64cf8fdbd0ec68_28458968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f4ddd29957bb1a8e1d25f63bc4f6b0d949803b' => 
    array (
      0 => 'D:\\Devs\\Minecraft\\Minecraft-Site\\resources\\views\\Layouts\\Account.tpl',
      1 => 1691324378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Includes/Main_CSS.tpl' => 1,
    'file:Includes/Main_JS.tpl' => 1,
  ),
),false)) {
function content_64cf8fdbd0ec68_28458968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Devs\\Minecraft\\Minecraft-Site\\libs\\smarty\\libs\\plugins\\function.env.php','function'=>'smarty_function_env',),1=>array('file'=>'D:\\Devs\\Minecraft\\Minecraft-Site\\libs\\smarty\\libs\\plugins\\function.get_avatar.php','function'=>'smarty_function_get_avatar',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $_smarty_tpl->_subTemplateRender("file:Includes/Main_CSS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <link rel="stylesheet" href="/static/css/Account/Main.css">
    <link rel="stylesheet" href="/static/css/Account/Header.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177356092064cf8fdbd090b8_20350470', "page_css");
?>


    <title><?php echo smarty_function_env(array('param'=>"APP_NAME"),$_smarty_tpl);?>
</title>
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
                    <img src="<?php echo smarty_function_get_avatar(array(),$_smarty_tpl);?>
" alt="" class="icon-lg icon-pixel">
                </div>
            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84454581164cf8fdbd0d946_65437856', "root");
?>

    </div>
</body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:Includes/Main_JS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160787891964cf8fdbd0e656_79483695', "page_js");
}
/* {block "page_css"} */
class Block_177356092064cf8fdbd090b8_20350470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_177356092064cf8fdbd090b8_20350470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_css"} */
/* {block "root"} */
class Block_84454581164cf8fdbd0d946_65437856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_84454581164cf8fdbd0d946_65437856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "root"} */
/* {block "page_js"} */
class Block_160787891964cf8fdbd0e656_79483695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_160787891964cf8fdbd0e656_79483695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_js"} */
}
