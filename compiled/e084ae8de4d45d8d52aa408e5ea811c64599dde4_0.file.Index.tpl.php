<?php
/* Smarty version 4.3.1, created on 2023-07-31 05:42:22
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Home\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c71f8e5d2425_14772044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e084ae8de4d45d8d52aa408e5ea811c64599dde4' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Home\\Index.tpl',
      1 => 1690771341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c71f8e5d2425_14772044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76837553664c71f8e5d0c37_20891372', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58660060764c71f8e5d16d6_10386212', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91988291064c71f8e5d1e88_79976863', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Home.tpl");
}
/* {block "page_css"} */
class Block_76837553664c71f8e5d0c37_20891372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_76837553664c71f8e5d0c37_20891372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/static/css/Home/Index/Main.css">
<?php
}
}
/* {/block "page_css"} */
/* {block "page_js"} */
class Block_58660060764c71f8e5d16d6_10386212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_58660060764c71f8e5d16d6_10386212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/static/js/Home/Index/Main.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "page_js"} */
/* {block "root"} */
class Block_91988291064c71f8e5d1e88_79976863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_91988291064c71f8e5d1e88_79976863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app">
        <div class="wrapper">
            <form action="/" method="POST" class="primary-form signup">
                <div class="header">
                    <div class="title text-ten">Регистрация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Почта">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Пароль">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Повтор пароля">

                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="button primary-flat-button text-ten text-vlg pointer" id="Login">Войти в аккаунт</div>
                    </div>
                </div>
                <div class="footer">
                    <a href="/" class="button accent-button text-ten text-vlg pointer">Подробнее ></a>
                </div>
            </form>

            <form action="/" method="POST" class="primary-form login" style="display: none;">
                <div class="header">
                    <div class="title text-ten">Авторизация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Пароль">
                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="button primary-flat-button text-ten text-vlg pointer" id="Signup">Регистрация</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "root"} */
}
