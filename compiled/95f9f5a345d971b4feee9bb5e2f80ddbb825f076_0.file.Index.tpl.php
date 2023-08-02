<?php
/* Smarty version 4.3.1, created on 2023-08-02 18:29:37
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Account\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca7661f16e25_50428612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f9f5a345d971b4feee9bb5e2f80ddbb825f076' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Account\\Index.tpl',
      1 => 1690990103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca7661f16e25_50428612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78708797564ca7661f156a3_93078134', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167718627964ca7661f16116_69723638', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160305195564ca7661f168b5_70058506', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Account.tpl");
}
/* {block "page_css"} */
class Block_78708797564ca7661f156a3_93078134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_78708797564ca7661f156a3_93078134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "page_css"} */
/* {block "page_js"} */
class Block_167718627964ca7661f16116_69723638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_167718627964ca7661f16116_69723638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "page_js"} */
/* {block "root"} */
class Block_160305195564ca7661f168b5_70058506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_160305195564ca7661f168b5_70058506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app">
        <div class="wrapper">
            www
        </div>
    </div>
<?php
}
}
/* {/block "root"} */
}
