<?php /* Smarty version Smarty-3.0.7, created on 2013-10-31 00:48:10
         compiled from "../../smarty/templates/psp2013-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155273006652719aba291028-84456655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd0a8e5ab0c1d2791a62321c14882abcf2a2c9a9' => 
    array (
      0 => '../../smarty/templates/psp2013-compare.tpl',
      1 => 1383173086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155273006652719aba291028-84456655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->getVariable('text')->value['compare_title'];?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

	<link rel="stylesheet" href="../css/page.css" />

	


  </head>
<body>
  <div data-role="page" data-title="<?php echo $_smarty_tpl->getVariable('text')->value['compare_title'];?>
" data-theme="a">
  	<link rel="stylesheet" media="all" href="../css/custom.css" type="text/css">
  	<script src="../js/jquery.stickytableheaders.min.js" type="text/javascript"></script> 
	<script type="text/javascript">
		$(document).on('pageinit', function () {
		  $("table").stickyTableHeaders();
		});
	</script> 
	<div data-role="header" data-theme="e">	 
	    <h3 class="h1"><?php echo $_smarty_tpl->getVariable('text')->value['compare_header'];?>
</h3>
    </div><!-- /header -->
    
    <div data-role="content" class="question-background" data-theme="a">
      <div><span class="ui-icon ui-icon-info ui-icon-shadow"> </span>
        <?php echo $_smarty_tpl->getVariable('text')->value['compare_note'];?>

      </div>
      <table class="compare-table">
        <thead>
          <tr>
            <th class="compare-table-td-1"><?php echo $_smarty_tpl->getVariable('text')->value['compare_question'];?>
</th>
            <th class="compare-table-td-2" style="text-align: center;"><span style="font-weight:900"><?php echo $_smarty_tpl->getVariable('text')->value['compare_my_vote'];?>
</span></th>
            <?php  $_smarty_tpl->tpl_vars['mp'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mps')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['mp']->key => $_smarty_tpl->tpl_vars['mp']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['mp']->key;
?>
            <th class="compare-table-td-n" style="text-align: center;" title="<?php echo $_smarty_tpl->getVariable('mp')->value->last_name;?>
">
            <?php echo $_smarty_tpl->getVariable('mp')->value->match;?>
&nbsp;%<br/>
            <?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('mp')->value->last_name,15,"...",true);?>

            </th>
            <?php }} ?>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
?>
            <?php $_smarty_tpl->tpl_vars['q_id'] = new Smarty_variable($_smarty_tpl->getVariable('question')->value->id, null, null);?>
            <tr <?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value['weight'][$_smarty_tpl->getVariable('q_id',null,true,false)->value])){?>class="compare-important"<?php }?>>
        	  <td class="compare-table-td-1"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</td>
	          <td class="compare-table-td-2"><?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value['vote'][$_smarty_tpl->getVariable('q_id',null,true,false)->value])){?><?php if ($_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value]==1){?>Áno<?php }elseif($_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value]==-1){?>Nie<?php }else{ ?>-<?php }?><?php }else{ ?>-<?php }?></td>
      		  <?php  $_smarty_tpl->tpl_vars['mp'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mps')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['mp']->key => $_smarty_tpl->tpl_vars['mp']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['mp']->key;
?>	  
      		  <td class="compare-<?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value['vote'][$_smarty_tpl->getVariable('q_id',null,true,false)->value])){?><?php if (($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}*$_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value])>=.33){?>agree<?php }elseif(($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}*$_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value])<-.33){?>disagree<?php }else{ ?>neutral<?php }?><?php }?>"><?php if (isset($_smarty_tpl->getVariable('mp',null,true,false)->value->vote->{$_smarty_tpl->getVariable('q_id',null,true,false)->value})){?><?php if ($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}>=.33){?>Áno<?php }elseif($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}>=-.34){?>-<?php }else{ ?>Nie<?php }?><?php }else{ ?>=<?php }?>
      		  <?php if ((isset($_smarty_tpl->getVariable('details',null,true,false)->value[$_smarty_tpl->getVariable('mp',null,true,false)->value->friendly_name][$_smarty_tpl->getVariable('q_id',null,true,false)->value]))){?><?php $_template = new Smarty_Internal_Template("psp2013vk-compare-popup.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
      		  </td>
      		  <?php }} ?>
        	</tr>
          <?php }} ?>
        </tbody>
      
      </table>
      


      <a href="#" data-role="button" data-rel="back">Zavrieť</a>
    </div> <!-- /content -->
	
  
  <?php $_template = new Smarty_Internal_Template("google_analytics.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </div> <!-- /page -->

</body>
</html>
