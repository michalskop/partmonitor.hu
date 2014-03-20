<?php /* Smarty version Smarty-3.0.7, created on 2013-10-31 00:42:35
         compiled from "../../../smarty/templates/psp2013-match-facebook-link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9261844505271996b9d4479-79519012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54f96dc2c038bc2a177731211a13ee751c1da1f3' => 
    array (
      0 => '../../../smarty/templates/psp2013-match-facebook-link.tpl',
      1 => 1383176551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9261844505271996b9d4479-79519012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/usr/local/lib/php/Smarty/plugins/modifier.escape.php';
?>"http://www.facebook.com/dialog/feed?app_id=647475721940594&
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
