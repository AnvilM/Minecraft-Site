<?php
/* Smarty version 4.3.1, created on 2023-08-06 17:28:26
  from 'D:\Devs\Minecraft\Minecraft-Site\resources\views\Account\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64cfae0a6d58c1_16991744',
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
function content_64cfae0a6d58c1_16991744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121192198964cfae0a6d1a20_52650098', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81751531264cfae0a6d2645_15371295', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165602479564cfae0a6d2e87_70118881', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Account.tpl");
}
/* {block "page_css"} */
class Block_121192198964cfae0a6d1a20_52650098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_121192198964cfae0a6d1a20_52650098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "page_css"} */
/* {block "page_js"} */
class Block_81751531264cfae0a6d2645_15371295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_81751531264cfae0a6d2645_15371295',
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
class Block_165602479564cfae0a6d2e87_70118881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_165602479564cfae0a6d2e87_70118881',
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
