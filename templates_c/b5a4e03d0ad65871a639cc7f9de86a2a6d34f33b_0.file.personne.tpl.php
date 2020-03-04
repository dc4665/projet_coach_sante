<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 17:23:08
  from 'C:\xampp\htdocs\projet_coach_sante\template\personne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fd5ec371367_98456800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a4e03d0ad65871a639cc7f9de86a2a6d34f33b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\personne.tpl',
      1 => 1583338922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fd5ec371367_98456800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 3) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8675011845e5fd5ec358fa3_29097430', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 2) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13820996585e5fd5ec3697d1_25234236', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 1) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15022040725e5fd5ec36d956_69682125', "content");
?>


<?php }?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_8675011845e5fd5ec358fa3_29097430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8675011845e5fd5ec358fa3_29097430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bandeau">
            <div id="bg_connexion">

            </div>
                <div class="bg_opacity">
                </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ESPACE CLIENT</h1>

                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                        <p class="white">
                            Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel
                        </p>
                    </div>
                </div>
            </div>
    </div>
    <div style="margin-top: 50px" class="container form_font anton">
        <div class="row">
            <div class="col-12 col-md-6 ml-auto mr-auto"> 
                <h2 style="text-align: center" class="yellow">BIENVENU DANS VOTRE ESPACE PERSONNEL: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getPrenom();?>
</h2><br>
                                <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                    <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                <?php }?>

                                <?php if (isset($_smarty_tpl->tpl_vars['modification']->value)) {?>
                    <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['modification']->value;?>
</div>
                <?php }?>
                <div>
                    <a class="btn anton black bg_yel_oni" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('espace_perso');?>
"><i style="padding-right: 10px" class="black fas fa-cog"></i>MODIFIER MES INFORMATIONS</a>
                </div>

                <p class="medium_font"><img id="clipboard" class="img-fluid" src="img/fiche_suivi.png" alt="clipboard icon"><em><strong>Mes Fiches</strong></em></p>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
                    <a class="fiche_suivi" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value->getId_fiche());?>
">Fiche du <?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</a><br>
                    
                    <?php if ($_smarty_tpl->tpl_vars['fiche']->value->getActif() == 0) {?>
                        <p>En attente de suivi</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['fiche']->value->getActif() == 1) {?>
                        <p>Cette fiche a été commentée!</p>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <br>

                <div style="margin-bottom: 50px" class="connexion"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('nouvelle_fiche');?>
" class="btn anton bg_yel_oni btn-lg">SOUMETTRE UNE NOUVELLE FICHE</a></div>
            </div>
        </div>    
    </div>
    <?php
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_13820996585e5fd5ec3697d1_25234236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13820996585e5fd5ec3697d1_25234236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="bandeau">
            <div id="bg_espace_coach">

            </div>
                <div class="bg_opacity">
                </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ESPACE COACH</h1>

                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                        <p class="white">
                            Dispensez vos conseils en matières de nutrition et d'exercice de musculation, pour que chaques clients est un suivi personnalisé dans cet espace.
                        </p>
                    </div>
                </div>
            </div>
    </div>
        <div style="margin-top: 50px"></div> 
        <div class="container">
            <h2 style="text-align: center">Hello Coach <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
</h2>
            <p style="text-align: center"><em>Voici toutes les fiches en attentes</em></p>
            <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-header" ><?php echo $_smarty_tpl->tpl_vars['fiche']->value['nom'];?>
  <?php echo $_smarty_tpl->tpl_vars['fiche']->value['prenom'];?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['fiche']->value['date_fiche'];?>
</p>
                        <a class="btn anton black bg_yel_oni" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value['id_fiche']);?>
">Consulter la fiche de suivi</a>
                    </div>    
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
/* {block "content"} */
class Block_15022040725e5fd5ec36d956_69682125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15022040725e5fd5ec36d956_69682125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
</h2>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('admin_manager');?>
">Accéder à la zone d'administration</a>
            <p>Voici toutes les fiches en attentes</p>
            <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

            <?php }?>
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
