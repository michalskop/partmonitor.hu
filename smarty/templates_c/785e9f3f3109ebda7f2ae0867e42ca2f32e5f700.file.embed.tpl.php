<?php /* Smarty version Smarty-3.0.7, created on 2013-11-01 00:29:01
         compiled from "../../smarty/templates/embed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2309313545272e7bdc363f3-02600989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785e9f3f3109ebda7f2ae0867e42ca2f32e5f700' => 
    array (
      0 => '../../smarty/templates/embed.tpl',
      1 => 1383262102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2309313545272e7bdc363f3-02600989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Vložiť volebnú kalkulačku | Volebná Kalkulačka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<link rel="stylesheet" href="../css/page.css" />
	
  </head>
  
<body>
  <div data-role="page" data-title="Embed | VolebníKalkulačka.cz" data-theme="b" class='page type-interior'>

    <div data-role="header" data-theme="f" class="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">VolebnáKalkulačka.sk</a>
	  <h3 class="h1">Vložiť volebnú kalkulačku | VolebnáKalkulačka.sk</h3>
	</div>


  <div data-role="content" class="content">
  
    <h1>VolebnáKalkulačka.sk vložená na Vašom webe</h1>
    <p>Rovnako ľahko ako napríklad toto video z Youtube si môžete vložiť k sebe na webové stránky aj Volebné kalkulačku.</p>
    <div class="box-center-match"><iframe width="420" height="315" src="http://www.youtube.com/embed/UQyaSYhVJ9g" frameborder="0" allowfullscreen></iframe></div>
    
    <div class="box-center-match match-winner-box">
    
    <div data-role="collapsible-set">  
    
      <?php  $_smarty_tpl->tpl_vars['calc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('calcs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['calc']->key => $_smarty_tpl->tpl_vars['calc']->value){
?>
        <div data-role="collapsible" <?php if (isset($_smarty_tpl->tpl_vars['calc']->value['selected'])){?>data-collapsed="false"<?php }?> data-theme="b" data-content-theme="b"> 

          <h3><?php echo $_smarty_tpl->tpl_vars['calc']->value['name'];?>
</h3>
          <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['calc']->value['calc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
          	<div data-role="collapsible" <?php if ((isset($_smarty_tpl->tpl_vars['calc']->value['selected'])&&($_smarty_tpl->getVariable('cals')->value['selected']))){?>data-collapsed="false"<?php }?> data-theme="d" data-content-theme="d">
          	
            	 <h3><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</h3>
            	 <?php  $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sizes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['size']->key => $_smarty_tpl->tpl_vars['size']->value){
?>
            	    <div data-role="collapsible" <?php if ((isset($_smarty_tpl->tpl_vars['size']->value['selected'])&&($_smarty_tpl->tpl_vars['size']->value['selected']))){?>data-collapsed="false"<?php }?>  data-theme="e" data-content-theme="e">
            	     <h3><?php echo $_smarty_tpl->tpl_vars['size']->value['name'];?>
</h3>
            	     <div data-role="fieldcontain">
						<p>Kód HTML:</p>
						<textarea data-role="none" cols="40" rows="3" name="textarea" id="textarea"><iframe src="http://volebnakalkulacka.sk/<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
key=<?php echo $_smarty_tpl->getVariable('key')->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['size']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['size']->value['height'];?>
" frameborder="0" ></iframe></textarea>
					</div> 
            	    </div>
            	 <?php }} ?>
	            
	        </div>
          <?php }} ?>
          
        </div>
      <?php }} ?>
    </div><!-- main collapsible -->
  </div> 
  </div> <!-- /content -->
  
  <!-- footer -->
  <?php $_template = new Smarty_Internal_Template("page-footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
  </div> <!-- /page --> 


</body>
</html>
