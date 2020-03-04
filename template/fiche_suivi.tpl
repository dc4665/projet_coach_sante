{extends file="template/layout.tpl"}

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

    {* Vérification qu'une SESSION existe bien *}
    {if isset($utilisateur)}
        {* page affichée si l'utilisateur est membre *}
        {if $utilisateur->getId_role() == 3}
            <div style="margin-top: 50px">
                <div class="connexion">
                    <h2 class="medium_font yellow">Résumé de votre fiche du: {$fiche->getDate_fiche()}</h2>
                    <br>
                    <label style="color: grey" class="form-font anton">Alimentation (Saisissez vos repas de la semaine)</label>
                    <p>{$fiche->getAlimentation()}</p>
                    <label style="color: grey" class="form-font anton">Activités de la semaine <br> (Indiquez les exercices et la durée de vos entrainements)</label>
                    <p>{$fiche->getActivite()}</p>
                    <label style="color: grey" class="form-font anton">Commentaire</label>
                    <p>{$fiche->getCommentaire()}</p>
                        <a href="{$link->getPage('personne')}" class="col-3 col-md-3 ml-auto mr-auto btn anton yellow bg_black btn-lg">RETOUR</a>
                </div>

            {* Block qui s'affiche si un coach a laissé des commentaires sur la fiche *}
            {if isset($commentaires)}
            <div class="container">
                <h2>Les commentaires de Coach : {$coach}</h2>
                {foreach from=$commentaires item=donnee}
                    <div>
                        <p>{$donnee.alimentation_coach}</p>
                        <p>{$donnee.activite_coach}</p>
                        <p>{$donnee.commentaire_coach}</p>
                    </div>
                {/foreach}
            </div>
            {/if}

        {* page affichée si l'utilisateur est coach *}
        {elseif $utilisateur->getId_role() == 2 OR 1}
            <div style="margin-top: 50px"></div>
            <div class="connexion">
                <h2>Fiche de suivi du: {$fiche->getDate_fiche()}</h2>
                <label class="form-font anton yellow">Alimentation</label>
                <p>{$fiche->getAlimentation()}</p>
                <br>
                <label class="form-font anton yellow">Activités de la semaine</label>
                <p>{$fiche->getActivite()}</p>
                <label class="form-font anton yellow">Commentaire</label>
                <p>{$fiche->getCommentaire()}</p>
                <br/>

                <form action="" method="post">
                    <label>Conseil - Alimentation</label><br/>
                    <textarea type="text" name="alimentation_coach" id="alimentation_coach"></textarea><br/>
                    <label>Conseil - Activité</label><br/>
                    <textarea type="text" name="activite_coach" id="activite_coach"></textarea><br/>
                    <label>Conseil - Divers</label><br/>
                    <textarea type="text" name="commentaire_coach" id="commentaire_coach"></textarea><br/>
                    <button type="submit" name="coach_review" class="btn btn-primary">Soumettre le compte-rendu</button>

                    {if isset($success)}
                        <p>{$success}</p>
                    {/if}
                </form>

            </div>
        {/if}

    {/if}

{/block}