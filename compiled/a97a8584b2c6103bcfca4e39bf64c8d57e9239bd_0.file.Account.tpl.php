<?php
/* Smarty version 4.3.1, created on 2023-08-02 05:23:54
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Layouts\Account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c9be3a8e5c48_01972126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a97a8584b2c6103bcfca4e39bf64c8d57e9239bd' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Layouts\\Account.tpl',
      1 => 1690942404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Includes/Main_CSS.tpl' => 1,
    'file:Includes/Main_JS.tpl' => 1,
  ),
),false)) {
function content_64c9be3a8e5c48_01972126 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36171648064c9be3a8e0a19_53300024', "page_css");
?>


    <title><?php echo smarty_function_env(array('param'=>"APP_NAME"),$_smarty_tpl);?>
</title>
</head>
<body>
    <div class="root" data-theme="dark">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47615063364c9be3a8e4a75_65086834', "root");
?>

    </div>
</body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:Includes/Main_JS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107009859564c9be3a8e56f0_53086004', "page_js");
}
/* {block "page_css"} */
class Block_36171648064c9be3a8e0a19_53300024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_36171648064c9be3a8e0a19_53300024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_css"} */
/* {block "root"} */
class Block_47615063364c9be3a8e4a75_65086834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_47615063364c9be3a8e4a75_65086834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "root"} */
/* {block "page_js"} */
class Block_107009859564c9be3a8e56f0_53086004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_107009859564c9be3a8e56f0_53086004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_js"} */
}
