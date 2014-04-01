<?php /* Smarty version Smarty-3.0.7, created on 2014-04-01 01:00:51
         compiled from "../../../smarty/templates/hu2014-match-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14357054895339f3a3e41987-99622609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f79f32ea128ec0adfe8f657196cb9fb1ebdd4d' => 
    array (
      0 => '../../../smarty/templates/hu2014-match-header.tpl',
      1 => 1392819947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14357054895339f3a3e41987-99622609',
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
