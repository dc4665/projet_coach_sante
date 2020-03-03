<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 09:04:40
  from 'C:\xampp\htdocs\projet_coach_sante\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5e0f98baf066_16700653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc394622ab6f33ab17b0b8aae8e80310aa016b8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\layout.tpl',
      1 => 1582616066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e5e0f98baf066_16700653 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20473910295e5e0f98ba8d88_22925905', "header");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144380715e5e0f98badf67_87743510', "content");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15317268085e5e0f98bae6a2_90867154', "footer");
?>



<?php echo '<script'; ?>
 src="js/lightbox.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block "header"} */
class Block_20473910295e5e0f98ba8d88_22925905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_20473910295e5e0f98ba8d88_22925905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_144380715e5e0f98badf67_87743510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_144380715e5e0f98badf67_87743510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_15317268085e5e0f98bae6a2_90867154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15317268085e5e0f98bae6a2_90867154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
