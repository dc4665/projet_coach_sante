{extends file="template/layout.tpl"}

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
                            Gérez vous même les autorisations d'accès des coachs et les comptes clients.<br>
                            Vous pouvez également supprimer les accès coachs et les comptes clients.
                            
                        </p>
                    </div>
                </div>

            </div>

    </div>

    <div style="margin-top: 20px"></div> 
    <div class="container">
        {* Condition qui s'exécute lors de l'update d'un utilisateur *}
        {if isset($success)}
            <div class="alert-success">{$success}</div>
        {/if}

        <h2 class="text-center">LISTE DES UTILISATEURS</h2>
        {foreach from=$personnes item=personne}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header anton">{$personne.nom} {$personne.prenom}</h5>
                        <div class="card-text">
                            <div class="row">
                                <div class="col-12 col-md-4 text-center"><div class="p-4">{$personne.email}</div></div> 
                                <div class="col-12 col-md-4 text-center"><div class="p-4"><strong>{$personne.tel}</strong></div></div> 
                                <div class="col-12 col-md-4 text-center"><div class="p-4">{$personne.nom_role}</div></div>
                            </div>
                        </div>
                        <div class="row">
                            <a class="col-5 col-md-3 ml-auto mr-auto btn anton black bg_yel_oni" href="{$link->getUtilisateur($personne.id_personne)}">Modifier</a>
                            <a class="col-5 col-md-3 ml-auto mr-auto btn anton btn-danger" btn href="{$link->getPage('delete')}">Supprimer l'utilisateur</a>
                        </div> 
                </div>
            </div>
            <div style="margin-bottom: 20px"></div>
        {/foreach}
    </div>

    

{/block}