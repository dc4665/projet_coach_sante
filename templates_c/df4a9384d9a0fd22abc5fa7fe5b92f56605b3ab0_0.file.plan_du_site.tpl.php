<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 21:03:33
  from 'C:\xampp\htdocs\projet_coach_sante\template\plan_du_site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e542c15536ed5_35065046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4a9384d9a0fd22abc5fa7fe5b92f56605b3ab0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\plan_du_site.tpl',
      1 => 1582573880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e542c15536ed5_35065046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_520964155e542c15529319_78119789', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_520964155e542c15529319_78119789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_520964155e542c15529319_78119789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <!-- Partie Bannière -->
    <div class="bg_bande_couleur"> 
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="big_font mt-5">Plan du Site</h1>

                </div>
            </div>
            
        </div> 
    
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <ul id="plan_site">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('index');?>
">ACCUEIL</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('programme');?>
">Programmes</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('coachs');?>
">Nos Coachs</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('transformations');?>
">Transformations</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('contact');?>
">Contact</a></li>
                        <li class="uppercase"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage("mentions_legales");?>
">Mentions légales</a></li>
                        <li class="uppercase"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage("politiques_confidentialites");?>
">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
         

<?php
}
}
/* {/block "content"} */
}
