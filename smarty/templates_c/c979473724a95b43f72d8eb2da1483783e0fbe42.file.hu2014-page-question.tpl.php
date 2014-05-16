<?php /* Smarty version Smarty-3.1.17, created on 2014-05-16 13:03:04
         compiled from "../../smarty/templates/hu2014-page-question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14422402965375f0686431f5-35345869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c979473724a95b43f72d8eb2da1483783e0fbe42' => 
    array (
      0 => '../../smarty/templates/hu2014-page-question.tpl',
      1 => 1396354121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14422402965375f0686431f5-35345869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partner' => 0,
    'question' => 0,
    'key' => 0,
    'text' => 0,
    'number_questions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5375f068698331_67873432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375f068698331_67873432')) {function content_5375f068698331_67873432($_smarty_tpl) {?>	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->tpl_vars['partner']->value['swatch_question_body'];?>
">
	    <!-- question content -->
	    <div class="question-content">

	      <div class="question-question-alone"><?php echo $_smarty_tpl->tpl_vars['question']->value->question;?>
</div>	     	      
	    </div><!-- /question content -->
	  
	    <!-- radio buttons -->
  		<div class='box-center'>
			<fieldset data-role="controlgroup" data-type="horizontal" class="question-radio">
			  <a href="#p<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" data-transition="slide">
			    <input type="radio" name="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-0" value="1" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-0"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_yes'];?>
</label>
			 	
			 	<input type="radio" name="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-1" value="-1" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-1"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_no'];?>
</label>			  
			 	
			 	<input type="radio" name="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-2" value="0" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-2"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_neutral'];?>
<span class="computer"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_neutral_add'];?>
</span></label>
			  </a>
			</fieldset>
		</div><!-- /radio buttons -->
		
		<fieldset class="ui-grid-a"> <!-- navigation -->
	      <div class="ui-block-a">
	        <?php if ($_smarty_tpl->tpl_vars['key']->value>1) {?><a href="#p<?php echo $_smarty_tpl->tpl_vars['key']->value-1;?>
"  data-transition="slide"  data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true" data-theme="c" data-mini="true"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_back'];?>
</a>
	        <?php }?>
	      </div>
		  <div class="ui-block-b">
				  <a href="#p<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
"  data-transition="slide" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right" data-mini="true" data-theme="c"><?php if (($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['number_questions']->value)) {?><?php echo $_smarty_tpl->tpl_vars['text']->value['page_next'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['text']->value['page_next_question'];?>
<?php }?></a>
				</div>
		</fieldset>
	    <!-- /navigation -->
	    
	  </div>
<?php }} ?>
