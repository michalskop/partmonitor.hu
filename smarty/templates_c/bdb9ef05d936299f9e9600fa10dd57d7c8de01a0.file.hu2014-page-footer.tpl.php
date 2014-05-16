<?php /* Smarty version Smarty-3.1.17, created on 2014-05-16 13:03:04
         compiled from "../../smarty/templates/hu2014-page-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16002646035375f06869aac8-63055085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb9ef05d936299f9e9600fa10dd57d7c8de01a0' => 
    array (
      0 => '../../smarty/templates/hu2014-page-footer.tpl',
      1 => 1396354121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16002646035375f06869aac8-63055085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5375f0686b4710_48513994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375f0686b4710_48513994')) {function content_5375f0686b4710_48513994($_smarty_tpl) {?>	<div data-role="footer" data-theme="<?php if (isset($_smarty_tpl->tpl_vars['partner']->value)) {?><?php echo $_smarty_tpl->tpl_vars['partner']->value['swatch_footer'];?>
<?php } else { ?>f<?php }?>">  
	  <div class="footerContainer"> 
		<div class="right computer" style="position:relative;bottom:5px;>
			<a href="http://kohovolit.eu">
				<img src="../image/klogo.png" title="K-Monitor" alt="K-Monitor"/>
			</a>
		  <?php if (isset($_smarty_tpl->tpl_vars['partner']->value)&&($_smarty_tpl->tpl_vars['partner']->value['name']!='default')) {?><img src="/image/<?php echo $_smarty_tpl->tpl_vars['partner']->value['name'];?>
.png"><?php }?>

		 </div>
	  </div>
	</div>
<?php }} ?>
