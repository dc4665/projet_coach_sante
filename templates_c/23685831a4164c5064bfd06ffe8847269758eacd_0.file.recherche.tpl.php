<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-06 17:00:05
  from 'C:\xampp\htdocs\projet_coach_sante\template\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e627385510ce0_17383592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23685831a4164c5064bfd06ffe8847269758eacd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\recherche.tpl',
      1 => 1583510403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e627385510ce0_17383592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8599963565e627385500f19_84954756', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_8599963565e627385500f19_84954756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8599963565e627385500f19_84954756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Bandeau -->
<div class="bandeau">
            <div id="bg_admin">

            </div>
                <div class="bg_opacity">
                </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ZONE RECHERCHE</h1>

                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Vous pouvez rechercher et afficher les coordonnées de tous les membres, coachs et admin du site, dans cette section.                         
                        </p>
                    </div>
                </div>
            </div>
    </div>
<!-- Zone de recherche -->
    <div class="container">
        <div style="margin-top: 50px" class="row d-flex justify-content-center">
            <form action="" method="post">
                <input class="form-control" type="search" name="recherche" placeholder="">
                &nbsp;
                <button type="submit" value="" name="rechercher" class="btn anton yellow bg_black"><i class="yellow fas fa-search"></i> Rechercher</button>
            </form>
        </div>    
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['clients']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="card recherche p-2">
                            <h1>Resultat de la recherche</h1>
                            <p class="recherche">Nombre de fiches de suivi : <?php echo $_smarty_tpl->tpl_vars['client']->value->getNombreFiche($_smarty_tpl->tpl_vars['client']->value->getId_personne());?>
</p>
                            <p class="recherche">Nom: <?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</p>
                            <p class="recherche">Prenom: <?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
</p>
                            <p class="recherche">Tel: +33<?php echo $_smarty_tpl->tpl_vars['client']->value->getTel();?>
</p>
                            <p class="recherche">Email: <?php echo $_smarty_tpl->tpl_vars['client']->value->getEmail();?>
</p>
                            <p class="recherche">Date de naissance: <?php echo $_smarty_tpl->tpl_vars['client']->value->getDate_naissance();?>
</p>
                            <p class="recherche">Taille: <?php echo $_smarty_tpl->tpl_vars['client']->value->getTaille();?>
 cm</p>
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
       <div class="alert-danger recherche">
        <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>

        </div>
    <?php }
}
}
/* {/block "content"} */
}
