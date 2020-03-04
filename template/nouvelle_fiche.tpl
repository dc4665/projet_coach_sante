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

    <div class="connexion">
        <h2 class="medium_font">VOTRE FICHE DE SUIVI DE LA SEMAINE</h2>
            <br>
            <form action="" method="post">
                <label style="color: grey" class="form-font anton">Poids (en kg)</label>
                <input type="number" class="col-4 col-md-4 ml-auto mr-auto form-control" name="poids" id="poids" required /><br/>

                <label style="color: grey" class="form-font anton">Date de la fiche</label>
                <input type="date" class="col-4 col-md-4 ml-auto mr-auto form-control" name="date" id="date" required /><br/>

                <label style="color: grey" class="form-font anton">Alimentation (Saisissez vos repas de la semaine)</label>
                <textarea type="text" class="col-4 col-md-4 ml-auto mr-auto form-control" name="alimentation" id="alimentation" required/></textarea><br/>

                <label style="color: grey" class="form-font anton">Activités de la semaine <br> (Indiquez les exercices et la durée de vos entrainements)</label> 
                <textarea type="text" class="col-4 col-md-4 ml-auto mr-auto form-control" name="activite" id="activite" required/></textarea><br/>

                <label style="color: grey" class="form-font anton">Commentaire</label>
                <textarea type="text" class="col-4 col-md-4 ml-auto mr-auto form-control" name="commentaire" id="commentaire" ></textarea><br/>

                <button type="submit" name="nouvelle_fiche" class="col-4 col-md-4 ml-auto mr-auto btn anton bg_yel_oni btn-block">ENVOYER</button> 

            </form>  
    </div>     
{/block}