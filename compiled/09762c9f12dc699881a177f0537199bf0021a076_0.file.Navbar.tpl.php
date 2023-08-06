<?php
/* Smarty version 4.3.1, created on 2023-08-06 17:23:11
  from 'D:\Devs\Minecraft\Minecraft-Site\resources\views\Includes\Account\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64cfaccfd0fe89_78875749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09762c9f12dc699881a177f0537199bf0021a076' => 
    array (
      0 => 'D:\\Devs\\Minecraft\\Minecraft-Site\\resources\\views\\Includes\\Account\\Navbar.tpl',
      1 => 1691331790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64cfaccfd0fe89_78875749 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/static/css/Account/Navbar.css">

<div class="nav-bar">
    <div class="nav-bar-button pointer" id="Main" href="/Account">
        <div class="text-vlg text-rus">Главная</div>
    </div>
    <div class="nav-bar-button pointer" id="Customization" href="/Account/Customization">
        <div class="text-vlg text-rus">Персонализация</div>
    </div>
    <div class="nav-bar-button pointer" id="Security" href="/Account/Security">
        <div class="text-vlg text-rus">Безопасность</div>
    </div>
    <div class="nav-bar-button pointer" id="Data" href="/Account/Data">
        <div class="text-vlg text-rus">Данные</div>
    </div>
    <div class="nav-bar-button pointer" id="Logout" href="/Account/Logout">
        <div class="text-vlg text-rus text-warning">Выйти</div>
    </div>
</div><?php }
}
