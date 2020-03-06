{* Code de Léo *}
{extends file="template/layout.tpl"}

{block name="content"}
<!-- Bandeau -->
<div class="bandeau">
            <div id="bg_admin">

            </div>
                <div class="bg_opacity">
                </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ZONE RECHERCHE</h1>

                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Vous pouvez rechercher et afficher les coordonnées de tous les membres, coachs et admin du site, dans cette section.                         
                        </p>
                    </div>
                </div>
            </div>
    </div>
<!-- Zone de recherche -->
    <div class="container">
        <div style="margin-top: 50px" class="row d-flex justify-content-center">
            <form action="" method="post">
                <input class="form-control" type="search" name="recherche" placeholder="">
                &nbsp;
                <button type="submit" value="" name="rechercher" class="btn anton yellow bg_black"><i class="yellow fas fa-search"></i> Rechercher</button>
            </form>
        </div>    
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