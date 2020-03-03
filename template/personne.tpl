{* FICHIER TPL EN PHASE DE PROTOYPE POUR TESTER L'AFFICHAGE *}
{extends file="template/layout.tpl"}

{* Si l'utilisateur connecté est membre *}
{if $utilisateur->getId_role() == 3}
    {block name="content"}

        <div style="margin-top: 200px"></div> 
        <div class="container">
            <a href="{$link->getPage('espace_perso')}">Accéder à mon espace personnel</a>
            <h2>Mes fiches de suivi: {$utilisateur->getNom()}</h2>
            {* {$fiches|@var_dump} *}
            {foreach from=$fiches item=fiche}
                <a href="{$link->getFiche($fiche->getId_fiche())}">Fiche: {$fiche->getDate_fiche()}</a></br>
                {if $fiche->getActif() == 0}
                    <p>En attente de suivi</p>
                {elseif $fiche->getActif() == 1}
                    <p>Cette fiche a été commentée!</p>
                {/if}
            {/foreach}
        </div>

        <div><a href="{$link->getPage('nouvelle_fiche')}" class="btn btn-primary">Soumettre une nouvelle fiche de suivi</a></div>

    {/block}

{* Si l'utilisateur connecté est Coach *}
{elseif $utilisateur->getId_role() == 2 OR 1}
    {block name="content"}
        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: {$utilisateur->getNom()}</h2>
            <p>Voici toutes les fiches en attentes</p>

            {foreach from=$fiches item=fiche}
                <div class="card">
                    <p>{$fiche.nom} {$fiche.prenom}</p>
                    <p>{$fiche.date_fiche}</p>
                    <a href="{$link->getFiche($fiche.id_fiche)}">Consulter la fiche de suivi</a>
                </div>
            {/foreach}
                    
        </div>

    {/block}

{/if}

{* Si l'utilisateur connecté est Administrateur *}
{* {elseif $utilisateur->getId_role() == 1}
    {block name="content"}
        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach et Administrateur: {$utilisateur->getNom()}</h2>
                    
        </div>
        
    {/block}
{/if} *}

