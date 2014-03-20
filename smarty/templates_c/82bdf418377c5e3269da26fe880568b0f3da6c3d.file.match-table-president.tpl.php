<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 14:46:40
         compiled from "../../../smarty/templates/match-table-president.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17955111655304b5c0262d31-58294126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82bdf418377c5e3269da26fe880568b0f3da6c3d' => 
    array (
      0 => '../../../smarty/templates/match-table-president.tpl',
      1 => 1352158502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17955111655304b5c0262d31-58294126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/plugins/modifier.truncate.php';
?>	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">	
	    <ul data-role="listview" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">
	      <li class="result-header">Kandidát/ka <span class="right">Moje shoda</span></li>
	      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
	        <li><a href="../compare/dialog.php?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
" data-rel="dialog"><img src="../../image/1x1.png" class="president-sprite president-sprite-<?php echo $_smarty_tpl->tpl_vars['result']->value['friendly_name'];?>
 computer">
	        <h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['result']->value['last_name'],35,"...",true);?>
</h3>
	        <div class="computer"><p class="ui-li-desc"><?php echo $_smarty_tpl->tpl_vars['result']->value['first_name'];?>
</p></div>
	        <p class="ui-li-aside">
	        <span class="computer result-number
	          <?php if ($_smarty_tpl->tpl_vars['result']->value['result']>=.6){?> result-very-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=.2){?> result-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.2){?> result-neutral
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.6){?> result-negative
	          <?php }else{ ?> result-very-negative
	          <?php }?>	    	    
	        "><?php echo $_smarty_tpl->tpl_vars['result']->value['result_percent'];?>
 %</span>
	        <span class="mobile ui-li-count"><?php echo $_smarty_tpl->tpl_vars['result']->value['result_percent'];?>
 %</span>
	       </p>
	        
	        </a></li>
	      <?php }} ?>
	    </ul>
	  </div>
