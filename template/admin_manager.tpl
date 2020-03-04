{extends file="template/layout.tpl"}

{block name="content"}

    <div style="margin-top: 200px"></div> 
    <div class="container">
        <h1>Bienvenu dans la zone d'administration</h1>
        
        {* Condition qui s'exécute lors de l'update d'un utilisateur *}
        {if isset($success)}
            <div class="alert-success">{$success}</div>
        {/if}

        <h2>Liste des utilisateurs: </h2>
        {foreach from=$personnes item=personne}
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        {$personne.nom} {$personne.prenom}
                    </div>
                    <div class="card-text">
                        <div>{$personne.email}</div> 
                        <div>{$personne.tel}</div> 
                        <div>{$personne.nom_role}</div>
                    </div>
                    <div><a href="{$link->getUtilisateur($personne.id_personne)}">Modifier</a></div>
                    <div><a href="{$link->getPage('delete')}">Supprimer cet utilisateur</a></div> 

                </div>
            </div>
        {/foreach}
    </div>
    
    

{/block}