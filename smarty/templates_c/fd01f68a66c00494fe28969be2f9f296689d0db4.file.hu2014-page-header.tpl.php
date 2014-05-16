<?php /* Smarty version Smarty-3.1.17, created on 2014-05-16 13:03:04
         compiled from "../../smarty/templates/hu2014-page-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9293403635375f068608f42-03333559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd01f68a66c00494fe28969be2f9f296689d0db4' => 
    array (
      0 => '../../smarty/templates/hu2014-page-header.tpl',
      1 => 1396054582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9293403635375f068608f42-03333559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partner' => 0,
    'key' => 0,
    'text' => 0,
    'number_questions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5375f068627407_51448430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375f068627407_51448430')) {function content_5375f068627407_51448430($_smarty_tpl) {?>	<div data-role="header" data-theme="<?php echo $_smarty_tpl->tpl_vars['partner']->value['swatch_bar'];?>
" class="header">
    	<?php if ($_smarty_tpl->tpl_vars['key']->value>1) {?><?php if ($_smarty_tpl->tpl_vars['partner']->value['name']=='default') {?><a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false"><?php echo $_smarty_tpl->tpl_vars['text']->value['calc'];?>
}</a><?php }?><?php }?>
		<h1 class="title"><span class="computer"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['text']->value['page_header_desktop'], 'UTF-8');?>
</span><span class="mobile"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_header_mobile'];?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['number_questions']->value;?>
</span></h1>
	</div>
<?php }} ?>
