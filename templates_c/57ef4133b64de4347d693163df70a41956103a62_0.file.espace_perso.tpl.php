<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 17:10:45
  from 'C:\xampp\htdocs\projet_coach_sante\template\espace_perso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5e81857eb0c5_45791271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ef4133b64de4347d693163df70a41956103a62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\espace_perso.tpl',
      1 => 1583250996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5e81857eb0c5_45791271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21250028255e5e81857e18b7_84240054', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_21250028255e5e81857e18b7_84240054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21250028255e5e81857e18b7_84240054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="margin-top: 200px"></div> 
    <div class="container">
        <h1>Bienvenu sur votre espace personnel: <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getPrenom();?>
</h1>
        <p>Vous pouvez changer vos informations et coordonnées personnelles</p>

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

                <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</p>
                <?php }?>
            </form>
    </div>



<?php
}
}
/* {/block "content"} */
}
