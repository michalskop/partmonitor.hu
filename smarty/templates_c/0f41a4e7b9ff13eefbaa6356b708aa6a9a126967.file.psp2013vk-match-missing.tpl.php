<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 15:06:25
         compiled from "../../../smarty/templates/psp2013vk-match-missing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2378277135304ba61d682e6-64009950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f41a4e7b9ff13eefbaa6356b708aa6a9a126967' => 
    array (
      0 => '../../../smarty/templates/psp2013vk-match-missing.tpl',
      1 => 1392818783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2378277135304ba61d682e6-64009950',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/plugins/modifier.truncate.php';
?>	  <p class="box-center-match match-winner-box"><?php echo $_smarty_tpl->getVariable('text')->value['missing_table_description'];?>
</p>
	 

	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">	  
	    <ul data-role="listview" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">
	      <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('missing')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
?>
	        <li data-theme="c"><img src="../../image/1x1.png" class="psp2013vk-sprite psp2013vk-sprite-<?php echo $_smarty_tpl->getVariable('m')->value->friendly_name;?>
-80" alt="<?php echo $_smarty_tpl->getVariable('m')->value->last_name;?>
"/>
	        <h3><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('m')->value->last_name,35,"...",true);?>
</h3>
	        <div class="small"><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('m')->value->first_name,45,"...",true);?>
</div>
	        <p class="ui-li-aside">
	        <span class="computer result-number result-neutral">? %</span>
	        <span class="mobile ui-li-count">? %</span>
	       </p>
	        
	        </a></li>
	      <?php }} ?>
	    </ul>
	  </div>
