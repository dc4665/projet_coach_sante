{* FICHIER TPL EN PHASE DE PROTOYPE POUR TESTER L'AFFICHAGE *}
{extends file="template/layout.tpl"}

{block name="content"}

    <div style="margin-top: 200px"></div> 
    <div class="container">
        <h2>Mes fiches de suivi</h2>
        {* {$fiches|@var_dump} *}
        {foreach from=$fiches item=fiche}
            <a href="{$link->getFiche($fiche->getId_fiche())}">Fiche: {$fiche->getDate_fiche()}</a></br>

        {/foreach}


    </div>

{/block}