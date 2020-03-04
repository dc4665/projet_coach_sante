<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 16:36:30
  from 'C:\xampp\htdocs\projet_coach_sante\template\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fcafe73fe29_70689201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf17f33a5d1ddc19bb9d51c55ef2679ed4bebfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\connexion.tpl',
      1 => 1583336187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fcafe73fe29_70689201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3415601255e5fcafe734087_55371383', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_3415601255e5fcafe734087_55371383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3415601255e5fcafe734087_55371383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Partie avec la bannière -->
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
    <!-- Partie formulaire de connexion-->
        <div class="container">
        <div class="connexion">
            <h2 style="margin-top: 50px" class="big_font">CONNEXION</h2>
                        <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
            <?php }?>
            <form action="" method="post">
                <?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
                <div><?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>
</div>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['erreur_mail']->value)) {?>
                <div><?php echo $_smarty_tpl->tpl_vars['erreur_mail']->value;?>
</div>
                <?php }?>
                <label class="form_font anton">E-MAIL</label>
                <input type="email" class="col-3 col-md-3 ml-auto mr-auto form-control" name="email" id="email" required><br/>
                <label class="form_font anton">MOT DE PASSE</label>
                <input type="password" class="col-3 col-md-3 ml-auto mr-auto form-control" name="password" id="password" required><br/>
                <button style="margin-bottom: 50px" type="submit" class="btn anton bg_yel_oni btn-lg" name="connexion">CONNEXION</button>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('inscription');?>
" style="margin-bottom: 50px" class="btn anton yellow bg_black btn-lg">Pas encore membre? Je M'inscris!</a>
            </form>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
