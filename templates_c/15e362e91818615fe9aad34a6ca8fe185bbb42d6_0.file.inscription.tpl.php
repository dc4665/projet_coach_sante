<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 09:56:11
  from 'C:\xampp\htdocs\projetcoachsante\template\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cca2b973144_96363394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e362e91818615fe9aad34a6ca8fe185bbb42d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetcoachsante\\template\\inscription.tpl',
      1 => 1583137664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cca2b973144_96363394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13430063775e5cca2b972513_60708071', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_13430063775e5cca2b972513_60708071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13430063775e5cca2b972513_60708071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <form action="" method="post">
                <p>Vous êtes : </p>     
        <input type="radio" name="sexe" id="homme" value="homme" />
        <label for="homme">Homme</label>      
        <input type="radio" name="sexe" id="femme" value="femme" /> 
        <label for="femme">Femme</label>       
        <input type="radio" name="sexe" id="autre" value="autre" />
        <label for="autre">Autre</label>
        <br/>

                <label>Nom</label>
        <input type="text" name="nom" id="nom" required /><br/>

        <label>Prenom</label>
        <input type="text" name="prenom" id="prenom" required /><br/>

        <label>Taille (en cm)</label>
        <input type="number" name="taille" id="taille" required /><br/>

        <label>Poids (en kg)</label>
        <input type="number" name="poids" id="poids" required /><br/>

        <label>Date de naissance</label>
        <input type="date" name="date_naissance" id="date_naissance" required /><br/>

        <label>Email</label>
        <input type="email" name="email" id="email" required /><br/>

        <label>Téléphone</label>
        <input type="tel" name="tel" id="tel" required /><br/>

        <label>Mot de passe</label>
        <input type="password" name="password" id="password" required /><br/>

        <label>Confirmation du Mot de Passe</label>
        <input type="password" name="password_check" id="password_check" required /><br/>

        <button type="submit" name="inscription" class="btn btn-primary">Valider l'inscription</button>

    </form>
<?php
}
}
/* {/block "content"} */
}
