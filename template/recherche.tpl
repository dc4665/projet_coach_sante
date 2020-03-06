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
            <button type="submit" value="" name="rechercher" class="ml-auto mr-auto btn yellow anton bg_black"">Rechercher</button>
        </form>
    </div>
    {if isset($clients)}
        {foreach from=$clients item=client}
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="card recherche p-2">
                            <h1>Resultat de la recherche</h1>
                            <p class="recherche">Nombre de fiches de suivi : {$client->getNombreFiche($client->getId_personne())}</p>
                            <p class="recherche">Nom: {$client->getNom()}</p>
                            <p class="recherche">Prenom: {$client->getPrenom()}</p>
                            <p class="recherche">Tel: +33{$client->getTel()}</p>
                            <p class="recherche">Email: {$client->getEmail()}</p>
                            <p class="recherche">Date de naissance: {$client->getDate_naissance()}</p>
                            <p class="recherche">Taille: {$client->getTaille()} cm</p>
                    </div>
                </div>
            </div>
        {/foreach}
    {/if}
    {if isset($alert)}
       <div class="alert-danger recherche">
        {$alert}
        </div>
    {/if}
{/block}