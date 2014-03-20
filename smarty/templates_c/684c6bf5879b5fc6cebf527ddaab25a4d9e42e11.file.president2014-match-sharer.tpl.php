<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 15:26:57
         compiled from "../../../smarty/templates/president2014-match-sharer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19542969245304bf316edf29-89621073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684c6bf5879b5fc6cebf527ddaab25a4d9e42e11' => 
    array (
      0 => '../../../smarty/templates/president2014-match-sharer.tpl',
      1 => 1392820014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19542969245304bf316edf29-89621073',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="mtopLeft" class="computer ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c"> 
  <h6><?php echo $_smarty_tpl->getVariable('text')->value['result_sharing'];?>
</h6>
  <div> 
    <a data-theme="b" title="<?php echo $_smarty_tpl->getVariable('text')->value['result_share_results_on_facebook'];?>
" href=<?php $_template = new Smarty_Internal_Template("psp2013-match-facebook-link.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	  
	   target='_blank'><img src="../../image/fb_logo.png" 
       alt="<?php echo $_smarty_tpl->getVariable('text')->value['result_share_results_on_facebook'];?>
" /></a>
  </div>
  
  <div>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://volebnakalkulacka.sk" data-via="KohoVolitEU" data-lang="<?php echo $_smarty_tpl->getVariable('text')->value['result_twitter_data_lang'];?>
" data-size="large" data-count="none" data-text="<?php echo $_smarty_tpl->getVariable('text')->value['result_twitter_text_1'];?>
<?php echo $_smarty_tpl->getVariable('text')->value['result_twitter_text_2'];?>
 <?php echo $_smarty_tpl->getVariable('results')->value[0]['last_name'];?>
(<?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
%)  <?php echo $_smarty_tpl->getVariable('text')->value['result_twitter_text_3'];?>
 <?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('results_count')->value-1]['last_name'];?>
(<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('results_count')->value-1]['result_percent'];?>
%) <?php echo $_smarty_tpl->getVariable('text')->value['result_twitter_hashtags'];?>
"><?php echo $_smarty_tpl->getVariable('text')->value['result_twitter_share'];?>
</a>
   </div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>
