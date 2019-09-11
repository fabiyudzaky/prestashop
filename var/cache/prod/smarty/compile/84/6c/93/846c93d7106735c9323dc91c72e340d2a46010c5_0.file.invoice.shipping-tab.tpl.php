<?php
/* Smarty version 3.1.33, created on 2019-07-03 14:37:40
  from 'C:\xampp\htdocs\prestashop\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c5b449800c0_58746199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '846c93d7106735c9323dc91c72e340d2a46010c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\pdf\\invoice.shipping-tab.tpl',
      1 => 1560324858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c5b449800c0_58746199 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
