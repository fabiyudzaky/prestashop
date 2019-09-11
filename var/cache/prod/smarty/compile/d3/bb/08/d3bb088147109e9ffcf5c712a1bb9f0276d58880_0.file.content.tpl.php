<?php
/* Smarty version 3.1.33, created on 2019-06-12 16:35:36
  from 'C:\xampp\htdocs\prestashop\adminweb\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00c768f09658_82034645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bb088147109e9ffcf5c712a1bb9f0276d58880' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminweb\\themes\\default\\template\\content.tpl',
      1 => 1560324854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d00c768f09658_82034645 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
