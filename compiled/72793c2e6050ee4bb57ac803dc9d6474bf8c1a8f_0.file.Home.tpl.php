<?php
/* Smarty version 4.3.1, created on 2023-07-31 03:42:20
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Layouts\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c7036ce3b771_39790579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72793c2e6050ee4bb57ac803dc9d6474bf8c1a8f' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Layouts\\Home.tpl',
      1 => 1690764131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Includes/Main.tpl' => 1,
  ),
),false)) {
function content_64c7036ce3b771_39790579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\libs\\smarty\\libs\\plugins\\function.env.php','function'=>'smarty_function_env',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $_smarty_tpl->_subTemplateRender("file:Includes/Main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212189288564c7036ce37015_86888496', "page_css");
?>


    <title><?php echo smarty_function_env(array('param'=>"APP_NAME"),$_smarty_tpl);?>
</title>
</head>
<body>
    <div class="root" data-theme="dark">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4605911064c7036ce3ab24_47083269', "root");
?>

    </div>
</body>
</html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137734088564c7036ce3b2b1_29954000', "page_js");
}
/* {block "page_css"} */
class Block_212189288564c7036ce37015_86888496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_212189288564c7036ce37015_86888496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_css"} */
/* {block "root"} */
class Block_4605911064c7036ce3ab24_47083269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_4605911064c7036ce3ab24_47083269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "root"} */
/* {block "page_js"} */
class Block_137734088564c7036ce3b2b1_29954000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_137734088564c7036ce3b2b1_29954000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_js"} */
}
