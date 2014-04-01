<?php /* Smarty version Smarty-3.0.7, created on 2014-04-01 02:14:29
         compiled from "../../../smarty/templates/hu2014-match-sharer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:759169794533a04e560be58-67800386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00cb265318ce1c9f891c18200643567d55c08e20' => 
    array (
      0 => '../../../smarty/templates/hu2014-match-sharer.tpl',
      1 => 1396311265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '759169794533a04e560be58-67800386',
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
" href=<?php $_template = new Smarty_Internal_Template("hu2014-match-facebook-link.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	  
	   target='_blank'><img src="../../image/fb_logo.png" 
       alt="<?php echo $_smarty_tpl->getVariable('text')->value['result_share_results_on_facebook'];?>
" /></a>
  </div>

</div>
