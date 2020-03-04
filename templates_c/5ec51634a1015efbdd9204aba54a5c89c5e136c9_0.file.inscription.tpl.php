<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 16:27:18
  from 'C:\xampp\htdocs\projet_coach_sante\template\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fc8d63dfaa8_85497369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec51634a1015efbdd9204aba54a5c89c5e136c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\inscription.tpl',
      1 => 1583319023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fc8d63dfaa8_85497369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10843257255e5fc8d63d7038_38099518', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_10843257255e5fc8d63d7038_38099518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10843257255e5fc8d63d7038_38099518',
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
                <h2 style="text-align: center" class="medium_font">INSCRIPTION</h2>
                    <div class="row">
                        <div class="col-12 col-md-6 ml-auto mr-auto">
                            <form action="" method="post"><br>
                                <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
                                    <div class="alert-warning"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
                                <?php }?>

                                                                <p class="form_font anton">VOUS ÊTES : </p>     
                                <input type="radio" name="sexe" id="homme" value="homme">
                                <label for="homme">Homme</label>      
                                <input type="radio" name="sexe" id="femme" value="femme"> 
                                <label for="femme">Femme</label>       
                                <br/>

                                                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" required />

                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" required />

                                <label>Taille (en CM)</label>
                                <input type="number" class="form-control" name="taille" id="taille" required />

                                <label>Date de naissance</label>
                                <input type="date" class="form-control" name="date_naissance" id="date_naissance" required />

                                <label>E-Mail</label>
                                <input type="email" class="form-control" name="email" id="email" required />

                                <label>Téléphone</label>
                                <input type="tel" class="form-control" name="tel" id="tel" required />

                                <label>Mot de passe</label>
                                <input type="password" class="form-control" name="password" id="password" required /><br/>

                                <button style="margin-bottom: 50px" type="submit" name="inscription" class="btn anton bg_yel_oni btn-block">VALIDER L'INSCRIPTION</button>

                                <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                                    <div><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                                <?php }?>
                            </form>
                        </div>
                    </div>    
            </div>        
    
    
<?php
}
}
/* {/block "content"} */
}
