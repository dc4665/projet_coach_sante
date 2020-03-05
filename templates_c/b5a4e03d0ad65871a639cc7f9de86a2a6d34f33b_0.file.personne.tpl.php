<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 11:43:33
  from 'C:\xampp\htdocs\projet_coach_sante\template\personne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60d7d5b96f29_68522878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a4e03d0ad65871a639cc7f9de86a2a6d34f33b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\personne.tpl',
      1 => 1583405011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60d7d5b96f29_68522878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 3) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2725054335e60d7d5b834b2_85649326', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 2) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11847279565e60d7d5b904a7_85985540', "content");
?>


<?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 1) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6910161575e60d7d5b93ae6_78342000', "content");
?>


<?php }?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_2725054335e60d7d5b834b2_85649326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2725054335e60d7d5b834b2_85649326',
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
                <div class="row">
                                        <?php if (isset($_smarty_tpl->tpl_vars['modification']->value)) {?>
                        <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['modification']->value;?>
</div>
                    <?php }?>
                    <div class="">
                        <a style="margin-right: 20px" class="btn anton yellow bg_black" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('espace_perso');?>
"><i style="padding-right: 10px" class="yellow fas fa-cog"></i>MODIFIER MES INFORMATIONS</a>
                    </div>
                    <div style="margin-bottom: 50px" class="connexion"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('nouvelle_fiche');?>
" class="btn anton bg_yel_oni btn-lg">SOUMETTRE UNE NOUVELLE FICHE</a></div>
                </div>    
            </div>
        </div>    
    </div>
    <?php
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_11847279565e60d7d5b904a7_85985540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11847279565e60d7d5b904a7_85985540',
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
                        <a class="col-3 col-md-3 ml-auto mr-auto btn anton black bg_yel_oni" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getFiche($_smarty_tpl->tpl_vars['fiche']->value['id_fiche']);?>
">Consulter la fiche de suivi</a>
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
class Block_6910161575e60d7d5b93ae6_78342000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6910161575e60d7d5b93ae6_78342000',
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
