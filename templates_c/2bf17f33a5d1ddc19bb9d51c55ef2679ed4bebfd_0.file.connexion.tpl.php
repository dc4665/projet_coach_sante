<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 22:11:53
  from 'C:\xampp\htdocs\projet_coach_sante\template\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e558d996f4ea5_81720845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf17f33a5d1ddc19bb9d51c55ef2679ed4bebfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\connexion.tpl',
      1 => 1582665111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e558d996f4ea5_81720845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6049850945e558d9956abf9_70755924', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_6049850945e558d9956abf9_70755924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6049850945e558d9956abf9_70755924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div style="margin-top: 200px"></div>

    <div class="container">
        <h2>Connexion</h2>
        <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPage('client');?>
" method="post">
            <label>Email</label>
            <input type="email" name="email" id="email" required><br/>
            <label>Mot de passe</label>
            <input type="password" name="password" id="password" required><br/>
            <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
        </form>
    </div>

<?php
}
}
/* {/block "content"} */
}
