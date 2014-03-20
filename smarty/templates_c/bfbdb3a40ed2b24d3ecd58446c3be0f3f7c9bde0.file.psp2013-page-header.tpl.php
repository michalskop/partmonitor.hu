<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 04:35:20
         compiled from "../../smarty/templates/psp2013-page-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171958936526f2cf81e2591-48243862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfbdb3a40ed2b24d3ecd58446c3be0f3f7c9bde0' => 
    array (
      0 => '../../smarty/templates/psp2013-page-header.tpl',
      1 => 1383017718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171958936526f2cf81e2591-48243862',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div data-role="header" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_bar'];?>
" class="header">
    	<?php if ($_smarty_tpl->getVariable('key')->value>1){?><?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?><a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false"><?php echo $_smarty_tpl->getVariable('text')->value['calc'];?>
}</a><?php }?><?php }?>
		<h1 class="title"><span class="computer"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('text')->value['page_header_desktop'], 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('text')->value['page_header_desktop'],SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('text')->value['page_header_desktop']));?>
</span><span class="mobile"><?php echo $_smarty_tpl->getVariable('text')->value['page_header_mobile'];?>
<?php echo $_smarty_tpl->getVariable('key')->value;?>
/<?php echo $_smarty_tpl->getVariable('number_questions')->value;?>
</span></h1>
	</div>
