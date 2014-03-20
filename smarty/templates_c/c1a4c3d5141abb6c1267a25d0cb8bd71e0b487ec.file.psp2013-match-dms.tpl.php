<?php /* Smarty version Smarty-3.0.7, created on 2013-10-29 04:42:34
         compiled from "../../../smarty/templates/psp2013-match-dms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858871207526f2eaa6caf61-44803514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a4c3d5141abb6c1267a25d0cb8bd71e0b487ec' => 
    array (
      0 => '../../../smarty/templates/psp2013-match-dms.tpl',
      1 => 1380030218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858871207526f2eaa6caf61-44803514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="dms" class="computer">
  <div id="dms-inside" class="computer800 ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c ui-bar-e"> 
      <img src="../../image/psp2013/dms.png" alt="DMS" title="<?php echo $_smarty_tpl->getVariable('text')->value['dms_title'];?>
" />
      <div id="dms-inside-inside" >
        <h3><?php echo $_smarty_tpl->getVariable('text')->value['dms_1'];?>
</h3>
        <?php echo $_smarty_tpl->getVariable('text')->value['dms_2'];?>
<br/>
        <strong><?php echo $_smarty_tpl->getVariable('text')->value['dms_code'];?>
</strong> <br/>
        <span class="small"><?php echo $_smarty_tpl->getVariable('text')->value['dms_explanation'];?>
<br/></span>
	    <strong><?php echo $_smarty_tpl->getVariable('text')->value['dms_code_year'];?>
</strong> <br/>
	    <span class="small"><?php echo $_smarty_tpl->getVariable('text')->value['dms_explanation_year'];?>
</span> <br/>
	    <span class="right small"><a href="/support/"><?php echo $_smarty_tpl->getVariable('text')->value['dms_info'];?>
 -></a></span> <br/>
	    <p><strong><?php echo $_smarty_tpl->getVariable('text')->value['dms_thanks'];?>
</strong></p>
      </div>
  </div>
</div>
<div id="dms-mobile" data-role="popup" class="mobile800 ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c ui-bar-e">
    <h3><?php echo $_smarty_tpl->getVariable('text')->value['dms_mobile_1'];?>
</h3>
    <?php echo $_smarty_tpl->getVariable('text')->value['dms_mobile_2'];?>
<br/>
    <strong><?php echo $_smarty_tpl->getVariable('text')->value['dms_code'];?>
</strong><br/>
    <?php echo $_smarty_tpl->getVariable('text')->value['dms_mobile_3'];?>
<br/>
    <strong><?php echo $_smarty_tpl->getVariable('text')->value['dms_code_year'];?>
</strong><br/>
    <?php echo $_smarty_tpl->getVariable('text')->value['dms_mobile_explanation'];?>
<br/>
    <?php echo $_smarty_tpl->getVariable('text')->value['dms_thanks'];?>

</div>

