<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 04:23:29
         compiled from "../../smarty/templates/psp2013-page-question-popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1565837736526f2a3176c5d8-30351538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f3664a1e98c2ae774b4e9c36a94bf2d47e37878' => 
    array (
      0 => '../../smarty/templates/psp2013-page-question-popup.tpl',
      1 => 1378657863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1565837736526f2a3176c5d8-30351538',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<a href="#popupInfo" data-rel="popup" data-role="button" data-icon="info" data-iconpos="notext" class="right computer"><?php echo $_smarty_tpl->getVariable('text')->value['info'];?>
</a>
<div data-role="popup" id="popupInfo">
	<p><?php echo $_smarty_tpl->getVariable('text')->value['popup_division'];?>
<a href="http://www.psp.cz/sqw/hlasy.sqw?g=<?php echo $_smarty_tpl->getVariable('question')->value->id_division;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('question')->value->id_division;?>
</a></p>
	<?php if (isset($_smarty_tpl->getVariable('question',null,true,false)->value->id_document)){?>
	<p><?php echo $_smarty_tpl->getVariable('text')->value['popup_document'];?>
<a href="http://www.psp.cz/sqw/historie.sqw?o=6&T=<?php echo $_smarty_tpl->getVariable('question')->value->id_document;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('question')->value->id_document;?>
</a></p>
	<?php }?>
</div>
