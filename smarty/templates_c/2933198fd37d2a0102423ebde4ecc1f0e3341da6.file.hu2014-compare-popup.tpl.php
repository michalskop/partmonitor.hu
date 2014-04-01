<?php /* Smarty version Smarty-3.0.7, created on 2014-04-01 01:20:22
         compiled from "../../smarty/templates/hu2014-compare-popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4152996175339f8364d5030-63289588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2933198fd37d2a0102423ebde4ecc1f0e3341da6' => 
    array (
      0 => '../../smarty/templates/hu2014-compare-popup.tpl',
      1 => 1396053870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4152996175339f8364d5030-63289588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<a href="#popupInfo-<?php echo $_smarty_tpl->getVariable('mp')->value->friendly_name;?>
-<?php echo $_smarty_tpl->getVariable('q_id')->value;?>
" data-rel="popup" data-role="button" data-icon="info" data-iconpos="notext" class="right computer" data-theme="c" title="<?php echo $_smarty_tpl->getVariable('details')->value[$_smarty_tpl->getVariable('mp')->value->friendly_name][$_smarty_tpl->getVariable('q_id')->value];?>
"><?php echo $_smarty_tpl->getVariable('details')->value[$_smarty_tpl->getVariable('mp')->value->friendly_name][$_smarty_tpl->getVariable('q_id')->value];?>
</a>
<div data-role="popup" id="popupInfo-<?php echo $_smarty_tpl->getVariable('mp')->value->friendly_name;?>
-<?php echo $_smarty_tpl->getVariable('q_id')->value;?>
" style="max-width:300px;">
  <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left"><?php echo $_smarty_tpl->getVariable('text')->value['close'];?>
</a>
	<p>
	  <?php echo $_smarty_tpl->getVariable('details')->value[$_smarty_tpl->getVariable('mp')->value->friendly_name][$_smarty_tpl->getVariable('q_id')->value];?>

	</p>
</div>
