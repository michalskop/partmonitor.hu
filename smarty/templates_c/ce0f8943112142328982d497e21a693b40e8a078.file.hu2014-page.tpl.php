<?php /* Smarty version Smarty-3.1.17, created on 2014-05-16 13:03:04
         compiled from "../../smarty/templates/hu2014-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12881808135375f06854ad86-06502354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0f8943112142328982d497e21a693b40e8a078' => 
    array (
      0 => '../../smarty/templates/hu2014-page.tpl',
      1 => 1396354121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12881808135375f06854ad86-06502354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'partner' => 0,
    'questions' => 0,
    'key' => 0,
    'question' => 0,
    'number_questions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5375f068605266_21895426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375f068605266_21895426')) {function content_5375f068605266_21895426($_smarty_tpl) {?><!DOCTYPE html> 
<html lang='hu'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title><?php echo $_smarty_tpl->tpl_vars['text']->value['page_header_desktop'];?>
</title> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />

	<link rel="stylesheet" href="../css/hu2014-page.css" />
	
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	

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
<input type="text" name="partner" id="partner" value="<?php echo $_smarty_tpl->tpl_vars['partner']->value['name'];?>
" hidden='hidden' />

<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
  <!-- Start of <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 page -->
  <div data-role="page" id="p<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['question']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['text']->value['page_header_desktop'];?>
" class='page type-interior partner-<?php echo $_smarty_tpl->tpl_vars['partner']->value['name'];?>
'>
    <!-- header -->
	<?php echo $_smarty_tpl->getSubTemplate ("hu2014-page-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- /header -->

	<!-- progressbar -->
	<?php echo $_smarty_tpl->getSubTemplate ("hu2014-page-progressbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- /progressbar -->
    
    <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
      <?php echo $_smarty_tpl->getSubTemplate ("hu2014-page-question.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	  <!-- /question -->
	</div> <!-- /content -->	
	
	<!-- footer -->
	<?php echo $_smarty_tpl->getSubTemplate ("hu2014-page-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- /footer -->
	
  </div><!-- /page -->	
  <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value+1, null, 0);?>
<?php } ?>  



  <!-- page -->
  <div data-role="page" id="p<?php echo $_smarty_tpl->tpl_vars['number_questions']->value+1;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['text']->value['page_header_mobile_important'];?>
<?php if ($_smarty_tpl->tpl_vars['partner']->value['name']=='default') {?> | <?php echo $_smarty_tpl->tpl_vars['text']->value['page_header_desktop'];?>
<?php }?>" class='partner-<?php echo $_smarty_tpl->tpl_vars['partner']->value['name'];?>
 page type-interior'>
  
      <!-- header -->
	<div data-role="header" data-theme="<?php echo $_smarty_tpl->tpl_vars['partner']->value['swatch_bar'];?>
" class="header">
    	<a href="#p<?php echo ($_smarty_tpl->tpl_vars['key']->value-1);?>
" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" ><?php echo $_smarty_tpl->tpl_vars['text']->value['page_back'];?>
</a>
		<h1 class="title"><span class="computer"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['text']->value['page_header_desktop'], 'UTF-8');?>
</span><span class="mobile"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_header_mobile_important'];?>
</span></h1>
	</div><!-- /header -->
	
  <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-<?php echo $_smarty_tpl->tpl_vars['partner']->value['swatch_question_body'];?>
">
	    <!-- question content -->
	    <legend><p><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_legend'];?>
</p></legend>
	    <button type="submit" data-theme="c" value="submit-value" data-icon="arrow-r" data-iconpos="right"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_skip'];?>
</button>
	    <fieldset data-role="controlgroup">
	    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
	       <input type="checkbox" name="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" class="custom" <?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>data-theme="e"<?php }?>/>
		  <label for="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['question']->value->name;?>
</label>
	    <?php } ?>
	    </fieldset>
	    <button type="submit" data-theme="b"  data-icon="arrow-r" data-iconpos="right"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_results'];?>
</button>
	  </div>
	</div><!-- /content -->
	
	<!-- footer -->
	<?php echo $_smarty_tpl->getSubTemplate ("hu2014-page-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- /footer -->
  </div><!-- /page -->




</form>
<?php echo $_smarty_tpl->getSubTemplate ("google_analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>  
<?php }} ?>
