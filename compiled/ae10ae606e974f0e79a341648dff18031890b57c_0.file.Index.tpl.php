<?php
/* Smarty version 4.3.1, created on 2023-08-06 15:16:55
  from 'D:\Devs\Minecraft\Minecraft-Site\resources\views\Account\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64cf8f37714403_48675396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae10ae606e974f0e79a341648dff18031890b57c' => 
    array (
      0 => 'D:\\Devs\\Minecraft\\Minecraft-Site\\resources\\views\\Account\\Index.tpl',
      1 => 1691323972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Includes/Account/Navbar.tpl' => 1,
  ),
),false)) {
function content_64cf8f37714403_48675396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70408211264cf8f37710b47_76628842', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190514202964cf8f37711622_58887994', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186485527664cf8f37711df1_57370770', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Account.tpl");
}
/* {block "page_css"} */
class Block_70408211264cf8f37710b47_76628842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_70408211264cf8f37710b47_76628842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "page_css"} */
/* {block "page_js"} */
class Block_190514202964cf8f37711622_58887994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_190514202964cf8f37711622_58887994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>$('.nav-bar > #Main').addClass('active')<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "page_js"} */
/* {block "root"} */
class Block_186485527664cf8f37711df1_57370770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_186485527664cf8f37711df1_57370770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app">
        <div class="wrapper">
            <?php $_smarty_tpl->_subTemplateRender("file:Includes/Account/Navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="panels"></div>
        </div>
    </div>
<?php
}
}
/* {/block "root"} */
}
