<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 09:31:06
  from 'C:\xampp\htdocs\projetcoachsante\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cc44a36bef7_62072798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e05fc3689dfb6fe6080c9fbc6edc38150a4035' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetcoachsante\\template\\layout.tpl',
      1 => 1582645513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e5cc44a36bef7_62072798 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1253187175e5cc44a34b496_08438050', "header");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1415704365e5cc44a36adc7_17934032', "content");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7117543755e5cc44a36b525_82062330', "footer");
?>



<?php echo '<script'; ?>
 src="js/lightbox.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block "header"} */
class Block_1253187175e5cc44a34b496_08438050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1253187175e5cc44a34b496_08438050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_1415704365e5cc44a36adc7_17934032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1415704365e5cc44a36adc7_17934032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_7117543755e5cc44a36b525_82062330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7117543755e5cc44a36b525_82062330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
