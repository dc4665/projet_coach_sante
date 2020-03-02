<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 09:56:44
  from 'C:\xampp\htdocs\projetcoachsante\template\personne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cca4c5f0e44_59416151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52d7258c33cefd0ff412624595be664fbfe4b0b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetcoachsante\\template\\personne.tpl',
      1 => 1583137664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cca4c5f0e44_59416151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['personne']->value->getId_role() == 3) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7817881005e5cca4c589fa6_61691007', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['personne']->value->getId_role() == 2) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16354198335e5cca4c5f0144_38639896', "content");
?>



<?php }?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_7817881005e5cca4c589fa6_61691007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7817881005e5cca4c589fa6_61691007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Mes fiches de suivi: <?php echo $_smarty_tpl->tpl_vars['personne']->value->getNom();?>
</h2>
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
/* {block "content"} */
class Block_16354198335e5cca4c5f0144_38639896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16354198335e5cca4c5f0144_38639896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: <?php echo $_smarty_tpl->tpl_vars['personne']->value->getNom();?>
</h2>
                    
        </div>

    <?php
}
}
/* {/block "content"} */
}
