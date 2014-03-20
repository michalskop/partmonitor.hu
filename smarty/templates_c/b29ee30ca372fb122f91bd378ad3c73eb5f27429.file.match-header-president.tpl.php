<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 14:46:40
         compiled from "../../../smarty/templates/match-header-president.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8242938495304b5c01e00e0-66896979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b29ee30ca372fb122f91bd378ad3c73eb5f27429' => 
    array (
      0 => '../../../smarty/templates/match-header-president.tpl',
      1 => 1352153473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8242938495304b5c01e00e0-66896979',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div data-role="header" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_bar'];?>
" class="header">
	  <?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?><a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">Volební Kalkulačka</a><?php }?>
	  <?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?><a href="/info" data-role="button" data-icon="info" data-iconpos="notext">Info</a><?php }?>
	  <h3 class="h1">Volba prezidenta ČR 2013<?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?> | VolebníKalkulačka.cz<?php }?></h3>
	</div>
