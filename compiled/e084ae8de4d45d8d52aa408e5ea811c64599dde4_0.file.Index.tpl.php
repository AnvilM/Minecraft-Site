<?php
/* Smarty version 4.3.1, created on 2023-08-02 05:48:44
  from 'C:\Users\211an\Desktop\Minecraft\Minecraft-Site\resources\views\Home\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c9c40ce49261_91490416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e084ae8de4d45d8d52aa408e5ea811c64599dde4' => 
    array (
      0 => 'C:\\Users\\211an\\Desktop\\Minecraft\\Minecraft-Site\\resources\\views\\Home\\Index.tpl',
      1 => 1690944463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c9c40ce49261_91490416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207072239964c9c40ce47896_93257536', "page_css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111326595964c9c40ce48466_53779459', "page_js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145991721964c9c40ce48c37_53752294', "root");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/Home.tpl");
}
/* {block "page_css"} */
class Block_207072239964c9c40ce47896_93257536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_css' => 
  array (
    0 => 'Block_207072239964c9c40ce47896_93257536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/static/css/Home/Index/Main.css">
    <link rel="stylesheet" href="/static/css/Home/Index/ConfirmCode.css">

<?php
}
}
/* {/block "page_css"} */
/* {block "page_js"} */
class Block_111326595964c9c40ce48466_53779459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_js' => 
  array (
    0 => 'Block_111326595964c9c40ce48466_53779459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/static/js/Home/Index/Main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/js/Home/Index/ConfirmCode.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "page_js"} */
/* {block "root"} */
class Block_145991721964c9c40ce48c37_53752294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'root' => 
  array (
    0 => 'Block_145991721964c9c40ce48c37_53752294',
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
                <div class="err text-warning text-rus text-lg text-center"></div>
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
                    <fieldset name='number-code' data-number-code-form>
                        <input autofocus type="number" min='0' max='9' name='number-code-0' data-number-code-input='0' required  />
                        <input type="number" min='0' max='9' name='number-code-1' data-number-code-input='1' required  />
                        <input type="number" min='0' max='9' name='number-code-2' data-number-code-input='2' required  />
                        <input type="number" min='0' max='9' name='number-code-3' data-number-code-input='3' required  />
                    </fieldset>
                </div>
                <div class="footer">
                    <a href="" target="_blank" type="submit" class="button primary-button text-ten text-vlg pointer">Открыть почту</a>
                </div>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "root"} */
}
