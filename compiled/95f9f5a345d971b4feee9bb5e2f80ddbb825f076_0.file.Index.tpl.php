<?php
/* Smarty version 4.3.1, created on 2023-08-02 05:23:54
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Account\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c9be3a828f12_57883039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f9f5a345d971b4feee9bb5e2f80ddbb825f076' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Account\\Index.tpl',
      1 => 1690942442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c9be3a828f12_57883039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74138375964c9be3a827680_41516815', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192693322164c9be3a828233_87896891', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192625326764c9be3a8289c5_98660862', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Account.tpl");
}
/* {block "page_css"} */
class Block_74138375964c9be3a827680_41516815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_74138375964c9be3a827680_41516815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "page_css"} */
/* {block "page_js"} */
class Block_192693322164c9be3a828233_87896891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_192693322164c9be3a828233_87896891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "page_js"} */
/* {block "root"} */
class Block_192625326764c9be3a8289c5_98660862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_192625326764c9be3a8289c5_98660862',
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
