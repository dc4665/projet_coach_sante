<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 22:51:11
  from 'C:\xampp\htdocs\projet_coach_sante\template\nouvelle_fiche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5d7fcf69ba17_14968467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c3927b997006a489db0b0d3146d508023d4641' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_coach_sante\\template\\nouvelle_fiche.tpl',
      1 => 1583185426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d7fcf69ba17_14968467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2305310965e5d7fcf690b33_17989291', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "content"} */
class Block_2305310965e5d7fcf690b33_17989291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2305310965e5d7fcf690b33_17989291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 200px"></div> 
    <h1>Soumettre une nouvelle fiche de suivi</h1>
        <div class="container">

            <form action="" method="post">
                <label>Poids (en kg)</label>
                <input type="number" name="poids" id="poids" required /><br/>

                <label>Date</label>
                <input type="date" name="date" id="date" required /><br/>

                <label>Alimentation</label>
                <textarea type="text" name="alimentation" id="alimentation" required/></textarea><br/>

                <label>Activité</label> 
                <textarea type="text" name="activite" id="activite" required/></textarea><br/>

                <label>Commentaire</label>
                <textarea type="text" name="commentaire" id="commentaire" required/></textarea><br/>

                <button type="submit" name="nouvelle_fiche" class="btn anton bg_yel_oni">Soumettre la fiche</button> 

                <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
                    <div><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                <?php }?>

            </form> 

        </div> 
<?php
}
}
/* {/block "content"} */
}
