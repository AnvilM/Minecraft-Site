<?php
/* Smarty version 4.3.1, created on 2023-08-01 01:08:14
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Home\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c830ce855f88_67700887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e084ae8de4d45d8d52aa408e5ea811c64599dde4' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Home\\Index.tpl',
      1 => 1690841292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c830ce855f88_67700887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162309845064c830ce8546d8_95932796', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74473832664c830ce8551a2_71845247', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106721983964c830ce855967_11671689', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Home.tpl");
}
/* {block "page_css"} */
class Block_162309845064c830ce8546d8_95932796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_162309845064c830ce8546d8_95932796',
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
class Block_74473832664c830ce8551a2_71845247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_74473832664c830ce8551a2_71845247',
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
class Block_106721983964c830ce855967_11671689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_106721983964c830ce855967_11671689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app">
        <div class="wrapper">
            <form action="/Signup" method="POST" class="primary-form signup">
                <div class="header">
                    <div class="title text-ten">Регистрация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм" name="Login">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Почта" name="Email">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Пароль" name="Password">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Повтор пароля" name="Re_Password">

                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="link text-rus text text-secondary self-left pointer" id="Login">Уже есть аккаунт</div>
                    </div>
                </div>
                <div class="footer">
                    <a href="/" class="button accent-button text-ten text-vlg pointer">Подробнее ></a>
                </div>
            </form>

            <form class="primary-form login" style="display: none;">
                <div class="header">
                    <div class="title text-ten">Авторизация</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <input type="text" class="input primary-input text-rus text-vlg" placeholder="Никнейм">
                    <input type="password" class="input primary-input text-rus text-vlg" placeholder="Пароль">
                    <div class="buttons">
                        <button type="submit" class="button primary-button text-ten text-vlg pointer">Продолжить!</button>
                        <div class="link text-rus text text-secondary self-left pointer">Забыли пароль?</div>
                        <div class="link text-rus text text-secondary self-left pointer" id="Signup">Ещё нет аккаунта</div>
                    </div>
                </div>
            </form>

            <form class="primary-form confirm" style="display: none;">
                <div class="header">
                    <div class="title text-ten">Подтверждение</div>
                    <img src="/assets/icons/icon.png" alt="" class="icon-xl">
                </div>
                <div class="body">
                    <div class="text-lg text-center text-attention">
                        Для подтверждения регистрации, введите код, отправленнй вам на электронную почту 
                    </div>
                </div>
                <div class="footer">
                    <a href="" type="submit" class="button primary-button text-ten text-vlg pointer">Открыть почту</a>
                </div>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "root"} */
}
