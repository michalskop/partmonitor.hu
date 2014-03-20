<?php /* Smarty version Smarty-3.0.7, created on 2014-02-25 23:37:41
         compiled from "../../../smarty/templates/president2014-match-winner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1848199081530d1b35db7544-17466646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa53435bc262e1286ef1a7c1353ad7f9c50c075' => 
    array (
      0 => '../../../smarty/templates/president2014-match-winner.tpl',
      1 => 1393367290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848199081530d1b35db7544-17466646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="box-center-match match-winner-box">
  <p><?php echo $_smarty_tpl->getVariable('text')->value['result_winner_computer'];?>
</p>
  <div class="ui-grid-b computer">
  
	<div class="ui-block-a">
	  <div class="match-winner-block">
	    <a href="../compare.php?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('results')->value[0]['id'];?>
&match=<?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
" data-rel="dialog" style="text-decoration:none">
		  <div><img src="../../image/president2014/<?php echo $_smarty_tpl->getVariable('results')->value[0]['friendly_name'];?>
.jpg" width="122" height="155" alt="<?php echo $_smarty_tpl->getVariable('results')->value[0]['name'];?>
" title="<?php echo $_smarty_tpl->getVariable('results')->value[0]['name'];?>
" /></div>
		  <div class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[0]['first_name'];?>
<br/><?php echo $_smarty_tpl->getVariable('results')->value[0]['last_name'];?>
</div>
		  <div class="match-winner-percentage"><span class="match-winner-percentage-number"><?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
</span> %</div>
		</a>
	  </div>
	</div>  
	<div class="ui-block-b">
	  <div class="match-winner-block">
	    <a href="../compare.php?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('results')->value[1]['id'];?>
&match=<?php echo $_smarty_tpl->getVariable('results')->value[1]['result_percent'];?>
" data-rel="dialog" style="text-decoration:none">
		  <div><img src="../../image/president2014/<?php echo $_smarty_tpl->getVariable('results')->value[1]['friendly_name'];?>
.jpg" width="122" height="155" alt="<?php echo $_smarty_tpl->getVariable('results')->value[1]['name'];?>
" title="<?php echo $_smarty_tpl->getVariable('results')->value[1]['name'];?>
" /></div>
		  <div class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[1]['first_name'];?>
<br/><?php echo $_smarty_tpl->getVariable('results')->value[1]['last_name'];?>
</div>
		  <div class="match-winner-percentage"><span class="match-winner-percentage-number"><?php echo $_smarty_tpl->getVariable('results')->value[1]['result_percent'];?>
</span> %</div>
		</a>
	  </div>
	</div>
	<div class="ui-block-c">
	  <div class="match-winner-block">
	    <a href="../compare.php?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('results')->value[2]['id'];?>
&match=<?php echo $_smarty_tpl->getVariable('results')->value[2]['result_percent'];?>
" data-rel="dialog" style="text-decoration:none">
		  <div><img src="../../image/president2014/<?php echo $_smarty_tpl->getVariable('results')->value[2]['friendly_name'];?>
.jpg" width="122" height="155" alt="<?php echo $_smarty_tpl->getVariable('results')->value[2]['name'];?>
" title="<?php echo $_smarty_tpl->getVariable('results')->value[2]['name'];?>
" /></div>
		  <div class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[2]['first_name'];?>
<br/><?php echo $_smarty_tpl->getVariable('results')->value[2]['last_name'];?>
</div>
		  <div class="match-winner-percentage"><span class="match-winner-percentage-number"><?php echo $_smarty_tpl->getVariable('results')->value[2]['result_percent'];?>
</span> %</div>
		</a>
	  </div>
	</div>  
	
</div><!-- /grid-b -->

	<div class="mobile">
	  <div class="match-winner-block">
	      <div class="ui-grid-a">
	        <div class="ui-block-a">
			  <div class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[0]['first_name'];?>
<br/><?php echo $_smarty_tpl->getVariable('results')->value[0]['last_name'];?>
</div>
		    </div>
		    <div class="ui-block-b">
			  <div class="match-winner-percentage"><span class="match-winner-percentage-number"><?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
</span> %</div>
		    </div>
	      </div>
	  </div>
    </div>

	<a data-role="button" data-theme="c" href=<?php $_template = new Smarty_Internal_Template("psp2013-match-facebook-link.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	  
		   target='_blank'><img src="../../image/fb_logo.png" 
		   alt="<?php echo $_smarty_tpl->getVariable('text')->value['result_share_results_on_facebook'];?>
" />
	<span class="match-fb-text"><?php echo $_smarty_tpl->getVariable('text')->value['result_winner_share'];?>
</a>
</div>
