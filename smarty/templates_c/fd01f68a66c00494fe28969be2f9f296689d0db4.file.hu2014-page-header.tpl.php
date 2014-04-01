<?php /* Smarty version Smarty-3.0.7, created on 2014-03-31 23:26:14
         compiled from "../../smarty/templates/hu2014-page-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19629622745339dd769f5254-31609055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd01f68a66c00494fe28969be2f9f296689d0db4' => 
    array (
      0 => '../../smarty/templates/hu2014-page-header.tpl',
      1 => 1383017718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19629622745339dd769f5254-31609055',
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
