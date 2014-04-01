<?php /* Smarty version Smarty-3.0.7, created on 2014-04-01 01:00:52
         compiled from "../../../smarty/templates/hu2014-match-table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4448423195339f3a4425043-96742860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a6b84d82c4cb0ae1ab57a002bf61fd4a4b34068' => 
    array (
      0 => '../../../smarty/templates/hu2014-match-table.tpl',
      1 => 1396050808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4448423195339f3a4425043-96742860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/plugins/modifier.truncate.php';
?>	  <p class="box-center-match match-winner-box"><?php echo $_smarty_tpl->getVariable('text')->value['result_table_description'];?>
</p>
	 
	  <!--<div class="question ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">	 
	    <ul data-role="listview">
	      <li class="result-header">Poslanci <span class="right">Moje shoda</span></li>
	    </ul>
	  </div>-->
	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">	  
	    <ul data-role="listview" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
" data-filter="true" data-filter-placeholder="<?php echo $_smarty_tpl->getVariable('text')->value['result_filter'];?>
" data-filter-theme="e">
	      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['result']->key;
?>
	        <li <?php if ($_smarty_tpl->tpl_vars['key']->value%2){?>data-theme="c"<?php }?>><a href="../compare.php?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
&match=<?php echo $_smarty_tpl->tpl_vars['result']->value['result_percent'];?>
" data-rel="dialog" ><img src="../../image/1x1.png" class="hu2014-sprite hu2014-sprite-<?php echo $_smarty_tpl->tpl_vars['result']->value['friendly_name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
"/>
	        <h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['result']->value['name'],35,"...",true);?>
</h3>
	        <div class="computer"><p class="ui-li-desc"><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name'];?>
</p></div>
	        <p class="ui-li-aside">
	        <span class="computer result-number
	          <?php if ($_smarty_tpl->tpl_vars['result']->value['result']>=.8){?> result-very-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=.6){?> result-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=.4){?> result-neutral
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=.2){?> result-negative
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
