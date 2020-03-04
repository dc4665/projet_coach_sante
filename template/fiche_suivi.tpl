{extends file="template/layout.tpl"}

{block name="content"}

    {* Vérification qu'une SESSION existe bien *}
    {if isset($utilisateur)}
        {* page affichée si l'utilisateur est membre *}
        {if $utilisateur->getId_role() == 3}
            <div style="margin-top: 200px"></div>
                <div class="container">
                    <h2>Utilisateur</h2>
                    <p>{$fiche->getDate_fiche()}</p>
                    <p>{$fiche->getAlimentation()}</p>
                    <p>{$fiche->getActivite()}</p>
                    <p>{$fiche->getCommentaire()}</p>
                    <p></p>
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
            <div style="margin-top: 200px"></div>
            <div class="container">
                <h2>Coach</h2>
                <p>{$fiche->getAlimentation()}</p>
                <p>{$fiche->getActivite()}</p>
                <p>{$fiche->getCommentaire()}</p>
                <p>{$fiche->getDate_fiche()}</p>
                <br/>
        {* Fromulaire pour commenter une fiche de suivi *}
                <form action="" method="post">
                    <label>Conseil - Alimentation</label><br/>
                    <textarea type="text" name="alimentation_coach" id="alimentation_coach"></textarea><br/>
                    <label>Conseil - Activité</label><br/>
                    <textarea type="text" name="activite_coach" id="activite_coach"></textarea><br/>
                    <label>Conseil - Divers</label><br/>
                    <textarea type="text" name="commentaire_coach" id="commentaire_coach"></textarea><br/>
                    <button type="submit" name="coach_review" class="btn btn-primary">Soumettre le compte-rendu</button>
                </form>

            </div>
        {/if}

    {/if}

{/block}