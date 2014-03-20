<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 14:46:09
         compiled from "../../../smarty/templates/match-president.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13489313735304b5a1f39fa0-82969347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa00aca851c7f51a7c2bbd3923c11ad1b129245d' => 
    array (
      0 => '../../../smarty/templates/match-president.tpl',
      1 => 1356538779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13489313735304b5a1f39fa0-82969347',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Moje shoda | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<link rel="stylesheet" href="../../css/page.css" />
	
	<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('../background.jpg');
		}
	  }
	</style>
  </head>

  
  <body>
  <div data-role="page" data-title="Moje shoda<?php if ($_smarty_tpl->getVariable('partner')->value['name']=='default'){?> | VolebníKalkulačka.cz<?php }?>" data-theme="b" class='page type-interior partner-<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
'>
  
	<!-- header -->
	<?php $_template = new Smarty_Internal_Template("match-header-president.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!-- /header -->
	
	<div data-role="content" class="content">
		<!-- winner block -->
		<?php $_template = new Smarty_Internal_Template("match-winner-president.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

		<!-- chart -->
		<img src="<?php echo $_smarty_tpl->getVariable('image')->value['url'];?>
" width="<?php echo $_smarty_tpl->getVariable('image')->value['width'];?>
" height="<?php echo $_smarty_tpl->getVariable('image')->value['height'];?>
" class="kv-chart" />	

	    <!-- table -->
	    <?php $_template = new Smarty_Internal_Template("match-table-president.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	    <!-- /table -->
	    
	    <!-- button for details -->
	    <div class="match-winner-box">
	        <a href="../compare/dialog.php?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
" class="box-center-match" data-rel="dialog" data-role="button">Vaše odpovědi vs. odpovědi kandidátů</a>
	    </div>

	<div class="match-explain">
	  <p class="box-center-match"><strong>Proč ve výsledcích není pí.Bobošíková?</strong><br/>
	  Oslovili jsme všechny kandidáty opakovaně, ale pí.Bobošíková nám (zatím?) odmítla odpovědět.</p>
	</div>
	
	<!-- embed -->
	<div class="match-embed" >
	  <div data-role="collapsible" data-theme="d" data-content-theme="e">
    	<h3>Vložte si volební kalkulačku k sobě na stránky</h3>
            <div data-role="fieldcontain">
				<p>Vložte kód HTML (standardní kalkulačka, <?php echo $_smarty_tpl->getVariable('region')->value;?>
):</p>
					<textarea data-role="none" cols="40" rows="3" name="textarea" id="textarea"><iframe src="http://volebnikalkulacka.cz/volba-prezidenta-cr-2013/&key=result_president" width="650" height="550" frameborder="0" ></iframe></textarea><br/>
				V <a href="/embed" data-ajax="false">detailním výběru kalkulaček</a> si můžete vybrat jakou kalkulačku vložit (kraje, Senát) i její velikost (standardní, mobilní)
			</div>   
	  </div>
	</div> <!-- /embed -->
	
	<!-- nasi politici -->
	<div class="box-center-match match-winner-box">
	  Více o jednotlivých kandidátech se dozvíte na <a href="http://nasipolitici.cz">NašiPolitici.cz</a>
	</div><!-- /nasi politici -->
	
	</div><!-- /content -->

	<div data-role="footer"  data-theme="f">
	<?php $_template = new Smarty_Internal_Template("match-ad.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>		
	<?php $_template = new Smarty_Internal_Template("match-sharer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div><!-- /footer -->
    
  </div> <!-- /page -->
  <?php $_template = new Smarty_Internal_Template("google_analytics.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </body>
</html>
