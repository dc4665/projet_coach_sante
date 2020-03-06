{* Code de Léo *}
{extends file="template/layout.tpl"}

{block name="content"}
<!-- Bandeau -->
<div class="bandeau">
    <div id="bg_recherche">

    </div>
    <div class="bg_opacity">
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-12 mt-5">
                <h1 class="white big_font mt-5">RECHERCHE D'UN CLIENT</h1>
            </div>
            <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                <p class="white">
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Zone de recherche -->
    <div class="recherche">
        <form action="" method="post">
            <input type="search" name="recherche" placeholder="Nom ou prénom" />
            <button type="submit" value="" name="rechercher" class="btn_search">Rechercher</button>
        </form>
    </div>
    {if isset($clients)}
        {foreach from=$clients item=client}
            <div class="recherche">
                <h1>Resultat de la recherche</h1>
                <p>Nombre de fiches de suivi : {$client->getNombreFiche($client->getId_personne())}</p>
                <p>Nom: {$client->getNom()}</p>
                <p>Prenom: {$client->getPrenom()}</p>
                <p>Tel: {$client->getTel()}</p>
                <p>Email: {$client->getEmail()}</p>
                <p>Date de naissance: {$client->getDate_naissance()}</p>
                <p>Taille: {$client->getTaille()}</p>
            </div>
        {/foreach}
    {/if}
    {if isset($alert)}
       <div class="alert-danger recherche">
        {$alert}
        </div>
    {/if}
{/block}