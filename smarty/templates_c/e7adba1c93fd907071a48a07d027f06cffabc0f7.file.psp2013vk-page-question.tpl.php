<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 14:20:16
         compiled from "../../smarty/templates/psp2013vk-page-question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17413516845304af90ccb3f3-03007917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7adba1c93fd907071a48a07d027f06cffabc0f7' => 
    array (
      0 => '../../smarty/templates/psp2013vk-page-question.tpl',
      1 => 1379984635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17413516845304af90ccb3f3-03007917',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">
	    <!-- question content -->
	    <div class="question-content">
	      <!--<?php $_template = new Smarty_Internal_Template("psp2013-page-question-popup.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>-->
	      <!--<h2 class="question-name"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</h2>-->
	      <!--<div class="question-description"><?php echo $_smarty_tpl->getVariable('question')->value->description;?>
</div>-->
	      <div class="question-question-alone"><?php echo $_smarty_tpl->getVariable('question')->value->question;?>
</div>	     	      
	    </div><!-- /question content -->
	  
	    <!-- radio buttons -->
  		<div class='box-center'>
			<fieldset data-role="controlgroup" data-type="horizontal" class="question-radio">
			  <a href="#p<?php echo $_smarty_tpl->getVariable('key')->value+1;?>
" data-transition="slide">
			    <input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-0" value="1" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-0"><?php echo $_smarty_tpl->getVariable('text')->value['page_question_yes'];?>
</label>
			 	
			 	<input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-1" value="-1" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-1"><?php echo $_smarty_tpl->getVariable('text')->value['page_question_no'];?>
</label>			  
			 	
			 	<input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-2" value="0" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-2"><?php echo $_smarty_tpl->getVariable('text')->value['page_question_neutral'];?>
<span class="computer"><?php echo $_smarty_tpl->getVariable('text')->value['page_question_neutral_add'];?>
</span></label>
			  </a>
			</fieldset>
		</div><!-- /radio buttons -->
		
		<fieldset class="ui-grid-a"> <!-- navigation -->
	      <div class="ui-block-a">
	        <?php if ($_smarty_tpl->getVariable('key')->value>1){?><a href="#p<?php echo $_smarty_tpl->getVariable('key')->value-1;?>
"  data-transition="slide"  data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true" data-theme="c" data-mini="true"><?php echo $_smarty_tpl->getVariable('text')->value['page_back'];?>
</a>
	        <?php }?>
	      </div>
		  <div class="ui-block-b">
				  <a href="#p<?php echo $_smarty_tpl->getVariable('key')->value+1;?>
"  data-transition="slide" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right" data-mini="true" data-theme="c"><?php if (($_smarty_tpl->getVariable('key')->value==$_smarty_tpl->getVariable('number_questions')->value)){?><?php echo $_smarty_tpl->getVariable('text')->value['page_next'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('text')->value['page_next_question'];?>
<?php }?></a>
				</div>
		</fieldset>
	    <!-- /navigation -->
	    
	  </div>
