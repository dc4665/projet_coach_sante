<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 09:56:48
  from 'C:\xampp\htdocs\projetcoachsante\template\fiche_suivi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cca50922139_38663390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20f6b2193fd212a922fe42519726a46c641509d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetcoachsante\\template\\fiche_suivi.tpl',
      1 => 1582709236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cca50922139_38663390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18912432035e5cca5091c656_50422288', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_18912432035e5cca5091c656_50422288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18912432035e5cca5091c656_50422288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="margin-top: 200px"></div>
    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getAlimentation();?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getActivite();?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getCommentaire();?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</p>
    <p></p>
<?php
}
}
/* {/block "content"} */
}
