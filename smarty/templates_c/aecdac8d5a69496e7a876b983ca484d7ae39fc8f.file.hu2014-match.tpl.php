<?php /* Smarty version Smarty-3.0.7, created on 2014-03-20 04:27:58
         compiled from "../../../smarty/templates/hu2014-match.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284073940532a603e8e2939-99995151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aecdac8d5a69496e7a876b983ca484d7ae39fc8f' => 
    array (
      0 => '../../../smarty/templates/hu2014-match.tpl',
      1 => 1395286066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284073940532a603e8e2939-99995151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang='sk'>
  <head>
    <title><?php echo $_smarty_tpl->getVariable('text')->value['result_title'];?>
 | <?php echo $_smarty_tpl->getVariable('text')->value['page_header_desktop'];?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<link rel="stylesheet" href="../../css/hu2014-page.css" />
	
	
	<script type="text/javascript" >
		$(document).on('pageinit', function () {
		  $("#dms").hide();
		  setTimeout(
		    function() {
		     $("#dms").show(800);
		     $("#dms-mobile").popup("open");
		    }, 20000);
		});	
	</script>
  </head>

  
  <body>
  <div data-role="page" data-title="<?php echo $_smarty_tpl->getVariable('text')->value['result_title'];?>
<?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?> | <?php echo $_smarty_tpl->getVariable('text')->value['page_header_desktop'];?>
<?php }?>" data-theme="c" class='page type-interior partner-<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
'>
  
	<!-- header -->
	<?php $_template = new Smarty_Internal_Template("hu2014-match-header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!-- /header -->
	
	<div data-role="content" class="content">
	
		<?php $_smarty_tpl->tpl_vars['results_count'] = new Smarty_variable(count($_smarty_tpl->getVariable('results')->value), null, null);?>
		
		<!-- sharer -->
		<?php $_template = new Smarty_Internal_Template("hu2014-match-sharer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

		<!-- winner block -->
		<?php $_template = new Smarty_Internal_Template("hu2014-match-winner.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

	    <!-- table -->
	    <?php $_template = new Smarty_Internal_Template("hu2014-match-table.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	    <!-- /table -->
	    
		<!-- table -->
		<?php if (count($_smarty_tpl->getVariable('missing')->value)>0){?>
	      <?php $_template = new Smarty_Internal_Template("hu2014-match-missing.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	    <?php }?>
	    <!-- /table -->
	
		<!-- lower part -->
		<?php $_template = new Smarty_Internal_Template("hu2014-match-low.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		<!-- /lower part -->

	</div><!-- /content -->

	<!-- footer -->
	<!--<?php $_template = new Smarty_Internal_Template("hu2014-match-footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>-->
	<!-- /footer -->
    
  </div> <!-- /page -->
  <?php $_template = new Smarty_Internal_Template("google_analytics.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </body>
</html>
