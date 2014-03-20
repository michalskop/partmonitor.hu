<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 21:54:00
         compiled from "../../smarty/templates/psp2013_compare_dialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142478863152702068a7f311-96939917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00def5eb1e7822d50753d713e0f0c386fc10b978' => 
    array (
      0 => '../../smarty/templates/psp2013_compare_dialog.tpl',
      1 => 1383079693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142478863152702068a7f311-96939917',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Podrobné výsledky | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<!--<link rel="stylesheet" href="../../css/page.css" />-->
  </head>
<body>
  <div data-role="dialog" data-title="Podrobné výsledky | VolebnáKalkulačka.sk" id="compare-dialog-email">

  		<div data-role="header" data-theme="e">
			<h1>To je skvelé!</h1>
		</div>
		<div data-role="content" data-theme="e">  
			<script>
	  function my_submit() {
	    
	    
	    $.ajax({
           type: "POST",
           url: "./write_email.php",
           data: $("#email_form").serialize(),
           /*success: function(data){
             alert(data);
           }*/
        });  
		//$('#compare-dialog-email').dialog('close');
	    return true;
	  } 
	</script>
	
	
		  <p>Ak chcete byť prvý, kto sa dozvie, čo <strong> nového sme v KohoVolit.eu pre Vás pripravili</strong> - nechajte nám na seba kontakt:</p>	  
		  <form id="email_form" onSubmit="JavaScript:my_submit()" action="#">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" value=""  />
			<input type="hidden" name="calc" id="calc" value="<?php echo $_smarty_tpl->getVariable('calc_code')->value;?>
" />
			<input type="hidden" name="query_string" id="query_string" value="<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
" />
			<button type="submit"  data-theme="b" data-icon="arrow-r" data-iconpos="right">Pokračovať na podrobný prehľad zhody</button>
		  </form>
		  
		  <p><strong>Ani my nemáme radi spam.</strong> Vaše údaje nikomu nedáme.</p>
  
  	</div> <!-- /content -->

  
  </div><!-- /page -->
</body>
</html>
