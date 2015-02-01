<?php /* Smarty version Smarty-3.0.4, created on 2015-01-31 19:56:25
         compiled from "D:/Work/AppServ/www/erafree/manager/templates/default/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403954cd33690c1398-95828310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fa4eb3be16e8d6411b0a71efa1c345c6920956b' => 
    array (
      0 => 'D:/Work/AppServ/www/erafree/manager/templates/default/error.tpl',
      1 => 1413920170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403954cd33690c1398-95828310',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modx_error">
    <h2>Error!</h2>
    
    <p><?php echo (isset($_smarty_tpl->getVariable('_e')->value['message']) ? $_smarty_tpl->getVariable('_e')->value['message'] : null);?>
</p>
    
    <?php if (count((isset($_smarty_tpl->getVariable('_e')->value['errors']) ? $_smarty_tpl->getVariable('_e')->value['errors'] : null))>0){?>
    <p></p>
    <p><strong>Errors:</strong></p>
    <ul>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('_e')->value['errors']) ? $_smarty_tpl->getVariable('_e')->value['errors'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
?>
        <li><?php echo (isset($_smarty_tpl->tpl_vars['error']->value) ? $_smarty_tpl->tpl_vars['error']->value : null);?>
</li>
    <?php }} ?>
    </ul>
    <?php }?>
</div>