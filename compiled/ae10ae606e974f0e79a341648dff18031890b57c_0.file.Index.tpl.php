<?php
/* Smarty version 4.3.1, created on 2023-08-09 17:31:03
  from 'D:\Devs\Minecraft\Minecraft-Site\resources\views\Account\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d3a3277ab273_06628488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae10ae606e974f0e79a341648dff18031890b57c' => 
    array (
      0 => 'D:\\Devs\\Minecraft\\Minecraft-Site\\resources\\views\\Account\\Index.tpl',
      1 => 1691591365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Includes/Account/Navbar.tpl' => 1,
  ),
),false)) {
function content_64d3a3277ab273_06628488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195757132164d3a3277a7ac5_32601910', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82021607064d3a3277a8593_72555050', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100085256064d3a3277a8d58_40637074', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Account.tpl");
}
/* {block "page_css"} */
class Block_195757132164d3a3277a7ac5_32601910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_195757132164d3a3277a7ac5_32601910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "page_css"} */
/* {block "page_js"} */
class Block_82021607064d3a3277a8593_72555050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_82021607064d3a3277a8593_72555050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>$('.nav-bar > .nav-bar-fixed > #Main').addClass('active').attr('disabled', true)<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "page_js"} */
/* {block "root"} */
class Block_100085256064d3a3277a8d58_40637074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_100085256064d3a3277a8d58_40637074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app">
        <div class="wrapper">
            <?php $_smarty_tpl->_subTemplateRender("file:Includes/Account/Navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="panels">
                <div class="panel">
                    <div class="title text-nlh">
                        <div class="text-rus text-sm">Информация</div>
                        <div class="text-rus text-vsm text-secondary">Основная информация</div>
                    </div>

                    <div class="el" disabled> 
                        <div class="text">Логин: Anvil</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Счёт: 10</div>
                    </div>

                    <div class="el" disabled>
                        <div class="text">Статус: Игрок</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "root"} */
}
