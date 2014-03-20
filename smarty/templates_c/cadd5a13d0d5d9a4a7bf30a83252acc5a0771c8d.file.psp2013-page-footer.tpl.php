<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 04:23:29
         compiled from "../../smarty/templates/psp2013-page-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1703983903526f2a3179d866-94581834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cadd5a13d0d5d9a4a7bf30a83252acc5a0771c8d' => 
    array (
      0 => '../../smarty/templates/psp2013-page-footer.tpl',
      1 => 1380038008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703983903526f2a3179d866-94581834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div data-role="footer" data-theme="<?php if (isset($_smarty_tpl->getVariable('partner',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('partner')->value['swatch_footer'];?>
<?php }else{ ?>f<?php }?>">  
	  <div class="footerContainer"> 
		<div class="right computer">
			<a href="http://kohovolit.eu">
				<img src="../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		  <?php if (isset($_smarty_tpl->getVariable('partner',null,true,false)->value)&&($_smarty_tpl->getVariable('partner')->value['name']!='default')){?><img src="/image/<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
.png"><?php }?>
		  </div>
		 </div>
	  </div>
	</div>
