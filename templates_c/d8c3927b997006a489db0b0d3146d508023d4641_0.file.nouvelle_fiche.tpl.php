<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 16:54:26
  from 'C:\xampp\htdocs\projet_coach_sante\template\nouvelle_fiche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6120b2400178_40252595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c3927b997006a489db0b0d3146d508023d4641' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\nouvelle_fiche.tpl',
      1 => 1583413849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6120b2400178_40252595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15560056615e6120b23ff8c7_42447275', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_15560056615e6120b23ff8c7_42447275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15560056615e6120b23ff8c7_42447275',
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

    <div style="margin-top: 50px" class="connexion">
        <h2 class="medium_font">VOTRE FICHE DE SUIVI DE LA SEMAINE</h2>
            <br>
            <form action="" method="post">
                <label style="color: grey" class="form-font anton">Poids (en kg)</label>
                <input type="number" class="col-4 col-md-4 ml-auto mr-auto form-control" name="poids" id="poids" required /><br/>

                <label style="color: grey" class="form-font anton">Date de la fiche</label>
                <input type="date" class="col-4 col-md-4 ml-auto mr-auto form-control" name="date" id="date" required /><br/>

                <label style="color: grey" class="form-font anton">Alimentation (Saisissez vos repas de la semaine)</label>
                <textarea type="text" class="col-4 col-md-4 ml-auto mr-auto form-control" name="alimentation" id="alimentation" required/></textarea><br/>

                <label style="color: grey" class="form-font anton">Activités de la semaine <br> (Indiquez les exercices et la durée de vos entrainements)</label> 
                <textarea type="text" class="col-4 col-md-4 ml-auto mr-auto form-control" name="activite" id="activite" required/></textarea><br/>

                <label style="color: grey" class="form-font anton">Commentaire</label>
                <textarea type="text" class="col-4 col-md-4 ml-auto mr-auto form-control" name="commentaire" id="commentaire" ></textarea><br/>

                <button style="margin-bottom: 50px" type="submit" name="nouvelle_fiche" class="col-4 col-md-4 ml-auto mr-auto btn anton bg_yel_oni btn-block">ENVOYER</button> 

            </form>  
    </div>     
<?php
}
}
/* {/block "content"} */
}
