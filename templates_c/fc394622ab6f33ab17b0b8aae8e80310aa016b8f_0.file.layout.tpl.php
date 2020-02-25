<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 21:45:30
  from 'C:\xampp\htdocs\projet_coach_sante\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e55876aedf0a2_50631465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc394622ab6f33ab17b0b8aae8e80310aa016b8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\layout.tpl',
      1 => 1582574672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e55876aedf0a2_50631465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach Sante - Accueil</title>
    <meta name="description" content="Coaching Personnel, musculation, fitness et perte de poids. Nous sommes une petite équipe de coachs passionnés proche de nos clients.">
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link href="./fontawesome/css/all.css" rel="stylesheet" />
     <?php echo '<script'; ?>

      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap.js"><?php echo '</script'; ?>
>
    <link href="https://fonts.googleapis.com/css?family=Anton%7CRoboto&display=swap" rel="stylesheet"> 

    <!-- Fichier pour Lightbox -->
    <link href="css/lightbox.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="js/lightbox-plus-jquery.js"><?php echo '</script'; ?>
>
</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2022427295e55876acc5400_09245624', "header");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10459098265e55876aedc6f6_62194085', "content");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7851075115e55876aeddd65_29377968', "footer");
?>



<?php echo '<script'; ?>
 src="js/lightbox.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block "header"} */
class Block_2022427295e55876acc5400_09245624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2022427295e55876acc5400_09245624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_10459098265e55876aedc6f6_62194085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10459098265e55876aedc6f6_62194085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_7851075115e55876aeddd65_29377968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7851075115e55876aeddd65_29377968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
