<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 21:52:13
  from 'C:\xampp\htdocs\projet_coach_sante\template\fiche_suivi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5588fdc5a1b1_83995999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5698b461f3f6b49ea9ff364b63112e353f53b7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\fiche_suivi.tpl',
      1 => 1582663440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5588fdc5a1b1_83995999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17786199345e5588fdc52016_92182041', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_17786199345e5588fdc52016_92182041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17786199345e5588fdc52016_92182041',
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
