<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 16:27:00
  from 'C:\xampp\htdocs\projet_coach_sante\template\fiche_suivi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fc8c4ccfd78_62790921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5698b461f3f6b49ea9ff364b63112e353f53b7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\fiche_suivi.tpl',
      1 => 1583335601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fc8c4ccfd78_62790921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10182818035e5fc8c4cbd400_99091322', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_10182818035e5fc8c4cbd400_99091322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10182818035e5fc8c4cbd400_99091322',
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

        <?php if (isset($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 3) {?>
            <div style="margin-top: 50px">
                <div class="connexion">
                    <h2 class="medium_font yellow">Résumé de votre fiche du: <?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</h2>
                    <br>
                    <label style="" class="form-font anton">Alimentation (Saisissez vos repas de la semaine)</label>
                    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getAlimentation();?>
</p>
                    <label style="" class="form-font anton">Activités de la semaine <br> (Indiquez les exercices et la durée de vos entrainements)</label>
                    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getActivite();?>
</p>
                    <label style="" class="form-font anton">Commentaire</label>
                    <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getCommentaire();?>
</p>
                        <a style="margin-bottom: 50px" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('personne');?>
" class="col-3 col-md-3 ml-auto mr-auto btn anton yellow bg_black btn-lg">RETOUR</a>
                </div>

                        <?php if (isset($_smarty_tpl->tpl_vars['commentaires']->value)) {?>
            <div class="container">
                <h2>Les commentaires de Coach : <?php echo $_smarty_tpl->tpl_vars['coach']->value;?>
</h2>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commentaires']->value, 'donnee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['donnee']->value) {
?>
                    <div>
                        <p><?php echo $_smarty_tpl->tpl_vars['donnee']->value['alimentation_coach'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['donnee']->value['activite_coach'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['donnee']->value['commentaire_coach'];?>
</p>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 2 || 1) {?>
            <div style="margin-top: 50px"></div>
            <div class="connexion">
                <h2>Fiche de suivi du: <?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</h2>
                <label class="form-font anton yellow">Alimentation</label>
                <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getAlimentation();?>
</p>
                <br>
                <label class="form-font anton yellow">Activités de la semaine</label>
                <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getActivite();?>
</p>
                <label class="form-font anton yellow">Commentaire</label>
                <p><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getCommentaire();?>
</p>
                <br/>
                        <form action="" method="post">
                    <label>Conseil - Alimentation</label><br/>
                    <textarea type="text" name="alimentation_coach" id="alimentation_coach"></textarea><br/>
                    <label>Conseil - Activité</label><br/>
                    <textarea type="text" name="activite_coach" id="activite_coach"></textarea><br/>
                    <label>Conseil - Divers</label><br/>
                    <textarea type="text" name="commentaire_coach" id="commentaire_coach"></textarea><br/>
                    <button type="submit" name="coach_review" class="btn btn-primary">Soumettre le compte-rendu</button>
                </form>

            </div>
        <?php }?>

    <?php }?>

<?php
}
}
/* {/block "content"} */
}
