<?php /* Smarty version Smarty-3.0.7, created on 2014-04-01 01:00:23
         compiled from "../../smarty/templates/hu2014-page-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10372750505339f3876a7b21-08550497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb9ef05d936299f9e9600fa10dd57d7c8de01a0' => 
    array (
      0 => '../../smarty/templates/hu2014-page-footer.tpl',
      1 => 1396306820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10372750505339f3876a7b21-08550497',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div data-role="footer" data-theme="<?php if (isset($_smarty_tpl->getVariable('partner',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('partner')->value['swatch_footer'];?>
<?php }else{ ?>f<?php }?>">  
	  <div class="footerContainer"> 
		<div class="right computer" style="position:relative;bottom:5px;>
			<a href="http://kohovolit.eu">
				<img src="../image/klogo.png" title="K-Monitor" alt="K-Monitor"/>
			</a>
		  <?php if (isset($_smarty_tpl->getVariable('partner',null,true,false)->value)&&($_smarty_tpl->getVariable('partner')->value['name']!='default')){?><img src="/image/<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
.png"><?php }?>

		 </div>
	  </div>
	</div>
