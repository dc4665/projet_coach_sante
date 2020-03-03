<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 17:10:44
  from 'C:\xampp\htdocs\projet_coach_sante\template\personne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5e81840635e4_97981588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a4e03d0ad65871a639cc7f9de86a2a6d34f33b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\personne.tpl',
      1 => 1583247690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5e81840635e4_97981588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 3) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12485779915e5e8184044486_16199279', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 2 || 1) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16740718745e5e818405e126_76825134', "content");
?>


<?php }?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_12485779915e5e8184044486_16199279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12485779915e5e8184044486_16199279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div style="margin-top: 200px"></div> 
        <div class="container">
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('espace_perso');?>
">Accéder à mon espace personnel</a>
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
                <?php if ($_smarty_tpl->tpl_vars['fiche']->value->getActif() == 0) {?>
                    <p>En attente de suivi</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['fiche']->value->getActif() == 1) {?>
                    <p>Cette fiche a été commentée!</p>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('nouvelle_fiche');?>
" class="btn btn-primary">Soumettre une nouvelle fiche de suivi</a></div>

    <?php
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_16740718745e5e818405e126_76825134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16740718745e5e818405e126_76825134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
</h2>
            <p>Voici toutes les fiches en attentes</p>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
                <div class="card">
                    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['fiche']->value['prenom'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value['date_fiche'];?>
</p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value['id_fiche']);?>
">Consulter la fiche de suivi</a>
                </div>
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
