{extends file="template/layout.tpl"}

{block name="content"}
    

    {* Vérification qu'une SESSION existe bien *}
    {if isset($utilisateur)}
        {* page affichée si l'utilisateur est membre *}
        {if $utilisateur->getId_role() == 3}
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
                            Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel
                        </p>
                    </div>
                </div>

            </div>

        </div>

            <div style="margin-top: 20px">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 ml-auto mr-auto">
                            <h2 class="text-center medium_font yellow my-3">Résumé de votre fiche du: <span class="black">{$fiche->getDate_fiche()|date_format:"%d/%m/%Y"}</span></h2>
                            <br>
                            <div class="card">
                                <label class="card-header anton" class="form-font anton">Alimentation (Saisissez vos repas de la semaine)</label>
                                <p class="card-body" style="line-height: 160%">{$fiche->getAlimentation()}</p>
                                <label class="card-header anton" class="form-font anton">Activités de la semaine <br> (Indiquez les exercices et la durée de vos entrainements)</label>
                                <p class="card-body" style="line-height: 160%">{$fiche->getActivite()}</p>
                                <label class="card-header anton" class="form-font anton">Commentaire</label>
                                <p class="card-body" style="line-height: 160%">{$fiche->getCommentaire()}</p>
                            </div>
                            <br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-md-4">
                                    <a href="{$link->getImage(500)}{$fiche->getChemin_photo_face()}" data-lightbox="fiche_suivi_face"><img src="{$link->getImage(500)}{$fiche->getChemin_photo_face()}" width="200" alt="photo de face"/></a>
                                </div>
                                <div class="offset-md-2"></div>
                                <div class="col-12 col-md-4">    
                                    <a href="{$link->getImage(500)}{$fiche->getChemin_photo_profil()}" data-lightbox="fiche_suivi_profil"><img src="{$link->getImage(500)}{$fiche->getChemin_photo_profil()}" width="200" alt="photo de profil"/></a>
                                </div>    
                            </div>        
                        </div>
                            
                    {* Block qui s'affiche si un coach a laissé des commentaires sur la fiche *}
                        <div style="margin-top: 100px" class="col-12 col-md-6 ml-auto mr-auto">
                            {if isset($commentaires)}
                            <div class="container">
                                <h2>Les conseils de Coach : {$coach}</h2>
                                {foreach from=$commentaires item=donnee}
                                    <div class="card">
                                        <label class="card-header anton" class="form-font anton">Sur l'alimentation</label>
                                        <p class="card-body" style="line-height: 160%">{$donnee.alimentation_coach}</p>
                                        <label class="card-header anton" style="margin-top: 100px" class="form-font anton">Sur votre activité physique</label>
                                        <p class="card-body" style="line-height: 160%">{$donnee.activite_coach}</p>
                                        <label class="card-header anton" style="margin-top: 100px" class="form-font anton">Autre(s) recommandation(s)</label>
                                        <p class="card-body" style="line-height: 160%">{$donnee.commentaire_coach}</p>
                                    </div>
                                {/foreach}
                            </div>
                            {/if}
                        </div>        
                    </div>
                    <div style="margin-top: 25px" class="row d-flex justify-content-around">    
                        <a style="margin-bottom: 20px" href="{$link->getPage('personne')}" class="col- col-md-4 ml-auto mr-auto btn anton yellow bg_black btn-lg">RETOUR</a>
                    </div>
                </div>

        {* page affichée si l'utilisateur est coach *}
        {elseif $utilisateur->getId_role() == 2 OR 1}
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

        <div style="margin-top: 30px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 ml-auto mr-auto">
                        <h2>Fiche de suivi du: {$fiche->getDate_fiche()|date_format:"%d/%m/%Y"}</h2>
                        <div class="card">
                            <label class="card-header anton" class="form-font anton yellow">Alimentation</label>
                            <p class="card-body">{$fiche->getAlimentation()}</p>
                            <br>
                            <label class="card-header anton" class="form-font anton yellow">Activités de la semaine</label>
                            <p class="card-body">{$fiche->getActivite()}</p>
                            <label class="card-header anton" class="form-font anton yellow">Commentaire</label>
                            <p class="card-body">{$fiche->getCommentaire()}</p>
                        </div>    
                    </div>
                    {* Formulaire pour commenter une fiche de suivi *}
                    <div style="margin-top: 40px" class="col-12 col-md-6 ml-auto mr-auto">
                        <a href="{$link->getImage(500)}{$fiche->getChemin_photo_face()}" data-lightbox="fiche_suivi_face"><img src="{$link->getImage(500)}{$fiche->getChemin_photo_face()}" width="150" alt="photo de face"/></a>
                        &nbsp;
                        <a href="{$link->getImage(500)}{$fiche->getChemin_photo_profil()}" data-lightbox="fiche_suivi_profil"><img src="{$link->getImage(500)}{$fiche->getChemin_photo_profil()}" width="150" alt="photo de profil"/></a>
                            <form action="" method="post">
                                <label class="anton">Conseil - Alimentation</label>
                                <br/>
                                <textarea class="form-control" name="alimentation_coach" id="alimentation_coach" rows="3" required></textarea>
                                <br/>
                                <label style="margin-top: 40px"  class="anton">Conseil - Activité</label>
                                <br/>
                                <textarea class="form-control" name="activite_coach"  id="activite_coach" rows="3" required></textarea>
                                <br/>
                                <label style="margin-top: 40px" class="anton">Conseil - Divers</label>
                                <br/>
                                <textarea class="form-control" name="commentaire_coach" id="commentaire_coach" rows="3" required></textarea>
                                <br/>
                                <button type="submit" name="coach_review" class="btn anton bg_yel_oni">Soumettre le compte-rendu</button>
                            </form>
                            </div>   
                    </div>     
                </div>           
            </div>        
        {/if}
    <br><br>
    {/if}

{/block}