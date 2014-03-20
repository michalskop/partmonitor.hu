<?php /* Smarty version Smarty-3.0.7, created on 2013-10-30 23:59:03
         compiled from "../../../smarty/templates/psp2013-match-winner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101327132952718f372e2c87-73837451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5941652db859fcfcfc23d748ef390b1d1acc89' => 
    array (
      0 => '../../../smarty/templates/psp2013-match-winner.tpl',
      1 => 1383173627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101327132952718f372e2c87-73837451',
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
	</div>  
	<div class="ui-block-b">
	  <div class="match-winner-block">
	    <a href="../compare.php?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('results')->value[0]['id'];?>
&match=<?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
" data-rel="dialog" style="text-decoration:none">
		  <div><img src="../../image/vuc2013/<?php echo $_smarty_tpl->getVariable('results')->value[0]['friendly_name'];?>
.jpg" width="122" height="155" alt="<?php echo $_smarty_tpl->getVariable('results')->value[0]['name'];?>
" title="<?php echo $_smarty_tpl->getVariable('results')->value[0]['name'];?>
" /></div>
		  <div class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[0]['first_name'];?>
<br/><?php echo $_smarty_tpl->getVariable('results')->value[0]['last_name'];?>
<br/><span style="font-size:0.75em;line-height:100%"><?php echo $_smarty_tpl->getVariable('results')->value[0]['party'];?>
</span></div>
		  <div class="match-winner-percentage"><span class="match-winner-percentage-number"><?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
</span> %</div>
		</a>
	  </div>
	</div>
	<div class="ui-block-c">
	</div>  
	
</div><!-- /grid-b -->

	<div class="mobile">
	  <div class="match-winner-block">
	      <div class="ui-grid-a">
	        <div class="ui-block-a">
			  <div style="color:#<?php echo $_smarty_tpl->getVariable('winner_color')->value[0];?>
" class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[0]['first_name'];?>
<br/><?php echo $_smarty_tpl->getVariable('results')->value[0]['last_name'];?>
</div>
			  <div style="color:#<?php echo $_smarty_tpl->getVariable('winner_color')->value[0];?>
"><?php echo $_smarty_tpl->getVariable('results')->value[0]['party'];?>
</div>
		    </div>
		    <div class="ui-block-b">
			  <div class="match-winner-percentage"><span class="match-winner-percentage-number"><?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
</span> %</div>
		    </div>
	      </div>
	  </div>
    </div>
	<!--<p>Dle zadaných odpovědí je Vám nejblíže se shodou <strong><?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
&nbsp;%</strong> :</p>
	<div style="color:#<?php echo $_smarty_tpl->getVariable('winner_color')->value;?>
" class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[0]['first_name'];?>
 <?php echo $_smarty_tpl->getVariable('results')->value[0]['last_name'];?>
</div>-->

<!--<a data-role="button" data-theme="c" title="Sdílej výsledky na Facebooku" 
    href="http://www.facebook.com/sharer.php?s=100&amp;p[url]=http://VolebniKalkulacka.cz&amp;p[images][0]=http://volebnikalkulacka.cz/image/logo.png&amp;p[title]=VolebníKalkulačka.cz&amp;p[summary]=<?php echo $_smarty_tpl->getVariable('facebook_text')->value;?>
" target="_blank"  data-role="none">
     <img src="../../image/fb_logo.png" 
       alt="Sdílej na Facebooku" /><span class="match-fb-text">Sdílej <span class="computer">výsledky </span>na Facebooku</span>
</a>-->

	<a data-role="button" data-theme="c" href=<?php $_template = new Smarty_Internal_Template("psp2013-match-facebook-link.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	  
		   target='_blank'><img src="../../image/fb_logo.png" 
		   alt="<?php echo $_smarty_tpl->getVariable('text')->value['result_share_results_on_facebook'];?>
" />
	<span class="match-fb-text"><?php echo $_smarty_tpl->getVariable('text')->value['result_winner_share'];?>
</a>
</div>
