<?php
/* Smarty version 4.3.1, created on 2023-08-02 18:49:45
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Layouts\Account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca7b1909f463_90716545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a97a8584b2c6103bcfca4e39bf64c8d57e9239bd' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Layouts\\Account.tpl',
      1 => 1690991380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Includes/Main_CSS.tpl' => 1,
    'file:Includes/Main_JS.tpl' => 1,
  ),
),false)) {
function content_64ca7b1909f463_90716545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\libs\\smarty\\libs\\plugins\\function.env.php','function'=>'smarty_function_env',),));
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33194746464ca7b1909a5f1_39954737', "page_css");
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
                    <img src="/assets/Users/Default/Avatar.png" alt="" class="icon-lg icon-pixel">
                </div>
            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105323830264ca7b1909e234_54290407', "root");
?>

    </div>
</body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:Includes/Main_JS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177745519364ca7b1909ef07_48428752', "page_js");
}
/* {block "page_css"} */
class Block_33194746464ca7b1909a5f1_39954737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_33194746464ca7b1909a5f1_39954737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_css"} */
/* {block "root"} */
class Block_105323830264ca7b1909e234_54290407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_105323830264ca7b1909e234_54290407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "root"} */
/* {block "page_js"} */
class Block_177745519364ca7b1909ef07_48428752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_177745519364ca7b1909ef07_48428752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_js"} */
}
