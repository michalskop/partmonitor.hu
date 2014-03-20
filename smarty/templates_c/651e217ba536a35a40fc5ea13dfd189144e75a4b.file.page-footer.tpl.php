<?php /* Smarty version Smarty-3.0.7, created on 2013-11-01 00:24:19
         compiled from "../../smarty/templates/page-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2843222675272e6a3490841-54427670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651e217ba536a35a40fc5ea13dfd189144e75a4b' => 
    array (
      0 => '../../smarty/templates/page-footer.tpl',
      1 => 1378659059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2843222675272e6a3490841-54427670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div data-role="footer" data-theme="<?php if (isset($_smarty_tpl->getVariable('partner',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('partner')->value['swatch_bar'];?>
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
