<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 15:48:25
  from 'C:\xampp\htdocs\projet_coach_sante\template\fiche_suivi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e611139b6cdb4_37353243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5698b461f3f6b49ea9ff364b63112e353f53b7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\fiche_suivi.tpl',
      1 => 1583419701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e611139b6cdb4_37353243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7380173595e611139b592d4_96176661', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_7380173595e611139b592d4_96176661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7380173595e611139b592d4_96176661',
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

        <?php if (isset($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 3) {?>
            <div style="margin-top: 20px">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 ml-auto mr-auto">
                            <h2 class="text-center medium_font yellow">Résumé de votre fiche du: <?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</h2>
                            <br>
                            <div class="card">
                                <label class="card-header anton" class="form-font anton">Alimentation (Saisissez vos repas de la semaine)</label>
                                <p class="card-body" style="line-height: 160%"><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getAlimentation();?>
</p>
                                <label class="card-header anton" class="form-font anton">Activités de la semaine <br> (Indiquez les exercices et la durée de vos entrainements)</label>
                                <p class="card-body" style="line-height: 160%"><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getActivite();?>
</p>
                                <label class="card-header anton" class="form-font anton">Commentaire</label>
                                <p class="card-body" style="line-height: 160%"><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getCommentaire();?>
</p>
                            </div>    
                        </div>
                            
                                            <div style="margin-top: 100px" class="col-12 col-md-6 ml-auto mr-auto">
                            <?php if (isset($_smarty_tpl->tpl_vars['commentaires']->value)) {?>
                            <div class="container">
                                <h2>Les conseils de Coach : <?php echo $_smarty_tpl->tpl_vars['coach']->value;?>
</h2>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commentaires']->value, 'donnee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['donnee']->value) {
?>
                                    <div class="card">
                                        <label class="card-header anton" class="form-font anton">Sur l'alimentation</label>
                                        <p class="card-body" style="line-height: 160%"><?php echo $_smarty_tpl->tpl_vars['donnee']->value['alimentation_coach'];?>
</p>
                                        <label class="card-header anton" style="margin-top: 100px" class="form-font anton">Sur votre activité physique</label>
                                        <p class="card-body" style="line-height: 160%"><?php echo $_smarty_tpl->tpl_vars['donnee']->value['activite_coach'];?>
</p>
                                        <label class="card-header anton" style="margin-top: 100px" class="form-font anton">Autre(s) recommandation(s)</label>
                                        <p class="card-body" style="line-height: 160%"><?php echo $_smarty_tpl->tpl_vars['donnee']->value['commentaire_coach'];?>
</p>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <?php }?>
                        </div>        
                    </div>
                <div style="margin-top: 25px" class="row d-flex justify-content-center">    
                    <a style="margin-bottom: 20px" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('personne');?>
" class="col- col-md-4 ml-auto mr-auto btn anton yellow bg_black btn-lg">RETOUR</a>
                </div>
                </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->getId_role() == 2 || 1) {?>
        <div style="margin-top: 30px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 ml-auto mr-auto">
                        <h2>Fiche de suivi du: <?php echo $_smarty_tpl->tpl_vars['fiche']->value->getDate_fiche();?>
</h2>
                        <div class="card">
                            <label class="card-header anton" class="form-font anton yellow">Alimentation</label>
                            <p class="card-body"><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getAlimentation();?>
</p>
                            <br>
                            <label class="card-header anton" class="form-font anton yellow">Activités de la semaine</label>
                            <p class="card-body"><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getActivite();?>
</p>
                            <label class="card-header anton" class="form-font anton yellow">Commentaire</label>
                            <p class="card-body"><?php echo $_smarty_tpl->tpl_vars['fiche']->value->getCommentaire();?>
</p>
                        </div>    
                    </div>
                                        <div style="margin-top: 40px" class="col-12 col-md-6 ml-auto mr-auto">
                            <form action="" method="post">
                                <label class="anton">Conseil - Alimentation</label>
                                <br/>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <br/>
                                <label style="margin-top: 40px" class="anton">Conseil - Activité</label>
                                <br/>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <br/>
                                <label style="margin-top: 40px" class="anton">Conseil - Divers</label>
                                <br/>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <br/>
                                <button type="submit" name="coach_review" class="btn anton bg_yel_oni">Soumettre le compte-rendu</button>
                            </form>
                            </div>   
                    </div>     
                </div>           
            </div>        
        <?php }?>
    <br><br>
    <?php }?>

<?php
}
}
/* {/block "content"} */
}
