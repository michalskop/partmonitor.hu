<?php /* Smarty version Smarty-3.0.7, created on 2014-02-19 14:46:40
         compiled from "../../../smarty/templates/match-winner-president.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9797021285304b5c0242a66-13165386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74080a19c775716e01117624a19658fb03a2f315' => 
    array (
      0 => '../../../smarty/templates/match-winner-president.tpl',
      1 => 1352158412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9797021285304b5c0242a66-13165386',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="box-center-match match-winner-box">
	<p>Dle zadaných odpovědí je Vám nejblíže se shodou <strong><?php echo $_smarty_tpl->getVariable('results')->value[0]['result_percent'];?>
&nbsp;%</strong> :</p>
	<div style="color:#<?php echo $_smarty_tpl->getVariable('winner_color')->value;?>
" class="match-winner"><?php echo $_smarty_tpl->getVariable('results')->value[0]['name'];?>
</div>
	</style>
<a data-role="button" data-theme="c" title="Sdílej výsledky na Facebooku" 
    href="http://www.facebook.com/sharer.php?s=100&amp;p[url]=http://VolebniKalkulacka.cz&amp;p[images][0]=http://volebnikalkulacka.cz/image/logo.png&amp;p[title]=VolebníKalkulačka.cz&amp;p[summary]=<?php echo $_smarty_tpl->getVariable('facebook_text')->value;?>
" target="_blank"  data-role="none">
     <img src="../../image/fb_logo.png" 
       alt="Sdílej na Facebooku" /><span class="match-fb-text">Sdílej <span class="computer">výsledky </span>na Facebooku</span>
</a>
<p>Graf a tabulka ukazují, jak se s Vámi shodují i další kandidáti:</p>
</div>
