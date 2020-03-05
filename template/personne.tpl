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
    <div style="margin-top: 50px" class="container form_font anton">
        <div class="row">
            <div class="col-12 col-md-6 ml-auto mr-auto"> 
                <h2 style="text-align: center" class="yellow">BIENVENU DANS VOTRE ESPACE PERSONNEL: {$utilisateur->getPrenom()}</h2><br>
                {* Condition qui s'active après l'envoie d'une fiche de suivi *}
                {if isset($success)}
                    <div class="alert-success">{$success}</div>
                {/if}

                {* Condition qui s'active après la mise à jour des infos personnelle *}
                {if isset($modification)}
                    <div class="alert-success">{$modification}</div>
                {/if}
                <div>
                    <a class="btn anton black bg_yel_oni" href="{$link->getPage('espace_perso')}"><i style="padding-right: 10px" class="black fas fa-cog"></i>MODIFIER MES INFORMATIONS</a>
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

                <div style="margin-bottom: 50px" class="connexion"><a href="{$link->getPage('nouvelle_fiche')}" class="btn anton bg_yel_oni btn-lg">SOUMETTRE UNE NOUVELLE FICHE</a></div>
            </div>
        </div>    
    </div>
    {/block}

{* Si l'utilisateur connecté est Coach *}
{elseif $utilisateur->getId_role() == 2}
    {block name="content"}
    <div class="bandeau">
            <div id="bg_espace_coach">

            </div>
                <div class="bg_opacity">
                </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ESPACE COACH</h1>

                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                        <p class="white">
                            Dispensez vos conseils en matières de nutrition et d'exercice de musculation, pour que chaques clients est un suivi personnalisé dans cet espace.
                        </p>
                    </div>
                </div>
            </div>
    </div>
        <div style="margin-top: 50px"></div> 
        <div class="container">
            <h2 style="text-align: center">Hello Coach {$utilisateur->getNom()}</h2>
            <div><a href="{$link->getPage('recherche')}">Rechercher un membre</a></div>
            <p style="text-align: center"><em>Voici toutes les fiches en attentes</em></p>
            {if isset($success)}
                {$success}
            {/if}
            {foreach from=$fiches item=fiche}
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-header" >{$fiche.nom}  {$fiche.prenom}</h5>
                        <p class="card-text">{$fiche.date_fiche}</p>
                        <a class="btn anton black bg_yel_oni" href="{$link->getFiche($fiche.id_fiche)}">Consulter la fiche de suivi</a>
                    </div>    
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

