<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 15:47:06
  from 'C:\xampp\htdocs\projet_coach_sante\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fbf6aee3a37_85076066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1e1c22dc8c68e86800dae859f4ab072c80f3b1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\header.tpl',
      1 => 1583320028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fbf6aee3a37_85076066 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="bg_yel_oni fixed-top shadow">
        
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('index');?>
"><img src="img/logo/logo_coach.png" width="150" alt="logo"/></a>
                <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('index');?>
">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('programme');?>
">PROGRAMMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('coachs');?>
">NOS COACHS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('transformations');?>
">TRANSFORMATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('contact');?>
">CONTACT</a>
                        </li>   
                    </ul>
                </div>
            </nav>           
        </div>

        <div>
            <div class="container text-center">
                <div class="row align-justify">
                    <?php if (empty($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
                    <a class="btn yellow bg_black anton mb-1" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('connexion');?>
" style="margin: auto">ESPACE CLIENT</a>
                    <a class="btn yellow bg_black anton mb-1" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('inscription');?>
" style="margin: auto">INSCRIPTION</a>
                    <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
                        <span class="col anton"><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->getPrenom();?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('personne');?>
" class="col anton btn">TABLEAU DE BORD</a>
                        <a href="?action=connexion&session=out" class="col anton btn button mb-1">DECONNEXION</a>
                    <?php }?>
                </div>
            </div>
        <div>

    </header><?php }
}
