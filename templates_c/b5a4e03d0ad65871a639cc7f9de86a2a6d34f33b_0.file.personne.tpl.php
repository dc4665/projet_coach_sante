<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-06 16:41:01
  from 'C:\xampp\htdocs\projet_coach_sante\template\personne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e626f0da9eae4_36010800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a4e03d0ad65871a639cc7f9de86a2a6d34f33b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\personne.tpl',
      1 => 1583491718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e626f0da9eae4_36010800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 3) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4710504975e626f0da77c18_76914597', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 2) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15017544205e626f0da89502_29838786', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 1) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11441206195e626f0da91f82_88640635', "content");
?>


<?php }?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_4710504975e626f0da77c18_76914597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4710504975e626f0da77c18_76914597',
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
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel
                        </p>
                    </div>
                </div>
            </div>
    </div>
    <div style="margin-top: 20px" class="container form_font anton">
        <div class="row">
            <div class="col-12 col-md-6 ml-auto mr-auto"> 
                <h2 style="text-align: center" class="yellow">BIENVENU DANS VOTRE ESPACE PERSONNEL: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getPrenom();?>
</h2>
                                <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                    <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                <?php }?>

                <p class="medium_font"><img id="clipboard" class="img-fluid" src="img/fiche_suivi.png" alt="clipboard icon"><em><strong>Mes Fiches</strong></em></p>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
                <div class="d-flex justify-content-center">
                    <div class="card w-75">
                        <h5 class="card-header">
                                <a class="fiche_suivi" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value->getId_fiche());?>
">Fiche du <?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</a></h5>
                            <div class="card-body">    
                            <?php if ($_smarty_tpl->tpl_vars['fiche']->value->getActif() == 0) {?>
                                <p class="card-text">En attente de suivi</p>
                            <?php } elseif ($_smarty_tpl->tpl_vars['fiche']->value->getActif() == 1) {?>
                                <p class="card-text">Cette fiche a été commentée <i class="fas fa-check"></i></p>
                            <?php }?>
                            </div>
                    </div>
                </div>        
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <br>
                <div style="margin-bottom: 20px" class="row d-flex justify-content-around">
                                        <?php if (isset($_smarty_tpl->tpl_vars['modification']->value)) {?>
                        <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['modification']->value;?>
</div>
                    <?php }?>
                            <a class="btn anton yellow bg_black" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('espace_perso');?>
"><i style="padding-right: 10px" class="yellow fas fa-cog"></i>MODIFIER MES INFORMATIONS</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('nouvelle_fiche');?>
" class="btn anton bg_yel_oni btn-lg">SOUMETTRE UNE NOUVELLE FICHE</a>
                        </div>   
                </div>    
            </div>
        </div>    
    </div>
    <?php
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_15017544205e626f0da89502_29838786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15017544205e626f0da89502_29838786',
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
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Dispensez vos conseils en matières de nutrition et d'exercice de musculation, pour que chaques clients est un suivi personnalisé dans cet espace.
                        </p>
                    </div>
                </div>
            </div>
    </div>
        <div style="margin-top: 20px"></div> 
        <div class="container">
            <h2 style="text-align: center">Hello Coach <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
</h2>
                <div style="margin-top: 20px" class="row d-flex justify-content-center">
                    <a style="margin-bottom: 10px" class="col-12 col-md-3 ml-auto mr-auto btn yellow anton bg_black" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('recherche');?>
"><i class="yellow fas fa-search"></i> Rechercher un membre</a>
                </div>
            <p style="text-align: center"><em>Voici toutes les fiches en attentes</em></p>
                        <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
            <div class="d-flex justify-content-center">    
                <div class="card w-50">
                    <div class="card-body">
                        <h5 class="card-header text-center" ><?php echo $_smarty_tpl->tpl_vars['fiche']->value['nom'];?>
  <?php echo $_smarty_tpl->tpl_vars['fiche']->value['prenom'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['fiche']->value['date_fiche'];?>
  &nbsp;<i class="fas fa-pencil-alt"></i></h5>
                        <br>
                            <a class="col-12 ml-auto mr-auto btn anton black bg_yel_oni" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value['id_fiche']);?>
">Consulter la fiche de suivi</a>
                    </div>    
                </div>
            </div>    
                <div style="margin-bottom: 20px"></div>
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
class Block_11441206195e626f0da91f82_88640635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11441206195e626f0da91f82_88640635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="bandeau">
            <div id="bg_admin">
            </div>
                <div class="bg_opacity">
                </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ZONE ADMINISTRATEUR</h1>
                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Bienvenu dans la zone d'administration.<br>
                            Gérez vous même les autorisations d'accès des coachs et les comptes clients.<br>
                            Vous pouvez également supprimer les accès coachs et les comptes clients.
                        </p>
                    </div>
                </div>
            </div>

    </div>
        <div style="margin-top: 20px"></div> 
        <div class="container">
            <h2 style="text-align: center">Hello Coach <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
</h2>
            <div style="margin-top: 25px" class="row">
                <a style="margin-bottom: 30px" class="col-12 col-md-3 ml-auto mr-auto btn yellow anton bg_black" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('recherche');?>
"><i class="yellow fas fa-search"></i> Rechercher un membre</a>
                <a style="margin-bottom: 30px" class="col-12 col-md-3 ml-auto mr-auto btn black anton btn-outline-warning" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('admin_manager');?>
"><i class="black fas fa-cog"></i> Accéder à la zone d'administration</a>
            </div>

                <p style="text-align: center"><em>Voici toutes les fiches en attentes</em></p>
                <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
                <div class="d-flex justify-content-center">
                    <div class="card w-50">
                        <div class="card-body">
                            <h5 class="card-header text-center" ><?php echo $_smarty_tpl->tpl_vars['fiche']->value['nom'];?>
  <?php echo $_smarty_tpl->tpl_vars['fiche']->value['prenom'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['fiche']->value['date_fiche'];?>
 &nbsp; <i class="fas fa-pencil-alt"></i></h5>
                            <a class="col-12 ml-auto mr-auto btn anton black bg_yel_oni" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value['id_fiche']);?>
">Consulter la fiche de suivi</a>
                        </div>    
                    </div>
                </div>    
                <div style="margin-bottom: 20px"></div>
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
