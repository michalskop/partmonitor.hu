<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 22:37:20
         compiled from "../../smarty/templates/psp2013vk-compare-popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9056172052702a907b7288-29822599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5210311844bad93c943e1a8c4c14f8069788a48b' => 
    array (
      0 => '../../smarty/templates/psp2013vk-compare-popup.tpl',
      1 => 1381190728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9056172052702a907b7288-29822599',
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
