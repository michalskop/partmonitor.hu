<?php /* Smarty version Smarty-3.1.17, created on 2014-05-16 13:03:04
         compiled from "../../smarty/templates/hu2014-page-progressbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8172741905375f0686294c4-77491986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '643386ed00f232796a3bdbd97575c531a355be1f' => 
    array (
      0 => '../../smarty/templates/hu2014-page-progressbar.tpl',
      1 => 1396054582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8172741905375f0686294c4-77491986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partner' => 0,
    'text' => 0,
    'key' => 0,
    'number_questions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5375f0686414a6_75157697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375f0686414a6_75157697')) {function content_5375f0686414a6_75157697($_smarty_tpl) {?>	<div id="progress_box" class="ui-body ui-body-<?php echo $_smarty_tpl->tpl_vars['partner']->value['swatch_progressbar'];?>
 computer">
        <div id="progresstext" data-role="heading"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_progressbar_question'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['text']->value['page_progressbar_from'];?>
 <?php echo $_smarty_tpl->tpl_vars['number_questions']->value;?>
</div>
        <div >
          <input type="range" class="slider" id="slider-1" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" min="1" max="<?php echo $_smarty_tpl->tpl_vars['number_questions']->value;?>
" data-highlight="true" data-mini="true" data-track-theme="<?php echo $_smarty_tpl->tpl_vars['partner']->value['swatch_progressbar'];?>
"/>
        </div>
    </div>
<?php }} ?>
