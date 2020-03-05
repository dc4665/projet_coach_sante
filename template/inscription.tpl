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
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel
                        </p>
                    </div>
                </div>

            </div>

    </div>
    {* Formulaire d'inscription *}
            <div style="margin-top: 20px" class="container form_font anton">
                <h2 style="text-align: center" class="medium_font">INSCRIPTION</h2>
                    <div class="row">
                        <div class="col-12 col-md-6 ml-auto mr-auto">
                            <form action="" method="post"><br>
                                {if isset($alert)}
                                    <div class="alert-warning">{$alert}</div>
                                {/if}

                                {* Parti pour que la personne puisse choisir son sexe *}
                                <p class="form_font anton">VOUS ÊTES : </p>     
                                <input type="radio" name="sexe" id="homme" value="homme">
                                <label for="homme">Homme</label>      
                                <input type="radio" name="sexe" id="femme" value="femme"> 
                                <label for="femme">Femme</label>       
                                <br/>

                                {* J'ai volontairement mis des espaces pour que tu puisses mieux t'y retrouver *}
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" required />

                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" required />

                                <label>Taille (en CM)</label>
                                <input type="number" class="form-control" name="taille" id="taille" required />

                                <label>Date de naissance</label>
                                <input type="date" class="form-control" name="date_naissance" id="date_naissance" required />

                                <label>E-Mail</label>
                                <input type="email" class="form-control" name="email" id="email" required />

                                <label>Téléphone</label>
                                <input type="tel" class="form-control" name="tel" id="tel" required />

                                <label>Mot de passe</label>
                                <input type="password" class="form-control" name="password" id="password" required /><br/>

                                <button style="margin-bottom: 20px" type="submit" name="inscription" class="btn anton bg_yel_oni btn-block">VALIDER L'INSCRIPTION</button>

                                {if isset($success)}
                                    <div>{$success}</div>
                                {/if}
                            </form>
                        </div>
                    </div>    
            </div>        
    
    
{/block}