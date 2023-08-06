<?php
/* Smarty version 4.3.1, created on 2023-08-06 17:13:46
  from 'D:\Devs\Minecraft\Minecraft-Site\resources\views\Layouts\Account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64cfaa9ae69389_18650790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f4ddd29957bb1a8e1d25f63bc4f6b0d949803b' => 
    array (
      0 => 'D:\\Devs\\Minecraft\\Minecraft-Site\\resources\\views\\Layouts\\Account.tpl',
      1 => 1691331225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Includes/Main_CSS.tpl' => 1,
    'file:Includes/Main_JS.tpl' => 1,
  ),
),false)) {
function content_64cfaa9ae69389_18650790 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126805970864cfaa9ae64025_82582965', "page_css");
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
                <div class="avatar pointer" href="/Account">
                    <img src="<?php echo smarty_function_get_avatar(array(),$_smarty_tpl);?>
" alt="" class="icon-lg icon-pixel">
                </div>
            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37617405064cfaa9ae68068_21324889', "root");
?>

    </div>
</body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:Includes/Main_JS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61079386564cfaa9ae68d52_11168304', "page_js");
}
/* {block "page_css"} */
class Block_126805970864cfaa9ae64025_82582965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_126805970864cfaa9ae64025_82582965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_css"} */
/* {block "root"} */
class Block_37617405064cfaa9ae68068_21324889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_37617405064cfaa9ae68068_21324889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "root"} */
/* {block "page_js"} */
class Block_61079386564cfaa9ae68d52_11168304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_61079386564cfaa9ae68d52_11168304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_js"} */
}
