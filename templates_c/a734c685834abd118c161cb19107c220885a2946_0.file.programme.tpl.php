<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 16:39:04
  from 'C:\xampp\htdocs\projet_coach_sante\template\programme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fcb98aa98f0_98456072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a734c685834abd118c161cb19107c220885a2946' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\programme.tpl',
      1 => 1583225924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fcb98aa98f0_98456072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17886047815e5fcb98aa43b1_70036784', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_17886047815e5fcb98aa43b1_70036784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17886047815e5fcb98aa43b1_70036784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


     <!-- Partie avec la bannière -->
    <div class="bandeau shadow">
        <div id="bg_programme">
        
        </div>
        <div class="bg_opacity">      
        </div>
        
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="white big_font responsive_title mt-5">PROGRAMMES</h1>

                </div>
                <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                    <p class="white">
                        Nous établissons un programme unique pour chaque client. Nos programmes s'articulent autour de trois concepts clés: <br/> Un entraînement sur-mesure, une alimentation adaptée et un suivi personnalisé. 
                    </p>
                </div>
            </div>
            
        </div> 
        
    </div>

    <!-- Partie avec le Programme  -->
    
    <section class="container">
        
        <!-- Sous-partie Entraînement-->
        <div class="row align-items-center my-4">
            <div class="col-lg-6">
                <img src="img/programme_01.jpg" class="img-fluid img-thumbnail"  alt="personnes qui s'entrainent"/>
            </div>
            <div class="mt-4 mt-sm-3 col-lg-6">
                <h2>Entraînement sur-mesure</h2>
                <p>
                    Nos entraînements se concentrent sur toutes les parties du corps. Nous faisons travailler aussi bien le haut du corps que le bas. En plus du travail de renforcement musculaire, nous avons un programme de cardio qui vous aidera à retrouver un nouveau souffle. Le rythme et l'intensité des séances s'adaptent à vos besoins et objectifs. 
                </p>
            </div>
        </div>
        
        <!-- Sous-partie Alimentation -->
        <div class="row align-items-center my-4">
            <div class="order-2 order-lg-1 mt-4 mt-sm-3 col-lg-6">
                <h2>Alimentation adaptée</h2>
                <p>
                    L'alimentation est la pierre angulaire de toutes transformations physiques. Que ce soit pour vous muscler ou pour perdre du poids, le travail dans l'assiette est aussi important que celui en salle.<br/> Nous vous apprendrons à maîtriser votre alimentation afin d'optimiser un maximum vos résultats et de prendre les bonnes habitudes. 
                </p>
            </div>
            <div class="order-1 order-lg-2 col-lg-6">
                <img src="img/cooking.jpg" class="img-fluid img-thumbnail" alt="personne qui cuisine"/>
            </div>
        </div>
        
        <!-- Suivi Personnalisé -->
        <div class="row align-items-center my-4">
            <div class="col-lg-6">
                <img src="img/support.jpg" class="img-fluid img-thumbnail" alt="deux sportifs"/>
            </div>
            <div class="mt-4 mt-sm-3 col-lg-6">
                <h2>Suivi personnalisé</h2>
                <p>
                    Nous faisons avec chacun de nos clients des bilans réguliers. Nous construisons ainsi une relation de confiance qui vous permet d'évaluer vos progrès au quotidien. En tant que coach personnel, nous utilisons ces bilans pour optimiser au maximum votre régime et vos entraînements. Une angoisse? Une question? Besoin d'être reboosté? Nous sommes là pour vous. 
                </p>
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col">
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('contact');?>
" class="btn medium_font bg_yel_oni black anton my-3">COMMENCER</a>
            </div>
        </div>
        
    </section>

<?php
}
}
/* {/block "content"} */
}
