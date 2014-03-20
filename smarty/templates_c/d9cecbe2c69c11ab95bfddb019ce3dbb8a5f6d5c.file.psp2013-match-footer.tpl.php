<?php /* Smarty version Smarty-3.0.7, created on 2013-10-31 00:40:03
         compiled from "../../../smarty/templates/psp2013-match-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603679083527198d3b56050-79846982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9cecbe2c69c11ab95bfddb019ce3dbb8a5f6d5c' => 
    array (
      0 => '../../../smarty/templates/psp2013-match-footer.tpl',
      1 => 1383176401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603679083527198d3b56050-79846982',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div data-role="footer" data-theme="<?php if (isset($_smarty_tpl->getVariable('partner',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('partner')->value['swatch_footer'];?>
<?php }else{ ?>f<?php }?>">  
	  <div data-role="navbar" class="ui-body-c">
	    <ul>
	      <li><span class="computer"><a href="/support">Podporte projekt Volebná kalkulačka</a></span>
	      <span class="mobile"><a href="#dms-mobile" class="mobile" data-rel="popup">Podporte projekt Volebná kalkulačka</a></span>
	      </li>
	    </ul>
	  </div>
	  <div class="footerContainer"> 
		<div class="right computer">
			<a href="http://kohovolit.eu">
				<img src="../../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		  <?php if (isset($_smarty_tpl->getVariable('partner',null,true,false)->value)&&($_smarty_tpl->getVariable('partner')->value['name']!='default')){?><img src="/image/<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
.png"><?php }?>
		  </div>
		 </div>
	  </div>
	</div>
