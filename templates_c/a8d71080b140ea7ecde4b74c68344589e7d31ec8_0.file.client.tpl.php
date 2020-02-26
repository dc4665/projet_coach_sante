<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-26 14:00:23
  from 'C:\xampp\htdocs\projet_coach_sante\template\client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e566be7ceecc7_97549940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8d71080b140ea7ecde4b74c68344589e7d31ec8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\client.tpl',
      1 => 1582636109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e566be7ceecc7_97549940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20360927985e566be7c8b1a9_43979875', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_20360927985e566be7c8b1a9_43979875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20360927985e566be7c8b1a9_43979875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="margin-top: 200px"></div> 
    <div class="container">
        <h2>Mes fiches de suivi</h2>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value->getId_fiche());?>
">Fiche: <?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</a></br>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </div>

<?php
}
}
/* {/block "content"} */
}
