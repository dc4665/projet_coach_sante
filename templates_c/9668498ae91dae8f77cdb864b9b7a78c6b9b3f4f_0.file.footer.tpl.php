<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 09:31:06
  from 'C:\xampp\htdocs\projetcoachsante\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cc44a3c88b0_23969512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9668498ae91dae8f77cdb864b9b7a78c6b9b3f4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetcoachsante\\template\\footer.tpl',
      1 => 1582645513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cc44a3c88b0_23969512 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
        <div class="container">
            
            <div class="row py-3">
                
                <div class="col-12 col-md-1">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('index');?>
"><img src="img/logo/logo_coach_clair.png" width="150"  alt="logo blanc"></a>
                </div>
                
                <div class="offset-md-1 col-6 col-md-6">
                    <ul>
                        <li><h5>Liens Rapides</h5></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('programme');?>
">Programmes</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('coachs');?>
">Nos Coachs</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('transformations');?>
">Transformations</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('contact');?>
">Contact</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('plan_du_site');?>
">Plan du site</a></li>
                    </ul>
                </div>
                
                <div class="col-6 col-md-4">
                                   
                    <h5 class="white anton mt-3">Réseaux Sociaux</h5>
                                        
                    <div class="row">
                        <div class="col">
                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                        </div>
                        
                        <div class="col">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                        </div>
                        
                        <div class="col">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-12 text-center">
                    <p class="white">Coach Sante 2019 - <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage("mentions_legales");?>
">Mentions légales</a>  |  <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage("politiques_confidentialites");?>
">Politique de confidentialité</a></p>
                </div>
            </div>
            
        </div>
    </footer><?php }
}
