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
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel.
                        </p>
                    </div>
                </div>
            </div>
    </div>
    <div style="margin-top: 20px" class="container form_font anton">
        <div class="row">
            <div class="col-12 col-md-6 ml-auto mr-auto"> 
                <h2 style="text-align: center" class="yellow my-3">BIENVENU DANS VOTRE ESPACE PERSONNEL: <span class="black">{$utilisateur->getPrenom()}</span></h2>
                {* Condition qui s'active après la mise à jour des infos personnelle *}
                {if isset($modification)}
                    <div class="alert-success">{$modification}</div>
                {/if}
                {* Condition qui s'active après l'envoie d'une fiche de suivi *}
                {if isset($success)}
                    <div class="alert-success">{$success}</div>
                {/if}

                <p class="medium_font"><img id="clipboard" class="img-fluid my-4" src="img/fiche_suivi.png" alt="clipboard icon"><em><strong>Mes Fiches</strong></em></p>
                {foreach from=$fiches item=fiche}
                <div class="d-flex justify-content-center mb-4">
                    <div class="card w-75">
                        <h5 class="card-header ">
                                <a class="fiche_suivi" href="{$link->getFiche($fiche->getId_fiche())}">Fiche du {$fiche->getDate_fiche()|date_format:"%d/%m/%Y"}</a></h5>
                            <div class="card-body">    
                            {if $fiche->getActif() == 0}
                                <p class="card-text">En attente de suivi</p>
                            {elseif $fiche->getActif() == 1}
                                <p class="card-text">Cette fiche a été commentée <i class="fas fa-check"></i></p>
                            {/if}
                            </div>
                    </div>
                </div>        
                {/foreach}
                <br>
                <div style="margin-bottom: 20px" class="row d-flex justify-content-around">            
                    <a class="btn anton yellow bg_black" href="{$link->getPage('espace_perso')}"><i style="padding-right: 10px" class="yellow fas fa-cog"></i>MODIFIER MES INFORMATIONS</a>
                    <a href="{$link->getPage('nouvelle_fiche')}" class="btn anton bg_yel_oni btn-lg">SOUMETTRE UNE NOUVELLE FICHE</a> 
                </div>    
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
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Dispensez vos conseils en matières de nutrition et d'exercice de musculation, pour que chaque client ait un suivi personnalisé dans cet espace.
                        </p>
                    </div>
                </div>
            </div>
    </div>
        <div style="margin-top: 20px"></div> 
        <div class="container">
            <h2 style="text-align: center">Hello Coach {$utilisateur->getNom()}</h2>
                <div style="margin-top: 20px" class="row d-flex justify-content-center">
                    <a style="margin-bottom: 10px" class="col-12 col-md-3 ml-auto mr-auto btn yellow anton bg_black" href="{$link->getPage('recherche')}"><i class="yellow fas fa-search"></i> Rechercher un membre</a>
                </div>
            <p style="text-align: center"><em>Voici toutes les fiches en attentes</em></p>
            {* Condition qui confirme qu'une fiche de suivi a bien été envoyée commentée *}
            {if isset($success)}
                <div class="alert alert-success">{$success}</div>
            {/if}
            {foreach from=$fiches item=fiche}
            <div class="d-flex justify-content-center">    
                <div class="card w-50">
                    <div class="card-body">
                        <h5 class="card-header text-center fiche_suivi_bold" >{$fiche.nom}  {$fiche.prenom} &nbsp; {$fiche.date_fiche|date_format:"%d/%m/%Y"}</h5>
                        <br>
                            <a class="col-12 ml-auto mr-auto btn anton black bg_yel_oni" href="{$link->getFiche($fiche.id_fiche)}">Consulter la fiche de suivi &nbsp;<i class="fas fa-pencil-alt"></i></a>
                    </div>    
                </div>
            </div>    
                <div style="margin-bottom: 20px"></div>
            {/foreach}
                    
        </div>

    {/block}

{* Si l'utilisateur est administrateur *}
{elseif $utilisateur->getId_role() == 1}
    {block name="content"}
    <div class="bandeau">
            <div id="bg_admin">
            </div>
                <div class="bg_opacity">
                </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ZONE ADMINISTRATEUR</h1>
                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Bienvenu dans la zone d'administration.<br>
                            Gérez vous-même les autorisations d'accès des coachs et les comptes clients.<br>
                            Vous pouvez également supprimer les accès coachs et les comptes clients.
                        </p>
                    </div>
                </div>
            </div>

    </div>
        <div style="margin-top: 20px"></div> 
        <div class="container">
            <h2 style="text-align: center">Hello Coach {$utilisateur->getNom()}</h2>
                <div style="margin-top: 25px" class="row">
                    <a style="margin-bottom: 30px" class="col-12 col-md-3 ml-auto mr-auto btn yellow anton bg_black" href="{$link->getPage('recherche')}"><i class="yellow fas fa-search"></i> Rechercher un membre</a>
                    <a style="margin-bottom: 30px" class="col-12 col-md-3 ml-auto mr-auto btn black anton btn-outline-warning" href="{$link->getPage('admin_manager')}"><i class="black fas fa-cog"></i> Accéder à la zone d'administration</a>
                </div>

                <p style="text-align: center"><em>Voici toutes les fiches en attentes</em></p>
                {if isset($success)}
                    <div class="alert alert-success">{$success}</div>
                {/if}
                {foreach from=$fiches item=fiche}
                <div class="d-flex justify-content-center">
                    <div class="card w-50">
                        <div class="card-body">
                            <h5 class="card-header text-center fiche_suivi_bold" >{$fiche.nom}  {$fiche.prenom} &nbsp; {$fiche.date_fiche|date_format:"%d/%m/%Y"}</h5>
                            <br>
                            <a class="col-12 ml-auto mr-auto btn anton black bg_yel_oni" href="{$link->getFiche($fiche.id_fiche)}">Consulter la fiche de suivi &nbsp;<i class="fas fa-pencil-alt"></i></a>
                        </div>      
                    </div>
                </div>   

                <div style="margin-bottom: 20px"></div>
            {/foreach}
        </div>
    {/block}

{/if}


