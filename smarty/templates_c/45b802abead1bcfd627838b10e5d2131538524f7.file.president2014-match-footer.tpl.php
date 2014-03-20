<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 19:06:28
         compiled from "../../../smarty/templates/president2014-match-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10089033325304f2a4ef69c4-06036147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45b802abead1bcfd627838b10e5d2131538524f7' => 
    array (
      0 => '../../../smarty/templates/president2014-match-footer.tpl',
      1 => 1392833184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10089033325304f2a4ef69c4-06036147',
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
