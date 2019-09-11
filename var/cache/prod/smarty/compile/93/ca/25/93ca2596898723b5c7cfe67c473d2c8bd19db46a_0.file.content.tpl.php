<?php
/* Smarty version 3.1.33, created on 2019-06-12 16:35:55
  from 'C:\xampp\htdocs\prestashop\adminweb\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00c77b5e2ef6_12071655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ca2596898723b5c7cfe67c473d2c8bd19db46a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminweb\\themes\\new-theme\\template\\content.tpl',
      1 => 1560324853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d00c77b5e2ef6_12071655 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
