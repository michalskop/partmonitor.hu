<?php /* Smarty version Smarty-3.0.7, created on 2014-03-20 04:27:59
         compiled from "../../../smarty/templates/hu2014-match-low.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630648532a603f1c0052-71452980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c66c918687209b7a6f30e476306e685b3f7a7876' => 
    array (
      0 => '../../../smarty/templates/hu2014-match-low.tpl',
      1 => 1392821010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '630648532a603f1c0052-71452980',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div class="match-embed" >
	
	 <a data-role="button" data-theme="c" href=<?php $_template = new Smarty_Internal_Template("psp2013-match-facebook-link.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	  
		   target='_blank'><img src="../../image/fb_logo.png" 
		   alt="Sdílej na Facebooku" />
	<span class="match-fb-text">Zdieľaj <span class="computer">výsledky </span>na Facebooku</span></a>
	  
	  <div data-role="collapsible" data-theme="d" data-content-theme="e">
    	<h3>Vložiť kalkulačku k sebe na web</h3>
            <div data-role="fieldcontain">
				<p>Vložte kód HTML:</p>
					<textarea data-role="none" cols="40" rows="3" name="textarea" id="textarea"><iframe src="http://volebnakalkulacka.sk/volba-prezidenta-2014/?key=result_nazorovy" width="650" height="550" frameborder="0" ></iframe></textarea><br/>
				V <a href="/embed" data-ajax="false">detailnom výbere kalkulačiek</a> si môžete vybrať i jej veľkosť (štandardná, mobilná)
			</div>   
	  </div>
	</div>


<div class="ui-grid-b social-block match-embed">


        <div class="ui-block-a">
		    <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/sk_SK/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script> 
					  <div class="fb-like" data-href="http://www.facebook.com/KohoVolit.eu" data-send="false" data-layout="box_count" data-width="50" data-show-faces="false"></div>
		</div>		  
		
		<div class="ui-block-b social-g">
			<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-size="tall"></div>

			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  window.___gcfg = {lang: 'sk'};

			  (function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		</div>
		
		<div class="ui-block-c social-twitter">
				<div><a href="https://twitter.com/share" class="twitter-share-button" data-via="KohoVolitEU" data-count ="vertical">Tweet</a></div>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		
	  </div><!-- /grid -->

