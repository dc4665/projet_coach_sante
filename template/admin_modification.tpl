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
        <h2 class="text-center">Informations et rôle de: {$personne->getNom()} {$personne->getPrenom()}</h2>
            <div class="d-flex justify-content-center">
                <form action="" method="post">
                    <label class="anton">NOM &nbsp;:</label>
                    <input class="form-control" type="text" name="nom" id="nom" value="{$personne->getNom()}" required /><br/>

                    <label class="anton">PRENOM &nbsp;:</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" value="{$personne->getPrenom()}" required /><br/>

                    <label class="anton">E-MAIL &nbsp;:</label>
                    <input class="form-control" type="email" name="email" id="email" value="{$personne->getEmail()}" required /><br/>

                    <label class="anton">TELEPHONE &nbsp;:</label>
                    <input class="form-control" type="tel" name="tel" id="tel" value="{$personne->getTel()}" required /><br/>

                    <label class="anton">RÔLES &nbsp;:</label>
                    <select id="role" class="form-control" name="role" required />
                            <option value="" selected>--</option>
                        {foreach from=$roles item=role}
                            <option value="{$role->getId_role()}">{$role->getNom_role()}</option>
                        {/foreach}
                    </select>
                    <br/>
                    <button style="margin-bottom: 20px" type="submit" name="modification" class="btn anton bg_yel_oni btn-lg">VALIDER LES CHANGEMENTS</button>

                </form>
            </div>    
    </div>

{/block}