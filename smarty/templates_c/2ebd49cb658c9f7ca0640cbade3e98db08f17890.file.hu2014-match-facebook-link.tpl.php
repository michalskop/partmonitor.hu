<?php /* Smarty version Smarty-3.0.7, created on 2014-04-01 02:06:42
         compiled from "../../../smarty/templates/hu2014-match-facebook-link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1737877745533a03128d7fe1-14174832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebd49cb658c9f7ca0640cbade3e98db08f17890' => 
    array (
      0 => '../../../smarty/templates/hu2014-match-facebook-link.tpl',
      1 => 1396310798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1737877745533a03128d7fe1-14174832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/usr/local/lib/php/Smarty/plugins/modifier.escape.php';
?>"http://www.facebook.com/dialog/feed?app_id=297106463778572&
	  link=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_redirect_link'],'url');?>
&
	  picture=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_picture_link'],'url');?>
<?php echo $_smarty_tpl->getVariable('results')->value[0]['friendly_name'];?>
.jpg&
	  name=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_name'],'url');?>
&
	  caption=%3C-%20<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('results')->value[0]['name'],'url');?>
&
	  actions=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_action'],'url');?>
&
	  description=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_description_1'],'url');?>
<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('results')->value[0]['name'],'url');?>
%20(<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_description_match'],'url');?>
%3A<?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
%25),%20<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('results')->value[1]['name'],'url');?>
%20(<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_description_match'],'url');?>
%3A<?php echo $_smarty_tpl->getVariable('results')->value[1]['result_percent'];?>
%25)%20<?php echo $_smarty_tpl->getVariable('text')->value['result_fb_description_and'];?>
%20<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('results')->value[2]['name'],'url');?>
%20(<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_description_match'],'url');?>
%3A<?php echo $_smarty_tpl->getVariable('results')->value[2]['result_percent'];?>
%25).<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_description_3'],'url');?>
&
	  redirect_uri=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('text')->value['result_fb_redirect_link'],'url');?>
"
