<?php /* Smarty version Smarty-3.0.7, created on 2014-02-26 18:56:22
         compiled from "../../../smarty/templates/president2014-match-missing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855959946530e2ac6d8cfb4-94565922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736815a913646c279c3225fd71bb1752d9fb6bee' => 
    array (
      0 => '../../../smarty/templates/president2014-match-missing.tpl',
      1 => 1393437378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855959946530e2ac6d8cfb4-94565922',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/plugins/modifier.truncate.php';
?><?php if (!empty($_smarty_tpl->getVariable('refused',null,true,false)->value)){?>     
      <p class="box-center-match match-winner-box">   <?php echo $_smarty_tpl->getVariable('text')->value['refused_table_description'];?>
</p>
      
	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">	  
	    <ul data-role="listview" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">
	      <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('refused')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
?>
	        <li data-theme="c"><img src="../../image/1x1.png" class="president2014-sprite president2014-sprite-<?php echo $_smarty_tpl->getVariable('m')->value->friendly_name;?>
" alt="<?php echo $_smarty_tpl->getVariable('m')->value->last_name;?>
"/>
	        <h3><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('m')->value->last_name,35,"...",true);?>
 <span class="ui-li-desc" style='display: inline'"><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('m')->value->first_name,45,"...",true);?>
</span></h3>
	        <div class="computer"><p class="ui-li-desc"><a href="#popup<?php echo $_smarty_tpl->getVariable('m')->value->id;?>
" data-rel="popup"><?php echo $_smarty_tpl->getVariable('text')->value['refused_explanation'];?>
</a></p></div>
	        <p class="ui-li-aside">
	        <span class="computer result-number result-neutral">? %</span>
	        <span class="mobile ui-li-count">? %</span>
	       </p>
	        
	        </li>
	        <div data-role="popup" id="popup<?php echo $_smarty_tpl->getVariable('m')->value->id;?>
">
	            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
	            <p><?php echo $_smarty_tpl->getVariable('m')->value->message;?>
<p>
            </div>
	      <?php }} ?>
	    </ul>
	  </div>      
<?php }?>
<?php if (!empty($_smarty_tpl->getVariable('missing',null,true,false)->value)){?>
	  <p class="box-center-match match-winner-box"><?php echo $_smarty_tpl->getVariable('text')->value['missing_table_description'];?>
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
	        <li data-theme="c"><img src="../../image/1x1.png" class="president2014-sprite president2014-sprite-<?php echo $_smarty_tpl->getVariable('m')->value->friendly_name;?>
" alt="<?php echo $_smarty_tpl->getVariable('m')->value->last_name;?>
"/>
	        <h3><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('m')->value->last_name,35,"...",true);?>
</h3>
	        <div class="computer"><p class="ui-li-desc"><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('m')->value->first_name,45,"...",true);?>
</p></div>
	        <p class="ui-li-aside">
	        <span class="computer result-number result-neutral">? %</span>
	        <span class="mobile ui-li-count">? %</span>
	       </p>
	        
	        </li>
	      <?php }} ?>
	    </ul>
	  </div>
<?php }?>
