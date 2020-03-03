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
        <h2 class="">VOTRE FICHE DE SUIVI DE LA SEMAINE</h2>
            <form action="" method="post">
                <label>Poids (en kg)</label>
                <input type="number" name="poids" id="poids" required /><br/>

                <label>Date</label>
                <input type="date" name="date" id="date" required /><br/>

                <label>Alimentation</label>
                <textarea type="text" name="alimentation" id="alimentation" required/></textarea><br/>

                <label>Activité</label> 
                <textarea type="text" name="activite" id="activite" required/></textarea><br/>

                <label>Commentaire</label>
                <textarea type="text" name="commentaire" id="commentaire" ></textarea><br/>

                <button type="submit" name="nouvelle_fiche" class="btn anton bg_yel_oni btn-lg">ENVOYER</button> 

                {if isset($success)}
                    <div>{$success}</div>
                {/if}
            </form>  
    </div>     
{/block}