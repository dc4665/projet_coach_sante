<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 13:11:27
  from 'C:\xampp\htdocs\projet_coach_sante\template\personne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cf7ef5957b5_61821971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a4e03d0ad65871a639cc7f9de86a2a6d34f33b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\personne.tpl',
      1 => 1583150589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cf7ef5957b5_61821971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 3) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475270575e5cf7ef586de9_76723276', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 2) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17238579535e5cf7ef5946f4_39463133', "content");
?>



<?php }?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_1475270575e5cf7ef586de9_76723276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1475270575e5cf7ef586de9_76723276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Mes fiches de suivi: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
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
class Block_17238579535e5cf7ef5946f4_39463133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17238579535e5cf7ef5946f4_39463133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
</h2>
                    
        </div>

    <?php
}
}
/* {/block "content"} */
}
