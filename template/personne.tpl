{* FICHIER TPL EN PHASE DE PROTOYPE POUR TESTER L'AFFICHAGE *}
{extends file="template/layout.tpl"}

{* Si l'utilisateur connecté est membre *}
{if $utilisateur->getId_role() == 3}
    {block name="content"}

        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Mes fiches de suivi: {$utilisateur->getNom()}</h2>
            {* {$fiches|@var_dump} *}
            {foreach from=$fiches item=fiche}
                <a href="{$link->getFiche($fiche->getId_fiche())}">Fiche: {$fiche->getDate_fiche()}</a></br>

            {/foreach}
        </div>

        <div><a href="{$link->getPage('nouvelle_fiche')}" class="btn btn-primary">Soumettre une nouvelle fiche de suivi</a></div>

    {/block}

{* Si l'utilisateur connecté est Coach *}
{elseif $utilisateur->getId_role() == 2}
    {block name="content"}
        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: {$utilisateur->getNom()}</h2>
                    
        </div>

    {/block}

{* Si l'utilisateur connecté est Administrateur *}
{elseif $utilisateur->getId_role() == 1}
    {block name="content"}
        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach et Administrateur: {$utilisateur->getNom()}</h2>
                    
        </div>
        
    {/block}
{/if}

