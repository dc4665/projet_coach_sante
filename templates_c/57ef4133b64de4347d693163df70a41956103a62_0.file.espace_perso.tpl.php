<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 11:32:07
  from 'C:\xampp\htdocs\projet_coach_sante\template\espace_perso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60d527c3c5c4_37500157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ef4133b64de4347d693163df70a41956103a62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\espace_perso.tpl',
      1 => 1583404323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60d527c3c5c4_37500157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13197960805e60d527c36d58_50826711', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_13197960805e60d527c36d58_50826711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13197960805e60d527c36d58_50826711',
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

    <div style="margin-top: 20px"></div> 
    <div class="container">
        <h1>Bienvenu sur votre espace personnel: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getPrenom();?>
</h1>
        <p><em>Vous pouvez changer vos informations et coordonnées personnelles</em></p>

            <form action="" method="post">
                <label>Nom</label>
                <input type="text" name="nom" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getNom();?>
" required /><br/>

                <label>Prenom</label>
                <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getPrenom();?>
" required /><br/>

                <label>Email</label>
                <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getEmail();?>
" required /><br/>

                <label>Téléphone</label>
                <input type="tel" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getTel();?>
" required /><br/>

                <label>Mot de passe</label>
                <input type="password" name="password" id="password" value="" required /><br/>

                <button type="submit" name="modification" class="btn anton bg_yel_oni">Valider les changements</button>

            </form>
    </div>



<?php
}
}
/* {/block "content"} */
}
