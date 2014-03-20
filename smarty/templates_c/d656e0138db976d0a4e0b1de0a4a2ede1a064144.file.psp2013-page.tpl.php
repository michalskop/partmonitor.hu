<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 23:44:27
         compiled from "../../smarty/templates/psp2013-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185215243652703a4b8d8da3-93930994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd656e0138db976d0a4e0b1de0a4a2ede1a064144' => 
    array (
      0 => '../../smarty/templates/psp2013-page.tpl',
      1 => 1383086663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185215243652703a4b8d8da3-93930994',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html> 
<html lang='sk'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title><?php echo $_smarty_tpl->getVariable('text')->value['page_header_desktop'];?>
</title> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />

	<link rel="stylesheet" href="../css/psp2013-page.css" />
	<!--<link rel="stylesheet" href="../css/psp2013-roller.css" />-->
	
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	
	<!--<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('background.jpg');
		}
	  }
	</style>-->
	<script type="text/javascript" >
		// progress bar from slider
		$(document).on('pageinit', '.ui-page', function () {
			$(this).find('.slider').css('display','none');
			$(this).find('.ui-slider-handle').css('display','none');
			$(this).find('.ui-slider').width('99%');
		});	
	</script>
</head>
<body>
<form action="./match/" method="get" data-ajax="false">
<input type="text" name="partner" id="partner" value="<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
" hidden='hidden' />
<input type="text" name="region" id="region" value="<?php echo $_smarty_tpl->getVariable('region')->value;?>
" hidden='hidden' />

<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(1, null, null);?>
<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
?>
  <!-- Start of <?php echo $_smarty_tpl->getVariable('key')->value;?>
 page -->
  <div data-role="page" id="p<?php echo $_smarty_tpl->getVariable('key')->value;?>
" data-title="<?php echo $_smarty_tpl->getVariable('question')->value->name;?>
 | <?php echo $_smarty_tpl->getVariable('text')->value['page_header_desktop'];?>
" class='page type-interior partner-<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
'>
    <!-- header -->
	<?php $_template = new Smarty_Internal_Template("psp2013-page-header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!-- /header -->

	<!-- progressbar -->
	<?php $_template = new Smarty_Internal_Template("psp2013-page-progressbar.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!-- /progressbar -->
    
    <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
      <?php $_template = new Smarty_Internal_Template("psp2013-page-question.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	  <!-- /question -->
	</div> <!-- /content -->	
	
	<!-- footer -->
	<?php $_template = new Smarty_Internal_Template("psp2013-page-footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!-- /footer -->
	
  </div><!-- /page -->	
  <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable($_smarty_tpl->getVariable('key')->value+1, null, null);?>
<?php }} ?>  



  <!-- page -->
  <div data-role="page" id="p<?php echo $_smarty_tpl->getVariable('number_questions')->value+1;?>
" data-title="<?php echo $_smarty_tpl->getVariable('text')->value['page_header_mobile_important'];?>
<?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?> | <?php echo $_smarty_tpl->getVariable('text')->value['page_header_desktop'];?>
<?php }?>" class='partner-<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
 page type-interior'>
  
      <!-- header -->
	<div data-role="header" data-theme="<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_bar'];?>
" class="header">
    	<a href="#p<?php echo ($_smarty_tpl->getVariable('key')->value-1);?>
" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" ><?php echo $_smarty_tpl->getVariable('text')->value['page_back'];?>
</a>
		<h1 class="title"><span class="computer"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('text')->value['page_header_desktop'], 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('text')->value['page_header_desktop'],SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('text')->value['page_header_desktop']));?>
</span><span class="mobile"><?php echo $_smarty_tpl->getVariable('text')->value['page_header_mobile_important'];?>
</span></h1>
	</div><!-- /header -->
	
  <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->getVariable('partner')->value['swatch_question_body'];?>
">
	    <!-- question content -->
	    <legend><p><?php echo $_smarty_tpl->getVariable('text')->value['page_important_legend'];?>
</p></legend>
	    <button type="submit" data-theme="c" value="submit-value" data-icon="arrow-r" data-iconpos="right">Preskočiť</button>
	    <fieldset data-role="controlgroup">
	    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
	       <input type="checkbox" name="c-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="c-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" class="custom" <?php if ($_smarty_tpl->tpl_vars['key']->value%2){?>data-theme="e"<?php }?>/>
		  <label for="c-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</label>
	    <?php }} ?>
	    </fieldset>
	    <button type="submit" data-theme="b"  data-icon="arrow-r" data-iconpos="right"><?php echo $_smarty_tpl->getVariable('text')->value['page_important_results'];?>
</button>
	  </div>
	</div><!-- /content -->
	
	<!-- footer -->
	<?php $_template = new Smarty_Internal_Template("psp2013-page-footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!-- /footer -->
  </div><!-- /page -->




</form>
<?php $_template = new Smarty_Internal_Template("google_analytics.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>  
