<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 04:23:29
         compiled from "../../smarty/templates/psp2013-page-progressbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1137934720526f2a316a75b3-74664443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '403aee131ab329bb6c58555c6d5e3bda90a09eec' => 
    array (
      0 => '../../smarty/templates/psp2013-page-progressbar.tpl',
      1 => 1380033596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1137934720526f2a316a75b3-74664443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div id="progress_box" class="ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_progressbar'];?>
 computer">
        <div id="progresstext" data-role="heading"><?php echo $_smarty_tpl->getVariable('text')->value['page_progressbar_question'];?>
 <?php echo $_smarty_tpl->getVariable('key')->value;?>
 <?php echo $_smarty_tpl->getVariable('text')->value['page_progressbar_from'];?>
 <?php echo $_smarty_tpl->getVariable('number_questions')->value;?>
</div>
        <div >
          <input type="range" class="slider" id="slider-1" value="<?php echo $_smarty_tpl->getVariable('key')->value;?>
" min="1" max="<?php echo $_smarty_tpl->getVariable('number_questions')->value;?>
" data-highlight="true" data-mini="true" data-track-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_progressbar'];?>
"/>
        </div>
    </div>
