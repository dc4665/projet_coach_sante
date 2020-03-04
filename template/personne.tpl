{* FICHIER TPL EN PHASE DE PROTOYPE POUR TESTER L'AFFICHAGE *}
{extends file="template/layout.tpl"}

{* Si l'utilisateur connecté est membre *}
{if $utilisateur->getId_role() == 3}
    {block name="content"}

    <div class="bandeau">
            <div id="bg_connexion">

            </div>
                <div class="bg_opacity">
                </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ESPACE CLIENT</h1>

                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                        <p class="white">
                            Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel
                        </p>
                    </div>
                </div>
            </div>
    </div>
    <div class="connexion form_font anton">
        <div class="col-12 col-md-6 ml-auto mr-auto"> 
            <h2 class="yellow">Bienvenu dans votre espace personnel: {$utilisateur->getPrenom()}</h2><br>
            {* Condition qui s'active après l'envoie d'une fiche de suivi *}
            {if isset($success)}
                <div class="alert-success">{$success}</div>
            {/if}

            {* Condition qui s'active après la mise à jour des infos personnelle *}
            {if isset($modification)}
                <div class="alert-success">{$modification}</div>
            {/if}
            <div>
                <a href="{$link->getPage('espace_perso')}"><i class="fas fa-cog"></i></a>
                <p>Modifier mes Informations</p>
            </div>

            <p class="medium_font"><img id="clipboard" class="img-fluid" src="img/fiche_suivi.png" alt="clipboard icon"><em><strong>Mes Fiches</strong></em></p>
            {foreach from=$fiches item=fiche}
                <a class="fiche_suivi" href="{$link->getFiche($fiche->getId_fiche())}">Fiche du {$fiche->getDate_fiche()}</a><br>
                
                {if $fiche->getActif() == 0}
                    <p>En attente de suivi</p>
                {elseif $fiche->getActif() == 1}
                    <p>Cette fiche a été commentée!</p>
                {/if}
            {/foreach}
            <br>

            <div class="text-align: center"><a href="{$link->getPage('nouvelle_fiche')}" class="btn anton bg_yel_oni btn-lg">SOUMETTRE UNE NOUVELLE FICHE</a></div>
        </div>
    </div>
    {/block}

{* Si l'utilisateur connecté est Coach *}
{elseif $utilisateur->getId_role() == 2}
    {block name="content"}
        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: {$utilisateur->getNom()}</h2>
            <p>Voici toutes les fiches en attentes</p>
            {if isset($success)}
                {$success}
            {/if}
            {foreach from=$fiches item=fiche}
                <div class="card">
                    <p>{$fiche.nom} {$fiche.prenom}</p>
                    <p>{$fiche.date_fiche}</p>
                    <a href="{$link->getFiche($fiche.id_fiche)}">Consulter la fiche de suivi</a>
                </div>
            {/foreach}
                    
        </div>

    {/block}

{* Si l'utilisateur est administrateur *}
{elseif $utilisateur->getId_role() == 1}
    {block name="content"}
        <div style="margin-top: 200px"></div> 
        <div class="container">
            <h2>Hello Coach: {$utilisateur->getNom()}</h2>
            <a href="{$link->getPage('admin_manager')}">Accéder à la zone d'administration</a>
            <p>Voici toutes les fiches en attentes</p>
            {if isset($success)}
                {$success}
            {/if}
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

