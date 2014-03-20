<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 04:40:46
         compiled from "../../../smarty/templates/psp2013-match-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193996596526f2e3e486483-51142692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc10a5a0076f56f9a6ed1f692f9e251bc73a31aa' => 
    array (
      0 => '../../../smarty/templates/psp2013-match-header.tpl',
      1 => 1380046271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193996596526f2e3e486483-51142692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div data-role="header" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_bar'];?>
" class="header">
	  <?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?><a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false"><?php echo $_smarty_tpl->getVariable('text')->value['calc'];?>
</a><?php }?>
	  <?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?><a href="/info" data-role="button" data-icon="info" data-iconpos="notext"><?php echo $_smarty_tpl->getVariable('text')->value['info'];?>
</a><?php }?>
	  <h3 class="h1"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('text')->value['page_header_desktop'], 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('text')->value['page_header_desktop'],SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('text')->value['page_header_desktop']));?>
</h3>
	</div>
