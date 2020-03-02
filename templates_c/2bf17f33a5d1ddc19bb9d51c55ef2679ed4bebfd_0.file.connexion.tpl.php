<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 13:11:14
  from 'C:\xampp\htdocs\projet_coach_sante\template\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cf7e20e5437_25740129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf17f33a5d1ddc19bb9d51c55ef2679ed4bebfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\connexion.tpl',
      1 => 1583148763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cf7e20e5437_25740129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2367607455e5cf7e20e02d1_89665356', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_2367607455e5cf7e20e02d1_89665356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2367607455e5cf7e20e02d1_89665356',
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
        <div class="">
        <h2>Connexion</h2>
        <form action="" method="post">
            <label>Email</label>
            <input type="email" name="email" id="email" required><br/>
            <label>Mot de passe</label>
            <input type="password" name="password" id="password" required><br/>
            <button type="submit" class="btn anton bg_yel_oni" name="connexion">Connexion</button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('inscription');?>
" class="btn anton bg_yel_oni">Pas encore membre? Je m'inscris!</a>
        </form>
    </div>

<?php
}
}
/* {/block "content"} */
}
