<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 16:50:09
  from 'C:\xampp\htdocs\projet_coach_sante\template\admin_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e611fb191d4c4_84339950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43b38ef8b861c90e93cc8c68a55f960f9d539bb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\admin_manager.tpl',
      1 => 1583423377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e611fb191d4c4_84339950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18069507655e611fb1900312_37837794', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_18069507655e611fb1900312_37837794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18069507655e611fb1900312_37837794',
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
                <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
            <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['delete']->value)) {?>
            <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</div>
        <?php }?>


        <h2 class="text-center">LISTE DES UTILISATEURS</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personnes']->value, 'personne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['personne']->value) {
?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header anton"><?php echo $_smarty_tpl->tpl_vars['personne']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['personne']->value['prenom'];?>
</h5>
                        <div class="card-text">
                            <div class="row">
                                <div class="col-12 col-md-4 text-center"><div class="p-4"><?php echo $_smarty_tpl->tpl_vars['personne']->value['email'];?>
</div></div> 
                                <div class="col-12 col-md-4 text-center"><div class="p-4"><strong><?php echo $_smarty_tpl->tpl_vars['personne']->value['tel'];?>
</strong></div></div> 
                                <div class="col-12 col-md-4 text-center"><div class="p-4"><?php echo $_smarty_tpl->tpl_vars['personne']->value['nom_role'];?>
</div></div>
                            </div>
                        </div>
                        <div class="row">
                            <a class="col-3 col-md-3 ml-auto mr-auto btn anton black bg_yel_oni" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getUtilisateur($_smarty_tpl->tpl_vars['personne']->value['id_personne']);?>
">Modifier</a>
                            <a class="col-3 col-md-3 ml-auto mr-auto btn anton btn-danger" btn href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['personne']->value['id_personne'];
$_prefixVariable1 = ob_get_clean();
echo (($_smarty_tpl->tpl_vars['link']->value->getPage('delete')).('&id_personne=')).($_prefixVariable1);?>
">Supprimer l'utilisateur</a>
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
