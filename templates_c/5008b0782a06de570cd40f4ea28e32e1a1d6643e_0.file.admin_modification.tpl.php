<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 16:18:58
  from 'C:\xampp\htdocs\projet_coach_sante\template\admin_modification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e611862b9f142_46935787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5008b0782a06de570cd40f4ea28e32e1a1d6643e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\admin_modification.tpl',
      1 => 1583421514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e611862b9f142_46935787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7378312505e611862b8f788_77586949', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_7378312505e611862b8f788_77586949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7378312505e611862b8f788_77586949',
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
        <h1>Vous pouvez changer les informations et le role de: <br/> <?php echo $_smarty_tpl->tpl_vars['personne']->value->getNom();?>
 <?php echo $_smarty_tpl->tpl_vars['personne']->value->getPrenom();?>
</h1>

                <form action="" method="post">
                    <label>Nom</label>
                    <input type="text" name="nom" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getNom();?>
" required /><br/>

                    <label>Prenom</label>
                    <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getPrenom();?>
" required /><br/>

                    <label>Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getEmail();?>
" required /><br/>

                    <label>Téléphone</label>
                    <input type="tel" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getTel();?>
" required /><br/>

                    <label>Roles</label>
                    <select id="role" name="role" required />
                            <option value="" selected>--</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getId_role();?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->getNom_role();?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <br/>
                    <button type="submit" name="modification" class="btn anton bg_yel_oni">Valider les changements</button>

                </form>
    </div>

<?php
}
}
/* {/block "content"} */
}
